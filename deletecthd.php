<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Xóa chi tiết hóa đơn</title>
	<link href="Style/Delete_Form.css" type="text/css" rel="stylesheet" />
</head>

<body background="Images/MyBackground.png" bgcolor="#999966">
	<div class="topbar"><center><h1 style="color:#FFF">Xóa chi tiết hóa đơn</h1></center></div>
	<div id="box"><center>
    
    	<?php
		
			$id = $_GET['txtid'];
			include ("connect.php");
			$i ="select * from chitiethoadon where MaCT=".$id;
			$h = mysql_query($i);
			if($tr=mysql_fetch_array($h))
			{
		?>
    
	<table>
    		<form method="post" action="">
     	<tr>
        	<th>Mã hóa đơn chi tiết : </th>
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
					<th>Địa chỉ : </th>   
					<td>
					<?php
							mysql_connect("localhost", "root", "") or die("Connection Failed");
							mysql_select_db("quanlibanhang_create")or die("Connection Failed");
							$query = "SELECT * FROM khachhang";
							$result = mysql_query($query);
						?>
							<select name="select3">
						<?php
							while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
						?>
							<option value="<?php echo $line['DiaChi'];?>"> <?php echo $line['DiaChi'];?> </option>
						<?php
							}
						?>
					</select>
					</td>
                </tr>
            	<tr>       
					<th>Số điện thoại : </th>   
					<td>
					<?php
							mysql_connect("localhost", "root", "") or die("Connection Failed");
							mysql_select_db("quanlibanhang_create")or die("Connection Failed");
							$query = "SELECT * FROM khachhang";
							$result = mysql_query($query);
						?>
							<select name="select4">
						<?php
							while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
						?>
							<option value="<?php echo $line['SDT'];?>"> <?php echo $line['SDT'];?> </option>
						<?php
							}
						?>
					</select>
					</td>
                </tr>
            	<tr>       
					<th>Mã hóa đơn : </th>   
					<td>
					<?php
							mysql_connect("localhost", "root", "") or die("Connection Failed");
							mysql_select_db("quanlibanhang_create")or die("Connection Failed");
							$query = "SELECT * FROM hoadon";
							$result = mysql_query($query);
						?>
							<select name="select5">
						<?php
							while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
						?>
							<option value="<?php echo $line['MaHD'];?>"> <?php echo $line['MaHD'];?> </option>
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
							<select name="select6">
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
							<select name="select7">
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
        <tr>
            <td colspan="2" align="center">
            <input type="submit" name="cmddelete" value="Xoá"/>
            <a href="index.php"><img src="Images/Users_Group.png" title="Go Back" /></a>
            </td>
        </tr>
        	</form>
    </table></center>
	</div>
        <?php
        $id=$_POST['txtid'];        
        include("connect.php");
        $i = mysql_query("delete from chitiethoadon where MaCT=".$id);
        if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
        }
    ?>
</body>
</html>