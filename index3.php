<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sản phẩm</title>
<link rel="stylesheet" type="text/css" href="Style/viewtablesearch.css" />
</head>
<body>
<center><h1>Sản phẩm</h1></center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="addnew" href="addsp.php" style="font-size:32px;">Thêm mới sản phẩm</a><br/><br/>
	<table>
    	<tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Mã loại sản phẩm</th>
            <th>Tên loại sản phẩm</th>
			<th>Lựa chọn</th>
    	</tr>
        <?php
			include "connect.php";
			$i = "select * from sanpham";
			$h = mysql_query($i);
			while($tr=mysql_fetch_array($h))
			{
		?>
        <tr>
        	<td><?php echo $tr[0]; ?></td>
            <td><?php echo $tr[1]; ?></td>
            <td><?php echo $tr[2]; ?></td>
            <td><?php echo $tr[3]; ?></td>
            <td align="center"><a href="deletesp.php? txtid=<?php echo $tr[0];?>">Xóa</a> / <a href="editsp.php? txtid=<?php echo $tr[0];?>">Cập nhật</a> </td>    
        </tr>
        <?php
			}
		?>
    </table>
</body>
</html>