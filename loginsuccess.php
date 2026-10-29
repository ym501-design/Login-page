
<!DOCTYPE html>
<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
    header("Location: index.php");
    exit;
}
?>
<html>
<body>

<h3>You have logged in successfully!</h3>

</body>
</html>
