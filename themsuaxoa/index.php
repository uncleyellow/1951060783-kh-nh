<table class="table" border="1">
<tr>
<td>magv</td>
<td>hovaten</td>
<td>ngaysinh</td>
<td>gioitinh</td>
<td>trinhdo</td>
<td>chuyenmon</td>
<td>hocham</td>
<td>hocvi</td>
<td>coquan</td>
</tr>
<?php
include ('D:\xampp\htdocs\themsuaxoa\config\connect.php');
$sql = "SELECT * FROM giangvien";
$result = mysqli_query($db, $sql) or die( mysqli_error($db));
$query=mysqli_query($db,"select*from giangvien");
while($row=mysqli_fetch_array($query)){
?>
<tr>
<td><?php echo $row['magv']; ?></td>
<td><?php echo $row['hovaten']; ?></td>
<td><?php echo $row['ngaysinh']; ?></td>
<td><?php echo $row['gioitinh']; ?></td>
<td><?php echo $row['trinhdo']; ?></td>
<td><?php echo $row['chuyenmon']; ?></td>
<td><?php echo $row['hocham']; ?></td>
<td><?php echo $row['hocvi']; ?></td>
<td><?php echo $row['coquan']; ?></td>
<td><a href="/themsuaxoa/model/edit_user.php?id=<?php echo $row['magv']; ?>">Sửa</a></td>
<td><a href="/themsuaxoa/model/delete_user.php?id=<?php echo $row['magv']; ?>">Xóa</a></td>
<td><a href="/themsuaxoa/model/plus_usertest.php">Thêm</a></td>
</tr>
<?php
}
?>
</table>