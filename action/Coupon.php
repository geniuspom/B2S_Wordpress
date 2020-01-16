<?php

require_once('db_con.php');

Class Coupon{

    private $tb_name = "wp_coupon";
    //private $Dbobj = new DB_Con();

    function Add_coupon() {

      $Dbobj = new DB_Con();

      $code = "X000005";
      $startdate = "2020-01-16 00:00:00";
      $expiredate = "2020-02-16 23:59:59";
      $persona_id = "1";

      $sql = "INSERT INTO $this->tb_name (code, startdate, expiredate, persona_id)
      VALUES ('$code', '$startdate', '$expiredate', '$persona_id')";

      if ($Dbobj->get_DB_Con()->query($sql) === TRUE) {
          echo "New record created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $Dbobj->close_Con();

    }

    function Check_coupon() {

        $code = "xxxx";

        $Dbobj = new DB_Con();

        //$sql = "SELECT * FROM $this->tb_name WHERE code LIKE '$code'";
        //$result = $Dbobj->get_DB_Con()->query($sql);

        //print_r(mysqli_fetch_array($result));

        $Dbobj->close_Con();

    }
}

$data = new Coupon();
$data->Add_coupon();
$data->Check_coupon();

