<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
echo "<html>";
echo "<head>";
echo "</head>";
echo "<body bgcolor=\"#000066\" VLINK = \"#6699cc\">";
echo "<P>";
echo "<table border=\"1\" cellpadding=\"1\" style=\"border-collapse: collapse\" bordercolor=\"#6699cc\" width=\"15%\" id=\"AutoNumber1\">";
echo "<TR><TD>";
$GoToDay = $_GET['txtDay'];

if (!empty($GoToDay)) {
$StartDate=date("m/d/y",strtotime ("$GoToDay"));
} else if (empty($StartDate)) $StartDate=date("m/d/y");
echo WriteMonth($StartDate);

function WriteMonth($StartDate)
{
$thaimonth=array("มค.","กพ.","มีค.","เมย.","พค.","มิย.","กค.","สค.","กย.","ตค.", "พย.","ธค.");

$WriteMonth="";
$CurrentDate=date("m/1/y", strtotime ("$StartDate"));
$setMonth=date("m",strtotime ($CurrentDate));
$todaysDate=date("j",strtotime(date("m/d/y")));
$mmon=date("m",strtotime ($CurrentDate));
$myear=date("Y",strtotime ($CurrentDate));
$noOfDays=date("t",strtotime ($CurrentDate));

$WriteMonth.="";
$WriteMonth.="<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\" width=\"150\" ><tr><td colspan=\"2\" valign=top align=\"left\">";
$WriteMonth.="<a href=\"?txtDay=".date("m/1/y", strtotime ("$CurrentDate -1 months"))."\"><font color=\"#6699cc\"><<</font></a></td><td colspan=\"3\" align=\"center\"><a href=\"?txtDay=".date("m/1/y", strtotime ("$StartDate months"))."\"><b><font color=\"#6699cc\">".$thaimonth[date("m", strtotime ($StartDate)) - 1]." ".(date("Y",strtotime ($StartDate)) + 543);
$WriteMonth.="</font></b> </a></td><td colspan=\"2\" valign=top align=\"right\">";
$WriteMonth.="<a href=\"?txtDay=".date("m/1/y", strtotime ("$StartDate +1 months"))."\"><font color=\"#6699cc\">>></font></a>";

$WriteMonth.="</td></tr><tr bgcolor=\"#6699cc\">";
$WriteMonth.="<td align='center'><B><font color=\"#000066\">อา.</font></B></td>";
$WriteMonth.="<td align='center'><B><font color=\"#000066\">จ.</font></B></td>";
$WriteMonth.="<td align='center'><B><font color=\"#000066\">อ.</font></B></td>";
$WriteMonth.="<td align='center'><B><font color=\"#000066\">พ.</font></B></td>";
$WriteMonth.="<td align='center'><B><font color=\"#000066\">พฤ.</font></B></td>";
$WriteMonth.="<td align='center'><B><font color=\"#000066\">ศ.</font></B></td>";
$WriteMonth.="<td align='center'><B><font color=\"#000066\">ส.</font></B></td>";
$WriteMonth.="</tr>";

$startMonth=date("$myear/$setMonth/01");
$endMonth=date("$myear/$setMonth/$noOfDays");

$WriteMonth .= "<tr>";
for($i=1;$i<=$noOfDays;$i++) {
$coolmonth=date("$setMonth/$i/$myear");
$TBD=date("j",strtotime ($coolmonth));
$BD=date("j",strtotime ($coolmonth));
$BDay=date("D",strtotime ($coolmonth));
if ($todaysDate==$TBD) {
$BD= "<B><font color=\"#FFFFFF\">$TBD</font></B>";
}
$BD = "<td align=\"center\" bgcolor = \"#6699cc\"><font color=\"#000066\">$BD</font></td>";

switch($BDay){
case 'Sun':
$WriteMonth .= "$BD";
break;
case 'Mon':
if ($TBD==1) $WriteMonth .= "<td> </td>";
$WriteMonth .= "$BD";
break;
case 'Tue':
if($TBD==1) $WriteMonth .= "<td> </td><td> </td>";
$WriteMonth .= "$BD";
break;
case 'Wed':
if($TBD==1) $WriteMonth .= "<td> </td><td> </td><td> </td>";
$WriteMonth .= "$BD";
break;
case 'Thu':
if($TBD==1) $WriteMonth .= "<td> </td><td> </td><td> </td><td> </td>";
$WriteMonth .= "$BD";
break;
case 'Fri':
if($TBD==1) $WriteMonth .= "<td> </td><td> </td><td> </td><td> </td><td> </td>";
$WriteMonth .= "$BD";
break;
case 'Sat':
if($TBD==1) $WriteMonth .= "<td> </td><td> </td><td> </td><td> </td><td> </td><td>;</td>";
$WriteMonth .= "$BD";
$WriteMonth .="</tr><tr>";
break;
}
}
$WriteMonth .="</table>";
return $WriteMonth;
}
echo "</TD></TR>";
echo "</TABLE>";
echo "<BR>";
echo "</body>";
echo "</html>";
?>