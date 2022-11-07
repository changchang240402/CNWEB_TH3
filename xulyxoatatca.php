<?php
$myID =$_REQUEST['IDNV'];
$bienketnoi=mysqli_connect('localhost','root','') or die('Could not connect: '.mysqli_connect_error());
$db_selected = mysqli_select_db($bienketnoi,'DULIEU');
$rs=mysqli_query($bienketnoi,'SELECT IDNV FROM nhanvien');
while($row=mysqli_fetch_array($rs,MYSQLI_BOTH)){
    $myID =$_REQUEST[$row['IDNV']];
    $rsl=mysqli_query($bienketnoi,"DELETE FROM nhanvien WHERE IDNV='$myID'");
}
mysqli_free_result($rs);
mysqli_close($bienketnoi);
header("Location:xoatatca.php");
?>