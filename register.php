<?php
@session_start();
include ("controller/c_user.php");
$user = new c_user();
$user->register();
?>