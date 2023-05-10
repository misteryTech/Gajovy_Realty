<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body><?php

session_start();

$logout = md5($_SESSION['admin_id']);

$email_md5 = md5($logout);
unset($_SESSION['admin_id']);


session_unset();
session_destroy();

echo "Logging Out ... Please Wait";

echo "<script>window.location.href='../login.php?logout=$logout&v_1=$email_md5';</script>";

exit();


?>
</body>
</html>