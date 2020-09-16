<?php
session_start();
require_once 'lib/protfolio.php';




$res = DeletePro($_GET['proid']);


if($res == 1){
  header("LOCATION:allportfolio.php");
}else{
  header("LOCATION:allportfolio.php");
}