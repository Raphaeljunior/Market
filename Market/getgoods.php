<?php
/**
 * Created by PhpStorm.
 * User: Raphael
 * Date: 1/13/15
 * Time: 6:40 PM
 */
include('Goods.php');
echo json_encode(Goods::getGoods());
