<?php 
namespace todolist\classes\Validation;
require_once 'validator.php'; 
use todolist\classes\Validation\Validator;
class Required implements Validator {
	public function check($key  , $value){ {
        if(empty($value)){
            return "this $key is required";
        }else
        {
            return false;
        }
    }
}
}

