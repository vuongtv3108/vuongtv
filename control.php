<?php

/**
 * @author lolkittens
 * @copyright 2015
 */
include_once('model.php');
if(isset($_POST) and isset($_POST['sub_var']))
{
    $var1 = $_POST['var1'];
    $var2 = $_POST['var2'];
    $method = $_POST['method_v'];
    // khai báo 1 đối tượng cho class calculate
    $cal = new calculate();
    $cal->a = $var1;
    $cal->b = $var2;
    $cal->nhangiatri($method);
}
//tran viet vuong
?>