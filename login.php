<?php
include "language.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $lang['login']; ?></title>
</head>
<body>
    <h1><?php echo $lang['login']; ?></h1>
    <form action="home.php" method="post">
        <label><?php echo $lang['login']; ?>:</label>
        <input type="text" name="username">
        <input type="password" name="password">
        <button type="submit"><?php echo $lang['login']; ?></button>
    </form>

    <!-- ปุ่มเปลี่ยนภาษา -->
    <a href="login.php?lang=en">English</a> | <a href="login.php?lang=th">ภาษาไทย</a>
</body>
</html>
