<?php
include ('D:\xampp\htdocs\themsuaxoa\config\connect.php');
$magv=$_GET['magv'];
$sql = "DELETE FROM giangvien WHERE magv='$magv'";
if ($db->query($sql) === TRUE) {
echo "Xoá thành công!";
} else {
echo "Error updating record: " . $db->error;
}
$db->close();
?>