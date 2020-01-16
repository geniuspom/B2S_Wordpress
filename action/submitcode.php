<?php

//global $_SERVER;

//include_once $_SERVER['DOCUMENT_ROOT'].'/wp-includes/functions.php';

//echo $_SERVER['DOCUMENT_ROOT'].'\wp-includes\functions.php';

/*if(file_exists ( $_SERVER['DOCUMENT_ROOT'].'\wp-includes\functions.php' ))
{
  echo "found";
}
else {
  echo "not found";
}*/

//include_once $_SERVER['DOCUMENT_ROOT'].'/wp-includes/functions.php';



if(isset($_POST['submit'])){
$code = $_POST['code'];
if(!empty($code))
{
  //echo $code;
  //setting_code_coupon_cookie($code);
  setcookie( 'coupon', $code, 0, '/', '', true);
  setcookie( 'coupon_status', 'active', 0, '/', '', true);
}
else{
  //echo "no code";
}

header("Location:/");

}
