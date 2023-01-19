<?php
$conn = mysqli_connect("localhost", "root", "dldsb", "hi") or die ("Can't access DB");
$hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
echo $hashedPassword;

$sql = "
    INSERT INTO userinfo
    (name, userid, password, email, phone)
    VALUES('{$_POST['name']}', '{$_POST['userid']}', '{$hashedPassword}', '{$_POST['email']}','{$_POST['phone']}'
    )";
echo $sql;
$result = mysqli_query($conn, $sql);

if ($result === false) {
    echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
    echo mysqli_error($conn);
} else {
?>
    <script>
        alert("회원가입이 완료되었습니다");
        location.href = "index.php";
    </script>
<?php
}
?>