<?php
/**
 * Created by PhpStorm.
 * User: Raphael
 * Date: 1/13/15
 * Time: 6:02 PM
 */

include('Person.php');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
 echo json_encode(Person::Register($name,$password,$email));