<?php
$myID=$_REQUEST['IDPB'];    
$link = mysqli_connect('localhost','root','') or die('Could not connect: '.mysqli_connect_error());
$db_selected = mysqli_select_db($link,'DULIEU');
$rs = mysqli_query($link,"SELECT * FROM phongban WHERE IDPB='$myID'");
$row =mysqli_fetch_array($rs, MYSQLI_BOTH);
?>
<HTML>
    <body>
        <FORM action='xulicapnhap.php?IDPB=<?php echo $row['IDPB'];?>'
        method='post'>
    <table width='100%' boder='0'>
        <TR>
            <TD>Mã phòng ban</TD>
            <TD><INPUT TYPE='TEXT' size='20' name='txtIDPB' readonly value='<?php echo $row['IDPB'];?>'></TD>
        </TR>
        <TR>
            <TD>Tên phòng ban</TD>
            <TD><INPUT TYPE='TEXT' size='20' name='txtTenpb' value='<?php echo $row['TenPB'];?>'></TD>
        </TR>
        <TR>
            <TD>Mô tả</TD>
            <TD><INPUT TYPE='TEXT' size='20' name='txtMota' value='<?php echo $row['Mota'];?>'></TD>
        </TR>
        <TR align='center'>
            <TD colspan='2'><INPUT TYPE='Submit' value='OK' ><INPUT TYPE='Reset' value='Reset' ></TD>
        </TR>
    </table></FORM>
    </body>
</HTML>