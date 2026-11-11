<?php

$conn = mysql_connect("localhost","root","", "users_db");

if (!$conn) {
    die("connection failed:" . mysql_connect_error());
}
