<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>counter 값: <?php echo isset($_SESSION['count']) ? $_SESSION['count'] : 0; ?></h1>
</body>
</html>
