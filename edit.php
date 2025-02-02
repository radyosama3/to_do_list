<?php
require_once 'inc/header.php';
require_once 'inc/connection.php';  
require_once 'App.php';
if($request->checkGet('id')){
    $id = $request->get('id');
    $date = $conn -> prepare( 'select * from todo where id=:id');
    $date -> bindParam(':id',$id,PDO::PARAM_INT);
    $date -> execute();
    if($date -> rowCount() > 0){
        $note = $date -> fetch(Pdo::FETCH_ASSOC);

    }
    else{
        $session -> set('error','note not found');
        header('location:index.php');
    }
}
else{
    $session -> set('error','ID not found');
    header('location:index.php');
}
?>

<body class="container w-50 mt-5">
    <?php 
    require_once 'inc/error.php';?>
    <form action="handle/edit.php?id=<?php echo $id ?>" method="post">
            <textarea type="text" class="form-control"  name="title" id="" placeholder="enter your note here"><?php 
            echo $note['title'];
            ?></textarea>
            <div class="text-center">
                <button type="submit" name="submit" class="form-control text-white bg-info mt-3 " >Update</button>
            </div>  
    </form>
</body>
</html>