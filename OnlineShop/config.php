<?php
const DB_HOST = "localhost";
const DB_LOGIN = "root";
const DB_PASS = "";
const DB_NAME = "store";

$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASS, DB_NAME);
mysqli_set_charset($link, "utf8");
?>
