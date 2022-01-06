<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="main.css"/>
</head>
<body>
<?php
include ('D:\xampp\htdocs\themsuaxoa\config\connect.php');
$magv=$_GET['magv'];
$query=mysqli_query($db,"select * from `giangvien` where magv='$magv'");
$row=mysqli_fetch_assoc($query);
?>
<form method="POST" class="form">
<h2>Thêm giảng viên</h2>
<label>Mã giảng viên <input type="text" value="<?php echo $row['magv']; ?>" name="magv"></label><br/>
<label>Họ và tên <input type="text" value="<?php echo $row['hovaten']; ?>" name="hovaten"></label><br/>
<label>Ngày sinh <input type="text" value="<?php echo $row['ngaysinh']; ?>" name="ngaysinh"></label><br/>
<label>Giới tính <input type="text" value="<?php echo $row['gioitinh']; ?>" name="gioitinh"></label><br/>
<label>Trình độ <input type="text" value="<?php echo $row['trinhdo']; ?>" name="trinhdo"></label><br/>
<label>Chuyên môn <input type="text" value="<?php echo $row['chuyenmon']; ?>" name="chuyenmon"></label><br/>
<label>Học hàm <input type="text" value="<?php echo $row['hocham']; ?>" name="hocham"></label><br/>
<label>Học vị <input type="text" value="<?php echo $row['hocvi']; ?>" name="hocvi"></label><br/>
<label>Cơ quan <input type="text" value="<?php echo $row['coquan']; ?>" name="coquan"></label><br/>
<input type="submit" value="them" name="update_user">
<?php
if (isset($_POST['update_user'])){
    $magv=$_GET['magv'];
    $hovaten=$_POST['hovaten'];
    $ngaysinh=$_POST['ngaysinh'];
    $gioitinh=$_POST['gioitinh'];
    $trinhdo=$_POST['trinhdo'];
    $chuyenmon=$_POST['chuyenmon'];
    $hocham=$_POST['hocham'];
    $hocvi=$_POST['hocvi'];
    $coquan=$_POST['coquan'];
// Create connection
$db = new mysqli("localhost", "root", "", "1951060783-thuyloi");
// Check connection
if ($db->connect_error) {
die("Connection failed: " . $db->connect_error);
}
$sql = "UPDATE `giangvien` SET hovaten='$hovaten', ngaysinh='$ngaysinh', gioitinh='$gioitinh', trinhdo='$trinhdo', chuyenmon='$chuyenmon', hocham='$hocham', hocvi='$hocvi' , coquan='$coquan'  WHERE magv='$magv'";
if ($db->query($sql) === TRUE) {
echo "Record updated successfully";
} else {
echo "Error updating record: " . $db->error;
}
$db->close();
}
?>
</form>
</body>
</html>