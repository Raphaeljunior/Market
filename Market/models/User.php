<?php
/**
 * Created by PhpStorm.
 * User: Raphael
 * Date: 1/13/15
 * Time: 4:32 PM
 */




class User extends ActiveRecord\Model {

    //static $before_save = array('encrypt');
    function encrypt($password)
    {
        $hash = $this->hashSSHA($password);
        $encrypted_password = $hash["encrypted"]; // encrypted password
        $salt = $hash["salt"];
        $this->password = $encrypted_password;
        $this->salt = $salt;

    }
    function hashSSHA($password)
    {

        $salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);
        return $hash;
    }
    function checkhashSSHA($salt, $password)
    {

        $hash = base64_encode(sha1($password . $salt, true) . $salt);

        return $hash;
    }

} 