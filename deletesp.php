<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Xóa sản phẩm</title>
	<link href="Style/Delete_Form.css" type="text/css" rel="stylesheet" />
</head>

<body background="Images/MyBackground.png" bgcolor="#999966">
	<div class="topbar"><center><h1 style="color:#FFF">Xóa sản phẩm</h1></center></div>
	<div id="box"><center>
    
    	<?php
		
			$id = $_GET['txtid'];
			include ("connect.php");
			$i ="select * from sanpham where MaSP=".$id;
			$h = mysql_query($i);
			if($tr=mysql_fetch_array($h))
			{
		?>
    
	<table>
    		<form method="post" action="">
    	<tr>
        	<th>Mã sản phẩm : </th>
        	<td><input type="number" name="txtid" value="<?php echo $tr[0]; ?>" readonly="readonly"/></td>
        </tr>
        <tr>
        	<th>Tên sản phẩm : </th>
        	<td><input type="text" name="txtname" value="<?php echo $tr[1]; ?>" /></td>
        </tr>
            	<tr>       
					<th>Mã loại hàng : </th>   
					<td>
					<?php
							mysql_connect("localhost", "root", "") or die("Connection Failed");
							mysql_select_db("quanlibanhang_create")or die("Connection Failed");
							$query = "SELECT * FROM loaisanpham";
							$result = mysql_query($query);
						?>
							<select name="select1">
						<?php
							while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
						?>
							<option value="<?php echo $line['MaLoai'];?>"> <?php echo $line['MaLoai'];?> </option>
						<?php
							}
						?>
					</select>
					</td>
                </tr>
            	<tr>       
					<th>Tên loại hàng : </th>   
					<td>
					<?php
							mysql_connect("localhost", "root", "") or die("Connection Failed");
							mysql_select_db("quanlibanhang_create")or die("Connection Failed");
							$query = "SELECT * FROM loaisanpham";
							$result = mysql_query($query);
						?>
							<select name="select2">
						<?php
							while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
						?>
							<option value="<?php echo $line['TenLoai'];?>"> <?php echo $line['TenLoai'];?> </option>
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
        $i = mysql_query("delete from sanpham where MaSP=".$id);
        if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
        }
    ?>
</body>
</html>