<?php
$conn = mysqli_connect("localhost","root","dldsb","hi");
 
if ($conn) {
    echo "MySQL 연결 성공";
} else {
    echo "MySQL 연결 실패";
}
 
$result = mysqli_query($conn, "SELECT VERSION() AS VERSION");
$data = mysqli_fetch_assoc($result);
echo $data['VERSION'];
?>