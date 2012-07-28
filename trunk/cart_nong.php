<?php //session_start(); ob_start();
	include_once("class_mysql.php");
	$db = new database();
	//get data == data in session array is all so already exist id
	echo"productCount".count($_SESSION["strProductID"])."<br>";
	if($_GET["ProductID"]!=""){
		echo"have product arlery";
		for($i=0; $i<=count($_SESSION["strProductID"]);$i++)
		{
			if($_SESSION["strProductID"][$i] == $_GET["ProductID"]){
			header("location:index.php?page=cart");
			//header("cart_nong.php");
			exit();
			}
		}	
	}
	if(trim($_GET["ProductID"])!="")
	{
		echo"not alreay product";
		$_SESSION["strP"]=$_SESSION["strP"]+1;
		$_SESSION["strProductID"][$_SESSION["strP"]]=$_GET["ProductID"];
		$_SESSION["strQuanlity"][$_SESSION["strP"]]=1;
		session_write_close();
		header("location:index.php?page=cart");
		//header("cart_nong.php");
	}
	//Delete data for my cart
	if($_GET["action"]=="Del"){
		echo"here delete";
		$_SESSION["strProductID"][$_GET[P]]="";
		$_SESSION["strQuanlity"][$_GET[P]]="";
		session_write_close();
		@header("location:index.php?page=cart");
		//header("cart_nong.php");
	}
	//Update data for my cart
	if($_POST["action"]=="Update"){
		echo"here edit<br>";
		$countQuanlity=count($_POST['txtQua']);//นับจำนวนอาร์เรย์ txtQua
		echo"countQuanlity$countQuanlity<br>";
		for($i=0;$i<count($_POST['txtQua']);$i++)
		{
			$strP= $_POST['txtP'][$i];
			$strQ = $_POST['txtQua'][$i];
			echo"strQ$strP<br>";
			echo"strQ$strQ<br>";
			if($strQ<=0){
				$strQ = 1;	
			}
			$_SESSION['strQuanlity'][$strP]=$strQ;
			echo $_SESSION['strQuanlity'][$strP]."<br>";
		}
		session_write_close();
		//@header("cart_nong.php");
		//@header("location:index.php?page=cart");
	}
?>
<form action="" method="post">
<table id="cart">
	<thead>
    	<tr>
        	<th>
            ลำดับ
            </th>
            <th>
            Product Name
            </th>
            <th>
            Price
            </th>
            <th>
            Quanlity
            </th>
            <th>
            Delete
            </th>
        </tr>
    </thead>
    <tbody>
    <?php 
	
	$strNum=1;
	for($i=0; $i<=count($_SESSION["strProductID"]);$i++){
	echo"productID$i".$_SESSION["strProductID"][$i]."<br>";
	$result_product=$db->tableSQL("product where product_id='".$_SESSION["strProductID"]["$i"]."'");
	$rs_product=mysql_fetch_array($result_product);
	if($rs_product){
		$rows=mysql_num_rows($result_product);
		echo" rows:$rows";
		
	?>
    	<tr>
        	<td>
            <?=$strNum;?>
            </td>
            <td>
            <?=$rs_product[product_name];?>
            </td>
            <td>
            <?=$rs_product[product_price];?>
            test number format<br>
            <?=number_format($rs_product[product_price],2,'.',',');?>
            </td>
            <td>
            <input type="hidden" name="txtP[]" value="<?=$i;?>">
            <input type="text" name="txtQua[]" value="<?=$_SESSION['strQuanlity'][$i]?>" size="3">
            </td>
            <td>
            <a href="index.php?page=cart&action=Del&P=<?=$i;?>">Del.</a>
            <a href="javascript:if(confirm('ok confirm now')==true){window.location='index.php?page=cart&action=Del&P=<?=$i?>'}">
            test
            </a>
            </td>
        </tr>
        
        <?php
		$strNum++;
        }
	}
		?>
    </tbody>
    </table>
    <table>
    	<tr>
        	<td>
            <input type="submit"  name="Update" value="Update"/>
            <input type="hidden" name="action" value="Update" />
            </td>
            <td>
            <input type="reset" value="Reset" />
            </td>
            <td>
            <input type="button" onclick="window.location='index.php'"  value="Link to Payment"/>
            </td>
        </tr>
    </table>
    
</form>