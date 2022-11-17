<?php
require("../config/db.php");

$sql = "INSERT INTO feedback (name, email, content) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['content']."')";
// $sql = "INSERT INTO feedback (name, email, content) VALUES ('test', 'test', 'test')";
$result = mysqli_query($conn, $sql);

$status = true;
if(!$result){
  $status = false;
}

echo json_encode(
  array(
    'status' => $status,
  )
);

?>