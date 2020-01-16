<?php

Class DB_Con{
  function get_DB_Con(){

    $servername = "localhost";
    $username = "ynu_b2s";
    $password = "j3KztFSba7x2";
    $dbname = "ynu_b2s";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname) or die("Couldn't connect");
    return $conn;
  }

  function close_Con(){
    $conn->close();
  }
}
