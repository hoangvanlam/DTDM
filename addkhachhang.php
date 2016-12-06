<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thêm mới khách hàng</title>
		<link href="Style/Add_Form.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#99CC66" background="Images/MyBackground.png">
<div class="img"><img src="Images/auditoria.png" /></div>
<div class="ii"><center><img src="Images/Edit_Yes.png" style="margin-top:20px"/></center></div>
<div id="topbar">
    	<center><h1 style="color:#939">Thêm mới khách hàng</h1>
    </div>
<div id="form">
		<table>
        	<form method="post" action="">
            	<tr>
                	<th>Mã khách hàng : </th>
                    <td><input type="number" name="txtid"/></td>
                </tr>
                <tr>
                	<th>Tên khách hàng : </th>
                    <td><input type="text" name="txtname"/></td>
                </tr>
                <tr>
                	<th>Địa chỉ : </th>
                    <td><textarea cols="19px" rows="3" name="txtaddress"/></textarea></td>
                </tr>
                <tr>
                    <th>Số điện thoại : </th>
                    <td><input type="number" name="txtsdt"/></td>
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
        $name = trim($_POST['txtname']);
        $address = trim($_POST['txtaddress']);
        $sdt = trim($_POST['txtsdt']);
        if(isset($_POST['cmdadd'])){
        if(empty($name) || empty($address) || empty($sdt)) {
            echo "<center>Bạn chưa nhập dữ liệu</center>";
        }
		else {
        include "connect.php";
        $i = mysql_query("insert into khachhang values('".$id."','".$name."','".$address."','".$sdt."')");
        if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
			}
        }
    }
    ?>
</body>
</html>