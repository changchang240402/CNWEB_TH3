<?php
$link= mysqli_connect('localhost','root','') or die('Could not connect: '.mysqli_connect_error());
$db_selected = mysqli_select_db($link,'dulieu');
if(isset($_GET["txtNhap"])&&!empty($_GET["txtNhap"]))
{
    $Key=$_GET["txtNhap"];
    if(isset($_POST['IDNV']))
    {
      $rs = mysqli_query($link,"SELECT * FROM nhanvien Where IDNV LIKE '$Key' ");
    }
    if(isset($_POST['Hoten']))
    {
      $rs = mysqli_query($link,"SELECT * FROM nhanvien Where Hoten LIKE '$Key' ");
    }
    if(isset($_POST['Điachi']))
    {
      $rs = mysqli_query($link,"SELECT * FROM nhanvien Where Điachi LIKE '$Key' ");
    }
}
else{
    $rs = mysqli_query($link,"SELECT * FROM nhanvien");
}
mysqli_free_result($rs);
mysqli_close($link);
header("Location:Xemthongtinnhanvien.php");
?>