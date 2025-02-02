<?php
require_once '../App.php';
require_once '../inc/connection.php';
if($request->checkGet('id')){
    $id =$request->get('id');
    $stm= $conn->prepare('select id from todo where id=:id');
    $stm->bindParam(':id',$id);
    $stm->execute();
    if($stm->rowCount()>0){
        $delete = $conn->prepare('delete from todo where id=:id');
        $delete->bindParam(":id",$id);
        $reslut= $delete->execute();
        if($reslut){
            $session->set('success','note deleted successfully ');
            $request->header('../index.php');
        }
        else{
            $session->set('errors',['not found']);
        $request->header('../index.php');
        }
    }else{
        $session->set('errors',['not found']);
        $request->header('../index.php');
    }
}
else{
    $session->set('errors',['not found']);
     $request->header('../index.php');
}
