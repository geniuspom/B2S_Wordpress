<?php

require_once('db_con.php');

/*$servername = "localhost";
$username = "ynu_b2s";
$password = "j3KztFSba7x2";
$dbname = "ynu_b2s";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$tb_name = "wp_coupon";

$code = "X000001";
$startdate = "2020-01-16 00:00:00";
$expiredate = "2020-02-16 23:59:59";
$persona_id = "1";

$sql = "INSERT INTO $tb_name (code, startdate, expiredate, persona_id)
VALUES ('$code', '$startdate', '$expiredate', '$persona_id')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();*/

Class WorkingExamples{
    function Add_coupon() {

      $tb_name = "wp_coupon";

      $code = "X000003";
      $startdate = "2020-01-16 00:00:00";
      $expiredate = "2020-02-16 23:59:59";
      $persona_id = "1";

      $Dbobj = new DB_Con();

      $sql = "INSERT INTO $tb_name (code, startdate, expiredate, persona_id)
      VALUES ('$code', '$startdate', '$expiredate', '$persona_id')";

      if ($Dbobj->get_DB_Con()->query($sql) === TRUE) {
          echo "New record created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $Dbobj->close_Con();

      //$query = mysqli_query(DB_Con->get_DB_Con(), "SELECT * FROM users WHERE id = '$id'");
      //return mysqli_fetch_array($query);

    }
}
$data = new WorkingExamples();
$data->Add_coupon();
//echo "<pre/>";print_r($data->getUserInfo(3));
