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
?>
<HTML>
    <body>
    <FORM action='Xemthongtinnhanvien.php?IDNV=<?php echo $row['IDNV'];?>'
        method='post'>
       <h1 style="text-align:center;">TÌM KIẾM THÔNG TIN NHÂN VIÊN</h1>
    <table width='100%' boder='0' style=" font-size:20px;text-align:left;margin-left:450px;">
        <TR >
            <TD colspan='6'>
            IDNV:<INPUT TYPE='RADIO' size='20' name='IDNV' >
            Họ tên:<INPUT TYPE='RADIO' size='20' name='Hoten'>
            Địa chỉ:<INPUT TYPE='RADIO' size='20' name='Điachi'>
            </TD>
            <TR >
            <TD>Nhập thông tin: <INPUT TYPE='TEXT'  size='40' name='txtNhap' value="<?php if(isset($_GET["txtNhap"])){echo $_GET["txtNhap"];}?>"></TD>
            </TR>
        </TR>
        <TR>
            <TD colspan='2'><INPUT TYPE='Submit' value='OK'><INPUT TYPE='Reset' value='Reset'></TD>
        </TR>
    </table></FROM>
    </body>
</HTML>