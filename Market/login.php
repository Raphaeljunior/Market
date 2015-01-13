<?php
/**
 * Created by PhpStorm.
 * User: Raphael
 * Date: 1/13/15
 * Time: 6:05 PM
 */
include('Person.php');
$user = $_POST['username'];
$password = $_POST['password'];
echo(json_encode(Person::Login($user,$password)));
