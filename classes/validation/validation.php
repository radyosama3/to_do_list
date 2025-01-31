<?php 
namespace todolist\Classes\Validation;

class Validation{
    public function validate($key , $value , $rules){
            foreach($rules as $rule ){
                $rule= 'todolist\Classes\Validation'.$rule;
                $object  = new $rule;  
            }
    }
}
?>