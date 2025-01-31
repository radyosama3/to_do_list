<?php
require_once '../inc/connection.php';
require_once '../App.php';
//sumbit
if ($request->checkPost('submit')){
    $title = $request->clean($request->post("title"));
    //vaildations 
    
} else {
    $request->header('../index.php');
}

//catch

//validation


//insert

//return errors 

//redirect index  


