<?php 
namespace todolist\Classes\Validation;
require_once 'str.php';
require_once 'required.php';
class Validation{
    private $errors = [];
    public function validate($key , $value , $rules){
        foreach($rules as $rule ){
            $rule= 'todolist\Classes\Validation\\'.$rule;
            $object  = new $rule;  
            $error =  $object->check($key , $value);
            if($error !== false){
                $this-> errors[]= $error;
            }
        }

    }
    public function GetError (){
        return $this->errors;
    }
}
?>