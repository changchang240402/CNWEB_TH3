<?php
$myID =$_REQUEST['IDPB'];
$tenPB=$_REQUEST['txtTenpb'];
$mota=$_REQUEST['txtMota'];
$bienketnoi=mysqli_connect('localhost','root','') or die('Could not connect: '.mysqli_connect_error());
$db_selected = mysqli_select_db($bienketnoi,'DULIEU');
$rs=mysqli_query($bienketnoi, "UPDATE phongban SET TenPB='$tenPB',Mota='$mota' WHERE IDPB='$myID'");
header("Location:capnhap.php");
?>


