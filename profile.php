<?php
include "language.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $lang['profile']; ?></title>
</head>
<body>
    <h1><?php echo $lang['profile']; ?></h1>
    <p>นี่คือหน้าโปรไฟล์ของคุณ</p>
    
    <!-- ลิงก์เมนู -->
    <nav>
        <a href="home.php"><?php echo $lang['home']; ?></a> |
        <a href="about.php"><?php echo $lang['about']; ?></a> |
        <a href="contact.php"><?php echo $lang['contact']; ?></a> |
        <a href="profile.php"><?php echo $lang['profile']; ?></a> |
        <a href="logout.php"><?php echo $lang['logout']; ?></a>
    </nav>

    <!-- ปุ่มเปลี่ยนภาษา -->
    <a href="profile.php?lang=en">English</a> | <a href="profile.php?lang=th">ภาษาไทย</a>
</body>
</html>
