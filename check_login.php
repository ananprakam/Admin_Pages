<?php
session_start();

if(isset($_SESSION['user_id'])) {
    // มีการเข้าสู่ระบบแล้ว
    echo "User is logged in.";
} else {
    // ยังไม่ได้เข้าสู่ระบบ
    echo "User is not logged in.";
}
?>
