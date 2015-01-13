<?php
/**
 * Created by PhpStorm.
 * User: Raphael
 * Date: 1/13/15
 * Time: 4:25 PM
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