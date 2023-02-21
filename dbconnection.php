<?php
session_start();
 $conn = new mysqli('localhost', 'root', '', 'mkproject'); //localhost connectie

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // echo "Connected successfully";

  $conn -> set_charset("utf8");

  ?>