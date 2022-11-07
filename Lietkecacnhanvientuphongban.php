<?php
//Lay ma phong ban IDPB tu trang xemthongtinPB.php
$mapb=$_REQUEST['IDPB'];
echo $mapb;
$link= mysqli_connect('localhost','root','') or die('Could not connect: '.mysqli_connect_error());
$db_selected = mysqli_select_db($link,'dulieu');
if($mapb=="")
{
$rs = mysqli_query($link,"SELECT * FROM nhanvien");
}
else
{
$rs = mysqli_query($link,"SELECT * FROM nhanvien Where IDPB='$mapb'");
}
echo'<table border = "1" width ="100%">';
echo'<caption> Dữ liệu bảng Phòng Ban </caption>';
// tieu đề 
echo'<TR><TH>IDNV</TH><TH>Họ tên</TH><TH>IDPB</TH><TH>Địa chỉ</TH></TR>';
// while($row=mysql_fetch_array($rs,MYSQL_BOTH)){
    while($row=mysqli_fetch_array($rs,MYSQLI_BOTH)){
        echo'<TR><TD>'.$row['IDNV'].'</TD><TD>'.$row['Hoten'].'</TD><TD>'.$row['IDPB'].'</TD><TD>'.$row['Điachi'].'</TD></TR>';
}
echo'</TABLE>';
// mysql_free_result($rs);
// mysql_close($link);
mysqli_free_result($rs);
mysqli_close($link);
?>