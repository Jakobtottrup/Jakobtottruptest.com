<?php
/**
 * Created by PhpStorm.
 * User: Jakob
 * Date: 20-07-2015
 * Time: 18:26
 */

session_start();

include("connection.php");

$query="UPDATE users SET diary='".mysqli_real_escape_string($link, $_POST['diary'])."'WHERE id='".$_SESSION['id']."' LIMIT 1";

mysqli_query($link, $query);

?>