<?php
/**
 * Created by PhpStorm.
 * User: Raphael
 * Date: 1/13/15
 * Time: 5:30 PM
 */

/**
 * Class Goods Wrapper for filtering products by ID/ Category
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
class Goods {

    /*
     * returns all goods objects in an array
     */
    public static  function getGoods()
    {
        return Product::all();
    }

    public static  function search($param, $value)
    {
        if($param == 'name')
        {
            return Product::all(array('conditions'=> "name like '%.$value.%' "));
        }
        elseif($param == 'category')
        {
            return Product::all(array('conditions'=> array('category = ?',$value)));
        }
        else
        {
            return array("Search Failed");

        }
    }


}