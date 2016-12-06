<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cập nhật hóa đơn</title>
	<link rel="stylesheet" type="text/css"  href="Style/Edit_Form.css" />
</head>
<body background="Images/MyBackground.png" bgcolor="#FFCC99">
	<div class="topbar"> <h1 style="color:#FFF"><center>Cập nhật hóa đơn</center></h1></div>    
	<center>
    <div class="box">
    	<?php
		$id = $_GET['txtid'];
		include ("connect.php");
		$i ="select * from hoadon where MaHD=".$id;
		$h= mysql_query($i);
		if($tr=mysql_fetch_array($h))
		{
	?>
    <table><form method="post" action="">
    	<tr>
        	<th>Mã hóa đơn : </th>
        	<td><input type="number" name="txtid" value="<?php echo $tr[0]; ?>" readonly="readonly"/></td>
        </tr>
            	<tr>       
					<th>Mã khách hàng : </th>   
					<td>
					<?php
							mysql_connect("localhost", "root", "") or die("Connection Failed");
							mysql_select_db("quanlibanhang_create")or die("Connection Failed");
							$query = "SELECT * FROM khachhang";
							$result = mysql_query($query);
						?>
							<select name="select1">
						<?php
							while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
						?>
							<option value="<?php echo $line['MaKhachHang'];?>"> <?php echo $line['MaKhachHang'];?> </option>
						<?php
							}
						?>
					</select>
					</td>
                </tr>
            	<tr>       
					<th>Tên khách hàng : </th>   
					<td>
					<?php
							mysql_connect("localhost", "root", "") or die("Connection Failed");
							mysql_select_db("quanlibanhang_create")or die("Connection Failed");
							$query = "SELECT * FROM khachhang";
							$result = mysql_query($query);
						?>
							<select name="select2">
						<?php
							while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
						?>
							<option value="<?php echo $line['TenKhachHang'];?>"> <?php echo $line['TenKhachHang'];?> </option>
						<?php
							}
						?>
					</select>
					</td>
                </tr>
            	<tr>       
					<th>Mã sản phẩm : </th>   
					<td>
					<?php
							mysql_connect("localhost", "root", "") or die("Connection Failed");
							mysql_select_db("quanlibanhang_create")or die("Connection Failed");
							$query = "SELECT * FROM sanpham";
							$result = mysql_query($query);
						?>
							<select name="select3">
						<?php
							while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
						?>
							<option value="<?php echo $line['MaSP'];?>"> <?php echo $line['MaSP'];?> </option>
						<?php
							}
						?>
					</select>
					</td>
                </tr>	
            	<tr>       
					<th>Tên sản phẩm : </th>   
					<td>
					<?php
							mysql_connect("localhost", "root", "") or die("Connection Failed");
							mysql_select_db("quanlibanhang_create")or die("Connection Failed");
							$query = "SELECT * FROM sanpham";
							$result = mysql_query($query);
						?>
							<select name="select4">
						<?php
							while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
						?>
							<option value="<?php echo $line['TenSP'];?>"> <?php echo $line['TenSP'];?> </option>
						<?php
							}
						?>
					</select>
					</td>
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
        $i = mysql_query("update hoadon set KhachHang_MaKhachHang='".$_POST['select1']."', TenKhachHang='".trim($_POST['select2'])."', SanPham_MaSP='".trim($_POST['select3'])."', TenSP='".$_POST['select4']."' where MaHD=".$_POST['txtid']);
        if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
        }
    ?>
</body>
</html>