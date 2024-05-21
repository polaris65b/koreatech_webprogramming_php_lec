<?php
session_start();

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['increment'])) {
        $_SESSION['count']++;
    } elseif (isset($_POST['reset'])) {
        $_SESSION['count'] = 0;
    }
}
?>

<!DOCTYPE html>
<html lang="ko">
<body>
    <form method="post" action="p1.php">
        <input type="submit" name="increment" value="+1 Button">
        <input type="submit" name="reset" value="Reset">
    </form>
    <h1><?php echo $_SESSION['count']; ?></h1>
</body>
</html>
