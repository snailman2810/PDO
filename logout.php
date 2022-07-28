<?php
@session_start();
include ("controller/c_user.php");
if($_GET['func']){
    $c_user = new c_user();
    $c_user->logout();
}