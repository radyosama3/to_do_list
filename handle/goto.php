<?php
require_once '../inc/connection.php';
require_once '../App.php';
if ($request->checkGet(key: 'id')&&$request->checkGet('name')){
    // echo 'submit';
    $id = $request->get('id');  
    $name = $request->get('name');  
    $stm = $conn->prepare('select id from todo where id=:id');
    $stm->bindParam(':id', $id, PDO::PARAM_INT);
    $stm->execute();
    if ($stm->rowCount()>0){
        $update = $conn->prepare("update todo set status=:status where id=:id");
        $update->bindParam(':status', $name , PDO::PARAM_STR);
        $update -> bindParam(':id',$id,PDO::PARAM_INT);
        $reslut = $update -> execute();
        if ($reslut){
            
            $session -> set('success','status updated successfully');
            header('location:../index.php');
        }
        else{
            $session -> set('errors','error in update');
            header('location:../index.php');
        }  
        
    }
    else{
        $session -> set('errors',' not found');
        header('location:../index.php');
    }
}