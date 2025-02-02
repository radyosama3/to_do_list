<?php
require_once '../inc/connection.php';
require_once '../App.php';
if ($request->checkGet(key: 'id')&&$request->checkPost('submit')){
    // echo 'submit';
    $id = $request->get('id');  
    $title = $request->clean($request->post('title'));
    //validation 
    $validation->validate('title',$title,['required','str']); 
    $error= $validation->GetError();
    if(empty($error)){
        $update = $conn->prepare("update todo set title=:title where id=:id");
        $update->bindParam(':title', $title, PDO::PARAM_STR);
        $update -> bindParam(':id',$id,PDO::PARAM_INT);
        $reslut = $update -> execute();
        if ($reslut){

            $session -> set('success','note updated successfully');
            header('location:../index.php');
        }
        else{
            $session -> set('errors','error in update');
            header('location:../edit.php?id='.$id);
        }  
    }
    else{
        // var_dump($error);
        $session -> set('errors',$error);
        header('location:../edit.php?id='.$id);
    }
    //update 
    //redirect
}
else{
    $session -> set('error','ID not found');
    header('location:../index.php');
}