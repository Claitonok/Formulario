<?php

if (isEmpty()) {

    flash('message','Preencha todos os campos'); 
    header("location: index.php");
}

function isEmpty(){

    $request = request();

    $empty = false;

  foreach ($request as $key => $value) {
    if (empty($request[$key])) {
      $empty = true;
    }
  }
  return $empty;
}

function flash($key, $message, $type = 'danger'){ 

    if (!isset($_SESSION['flash'][$key])){
        $_SESSION['flash'][$key] = "<span> class='alert alert-'{$type}".$message."</span>";
       }
}

function get($key){

   if (!isset($_SESSION['flash'][$key])) { 
    $message = $_SESSION['flash'][$key];

    unset($_SESSION['flash'][$key]);

    return $message ?? '';
   }
}

function request(){

    $request = $_SERVER['REQUEST_METHOD'];

    if ($request == 'POST') {
       return $_POST;
    }
    return $_GET;
}

