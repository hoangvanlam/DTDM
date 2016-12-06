<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cập nhật khách hàng</title>
	<link rel="stylesheet" type="text/css"  href="Style/Edit_Form.css" />
</head>
<body background="Images/MyBackground.png" bgcolor="#FFCC99">
	<div class="topbar"> <h1 style="color:#FFF"><center>Cập nhật khách hàng</center></h1></div>    
	<center>
    <div class="box">
    	<?php
		$id = $_GET['txtid'];
		include ("connect.php");
		$i ="select * from khachhang where MaKhachHang=".$id;
		$h= mysql_query($i);
		if($tr=mysql_fetch_array($h))
		{
	?>
    <table><form method="post" action="">
    	<tr>
        	<th>Mã khách hàng : </th>
        	<td><input type="number" name="txtid" value="<?php echo $tr[0]; ?>" readonly="readonly"/></td>
        </tr>
        <tr>
        	<th>Tên khách hàng : </th>
        	<td><input type="text" name="txtname" value="<?php echo $tr[1]; ?>" /></td>
        </tr>
        <tr>
        	<th>Địa chỉ : </th>
        	<td><textarea cols="16" rows="3" name="txtaddress"> <?php echo $tr[2];?> </textarea></td>
        </tr>
        <tr>
        	<th>Số điện thoại : </th>
        	<td><input type="number" name="txtsdt" value="<?php echo $tr[3]; ?>" /></td>
        </tr>           
            <?php
				}
			?>
        	<td colspan="2" align="center"><input type="submit" name="cmdedit" value="Cập nhật" />
            <a href="index.php"><img src="Images/Users_Group.png" title="Go Back"/></a>
            </td>
        </tr>
	</form></table>
    </div>
    </center>
    <?php
        include ("connect.php");
        $i = mysql_query("update khachhang set TenKhachHang='".$_POST['txtname']."', DiaChi='".trim($_POST['txtaddress'])."', SDT='".$_POST['txtsdt']."' where MaKhachHang=".$_POST['txtid']);
        if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
        }
    ?>
</body>
</html>