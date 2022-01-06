<?php
 define("DB_HOST", "localhost");
 define("DB_USER", "root");
 define("DB_PASSWORD", "");
 define("DB_DATABASE", "1951060783-thuyloi");

 $db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
if (!$db) {
    die("ko kết nối được " . mysqli_connect_error());
}
echo "kết nối thành công";
//mysqli_close($conn);
?>