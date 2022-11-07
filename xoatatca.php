<?php
// $link = mysql_connect('localhost','root','') or die('Could not connect: '.mysql_error());
$bienketnoi = mysqli_connect('localhost','root','') or die('Could not connect: '.mysqli_connect_error());
// $db_selected = mysql_select_db('DULIEU',$link);
$db_selected = mysqli_select_db($bienketnoi,'DULIEU');

// $rs = mysql_query("SELECT* FROM NHANVIEN");
$rs = mysqli_query($bienketnoi,"SELECT* FROM nhanvien");
echo'<form method="post" action="xulyxoatatca.php">';
echo'<table border ="1" width="100%">';
echo'<caption> Du lieu bang Nhan vien </caption>';
// tieu đề 
echo'<TR><TH>IDNV</TH><TH>Họ tên</TH><TH>Địa chỉ</TH><TH>Chọn</TH></TR>';
// while($row=mysql_fetch_array($rs,MYSQL_BOTH)){
    while($row=mysqli_fetch_array($rs,MYSQLI_BOTH)){
        echo'<TR><TD>'.$row['IDNV'].'</TD><TD>'.$row['Hoten'].'</TD><TD>'.$row['Điachi'].'</TD><TD><INPUT TYPE="CHECKBOX" NAME="'.$row['IDNV'].'" VALUE="'.$row['IDNV'].'"</TD></TR>';
}
echo'<TR><TD align="right" colspan="4"><INPUT TYPE="submit" value="Xoá các nhân viên"></TD></TR>';
echo'</TABLE>';
echo'</form>';
// mysql_free_result($rs);
// mysql_close($link);
mysqli_free_result($rs);
mysqli_close($bienketnoi);
?>