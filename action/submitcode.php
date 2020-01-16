<?php

require_once('Coupon.php');

$code = "xxxxxx";

if(isset($_POST['submit'])){

  $code = $_POST['code'];
  if(!empty($code))
  {

    $Coupon = new Coupon();

    $Coupon->Check_coupon($code);

    setcookie( 'coupon', $code, 0, '/', '', true);
    setcookie( 'coupon_status', 'active', 0, '/', '', true);
  }
  else{

  }

  //header("Location:/");

}
