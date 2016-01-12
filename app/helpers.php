<?php
/**
 *
 * @package		Adminpro
 * @author		Tran Hoang Thien (thienhb12@gmail.com)
 * @copyright   PHP TEAM
 * @link		http://phpandmysql.net
 * @since		Version 1.0
 * @phone       0944418192
 *
 */
/*
	* This is function debug 
*/

if(!function_exists("pre"))
{
    function pre($var)
    {   
        echo "<pre>";
        if(is_array($var) || is_object($var)){
            print_r($var);
        }else{
            echo $var;
        }
        echo "</pre>";
        die();
    }
}
/* 
 @param $id int
*/
if(!function_exists("code_customer"))
{
    function code_customer($id)
    {       
        if($id)
        {   
           if($id < 10){ 
                $number = "0000".$id;
                return $number;
           }elseif($id >= 10 && $id < 100 ){
                $number = "000".$id; 
                return $number;
           }elseif($id >= 100 && $id < 1000){
                $number = "00".$id;
                return $number; 
           }elseif($id >= 1000 && $id < 10000){
                $number = "0".$id; 
                return $number;
           }else{
                return $id; 
           }
        }
    }
}