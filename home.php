<?php
include "language.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $lang['home']; ?></title>
</head>
<body>
    <h1><?php echo $lang['welcome']; ?></h1>
    <nav>
        <a href="home.php"><?php echo $lang['home']; ?></a> |
        <a href="about.php"><?php echo $lang['about']; ?></a> |
        <a href="contact.php"><?php echo $lang['contact']; ?></a> |
        <a href="profile.php"><?php echo $lang['profile']; ?></a> |
        <a href="logout.php"><?php echo $lang['logout']; ?></a>
    </nav>

    <!-- ปุ่มเปลี่ยนภาษา -->
    <a href="home.php?lang=en">English</a> | <a href="home.php?lang=th">ภาษาไทย</a>
</body>
</html>
