<?php
  define("DB_HOST", "localhost");
  define("DB_USER", "root");
  define("DB_PASS", "root");
  define("DB_NAME", "feedback_php_proj");

  $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

  if( !$conn->ping() ){
    die("Houston we've got problems with connection to database: " . $conn->connect_error);
  }
?>