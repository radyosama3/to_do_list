<?php
require_once '../inc/connection.php';
require_once '../App.php';
//sumbit
if ($request->checkPost('submit')) {
    $title = $request->clean($request->post("title"));
    //vaildations 
    $validation->validate("title", $title, ['required', 'str']);
    $errors = $validation->GetError();
    if(empty($errors)){
        //insert
        $stm = $conn->prepare("insert into todo (title) values (:title)");
        $stm->bindParam(':title', $title, PDO::PARAM_STR);
        $output = $stm->execute(); 
        if($output){      
            $session->set('success', 'ToDo Added Successfully');
            $request->header('../index.php');
        }
        else{
            $session->set('error',['error while adding ToDo']);
            $request->header('../index.php');
        }
    }
    else{
        $session->set('errors', $errors);
        $request->header('../index.php');
    }
}
// catch

// validation


// insert

// return errors

// redirect index

