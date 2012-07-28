<?php
	//require("class_mysql.php");
	//$db = new database();
	//$db = new database();
	
	//get data == data in session array is all so already exist id
	if($_GET["ProductID"]!==""){
		for($i=1; $i<=count($_SESSION['strProductID']);$i++)
		{
			if($_SESSION['strProductID'][$i] == $_GET['ProductID']);
			header("location:index.php?page=cart");
		exit();
		}	
	}
	if($_GET['ProductID']!="")
	{
		$_SESSION['strP']=$_SESSION['strP']+1;
		$_SESSION['strProductID'][$_SESSION['strP']]=$_GET['ProductID'];
		$_SESSION['strQuanlity'][$_SESSION['strP']]=1;
		session_write_close();
		header("location:index.php?page=cart");
	}
?>
<table>
	<thead>
    	<tr>
        	<th>
            Id
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
        </tr>
    </thead>
    <tbody>
    <?php 
	
	echo"productID".count($_SESSION['strProductID']);
	for($i=1; $i<=count($_SESSION['strProductID']);$i++){
		
	$result_product=$db->tableSQL("product where '".$_SESSION['strProductID'][$i]."'");
	$rs=mysql_fetch_array($result_product);
	?>
    	<tr>
        	<td>
            <?=$i;?>
            </td>
            <td>
            <?=$rs[product_name];?>
            </td>
            <td>
            <?=$rs[product_price];?>
            </td>
            <td>
            <input type="hidden" name="txtP[]" value="<?=$i;?>">
            <input type="text" name="txtQua[]" value="<?=$_SESSION['Quanlity']["$i"]?>">
            </td>
        </tr>
        <?php
	}
		?>
    </tbody>