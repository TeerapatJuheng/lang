<?php
session_start();

if (isset($_GET['lang']) && $_GET['lang'] != "") {
    $_SESSION['lang'] = $_GET['lang'];
}

if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = "en";
}

// รวมไฟล์ภาษาที่เกี่ยวข้อง
include "lang_" . $_SESSION['lang'] . ".php";
?>
