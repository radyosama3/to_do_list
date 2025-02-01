<?php 

require_once 'classes/Request.php';
require_once 'classes/Session.php';
require_once 'classes/validation/validation.php';

use todolist\classes\Request;
use todolist\classes\Session;
use todolist\classes\Validation\validation;

$request= new Request;
$session = new Session ; 
$validation = new validation;