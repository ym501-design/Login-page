
<!DOCTYPE html>
<?php
session_start();

$username = "user";
$password = "password";

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header("Location: loginsuccess.php");
    exit;
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        $_SESSION['loggedin'] = true;
        header("Location: loginsuccess.php");
        exit;
    } else {
        $error = "Username or password is incorrect";
    }
}
?>
<html>
<body>

<form method="post" action="index.php">
    Username:<br>
    <input type="text" name="username"><br>

    Password:<br>
    <input type="password" name="password"><br>

    <input type="submit" value="Login">
</form>

<?php
if (isset($error)) {
    echo $error;
}
?>

</body>
</html>
