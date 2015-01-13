<?php
/**
 * Created by PhpStorm.
 * User: Raphael
 * Date: 1/13/15
 * Time: 6:30 PM
 */

include('Goods.php');
$param = $_POST['param'];
$value = $_POST['value'];
$goods = Goods::search($param,$value);
echo(json_encode($goods));