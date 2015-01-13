<?php
/**
 * Created by PhpStorm.
 * User: Raphael
 * Date: 1/13/15
 * Time: 4:42 PM
 * Wrapper for User class, performs registration and Login
 */
require_once dirname(__FILE__). '/../ActiveRecord.php';
// initialize ActiveRecord
ActiveRecord\Config::initialize(function($cfg)
{
    $cfg->set_model_directory(dirname(__FILE__) . '/models');
    $cfg->set_connections(array('development' => 'mysql://root:@127.0.0.1/mymarket'));

    // you can change the default connection with the below
    //$cfg->set_default_connection('production');
});
class Person {

    /**
     * @param $name : users name
     * @param $password : users password
     * @param $email user email/id
     * @return string user registration returned
     */
    public static  function Register($name, $password, $email)
    {
        $user = new User(array('name'=> $name,'password'=>$password, 'email'=>$email ));
        $message = $user->name.' has been registered';
        return $message;
    }

    /**
     * @param $username :  id or credential
     * @param $password user password
     * @return bool whether login success
     */
    public static  function  Login($username, $password)
    {
        $user = User::find_by_email($username);
        if($user->password == $password)
        {
            return true;
        }
        else
        {
            return false;
        }


    }

}