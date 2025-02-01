<?php 
namespace todolist\Classes\Validation;

class Str{
 public function check($key, $value){
    if(is_numeric($value)){
        return "this $key is not string";
    }else
    {
        return false;
    }


}

}