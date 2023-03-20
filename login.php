<?php
$link = mysqli_connect("localhost","id14161743_userregister","Nahimaloom@24");

mysqli_select_db($link, "id14161743_usersignup");
$uname = $_POST['username'];
$upass = $_POST['password'];

$s = "select * from userdatabase where Email='$uname' && UPassword='$upass'";
$result = mysqli_query($link,$s);
$num = mysqli_num_rows($result)
if ($num==1) {
    header('Location: dashboard.html');
}
else{
    header('Location: loginincorrect.html')
}
mysqli_close($link);
?>