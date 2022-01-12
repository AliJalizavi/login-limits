<?php
$conn = mysqli_connect("localhost", "root", "", "limit_used");

if (!$conn) {
    echo "<script>alert('Connection failed.');</script>";
}