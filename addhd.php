<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thêm mới hóa đơn</title>
		<link href="Style/Add_Form.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="#99CC66" background="Images/MyBackground.png">
<div class="img"><img src="Images/auditoria.png" /></div>
<div class="ii"><center><img src="Images/Edit_Yes.png" style="margin-top:20px"/></center></div>
<div id="topbar">
    	<center><h1 style="color:#939">Thêm mới hóa đơn</h1>
    </div>
<div id="form">
		<table>
        	<form method="post" action="">
                <tr>
                	<th>Mã hóa đơn : </th>
                    <td><input type="number" name="txtid"/></td>
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
                <tr>
                    <td><input type="submit" name="cmdadd" value="Thêm mới" /></td>
                    <td><input type="reset" name="cmdreset" value="Xóa"/></td>
                </tr>
        	</form>
        </table>
    	</div>
        <?php   
        $id = $_POST['txtid'];
        $gender = trim($_POST['select1']);
        $address = trim($_POST['select2']);
		$address1 = trim($_POST['select3']);
		$address2 = trim($_POST['select4']);
        if(isset($_POST['cmdadd'])){
        if(empty($gender) || empty($address) || empty($address1) || empty($address2)) {
            echo "<center>Chưa nhập dữ liệu</center>";
        }
		else{
        include "connect.php";
        $i = mysql_query("insert into hoadon values('".$id."','".$gender."','".$address."','".$address1."','".$address2."')");
        if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
			}
        }
    }
    ?>
</body>
</html>