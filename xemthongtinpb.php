<?php
// $link = mysql_connect('localhost','root','') or die('Could not connect: '.mysql_error());
$link = mysqli_connect('localhost','root','') or die('Could not connect: '.mysqli_connect_error());
// $db_selected = mysql_select_db('DULIEU',$link);
$db_selected = mysqli_select_db($link,'DULIEU');

// $rs = mysql_query("SELECT* FROM NHANVIEN");
$rs = mysqli_query($link,"SELECT * FROM phongban");
echo'<table border ="1" width="100%">';
echo'<caption> Dữ liệu bảng Phòng Ban </caption>';
// tieu đề 
echo'<TR><TH>IDPB</TH><TH>Tên phong ban </TH><TH>Mô tả</TH><TH>Xem nhân viên</TH></TR>';
// while($row=mysql_fetch_array($rs,MYSQL_BOTH)){
    while($row=mysqli_fetch_array($rs)){
        echo'<TR><TD>'.$row['IDPB'].'</TD><TD>'.$row['TenPB'].'</TD><TD>'.$row['Mota'].'</TD><TD align="center"><A HREF="Lietkecacnhanvientuphongban.php?IDPB='.$row['IDPB'].'">xxx</TD></TR>';
}
echo'</TABLE>';
// mysql_free_result($rs);
// mysql_close($link);
mysqli_free_result($rs);
mysqli_close($link);
?>