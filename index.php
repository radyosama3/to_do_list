<?php
require_once 'inc/header.php';
require_once 'inc/connection.php';
require_once 'App.php';
?>

<body>

    <div class="container my-3 ">
        <div class="row d-flex justify-content-center">
            <div class="container mb-5 d-flex justify-content-center">
                <div class="col-md-4">
                    <?php
                    require_once 'inc/error.php';
                    require_once 'inc/success.php';
                    ?>
                    <form action="handle/addToDo.php" method="post">
                        <textarea type="text" class="form-control" rows="3" name="title" id=""
                            placeholder="enter your note here"></textarea>
                        <div class="text-center">
                            <button type="submit" name="submit" class="form-control text-white bg-info mt-3 ">
                                Add To Do
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="row d-flex justify-content-between">
            <!-- all -->
            <div class="col-md-3  ">
                <h4 class="text-white">All Notes</h4>
                <?php
                $stm = $conn->query('SELECT * FROM `todo` WHERE `STATUS`="all" order by `id` desc');
                if ($stm->rowCount() > 0) {
                    $all_notes = $stm->fetchAll();
                    foreach ($all_notes as $all) { ?>
                        <div class="m-2  py-3">
                            <div class="show-to-do">
                                <div class="alert alert-info p-2">
                                    <h4><?php echo $all['title'] ?></h4>
                                    <h5><?php echo $all['created_at'] ?></h5>
                                    <div class="d-flex justify-content-between mt-3">
                                        <a href="edit.php?id=<?php echo $all['id'] ?>"
                                            class="btn btn-info p-1 text-white">edit</a>

                                        <a href="#" class="btn btn-info p-1 text-white">doing</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php
                    }
                } else { ?>
                    <div class="item">
                        <div class="alert-info text-center ">
                            empty to do
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

            <!-- doing -->
            <div class="col-md-3 ">

                <h4 class="text-white">Doing</h4>


                <div class="m-2 py-3">
                    <div class="show-to-do">
                        <?php
                        $stm = $conn->query('SELECT * FROM todo where `status`="doing"; ');
                        if ($stm->rowCount() > 0):
                            $doing_notes = $stm->fetchAll();
                            foreach ($doing_notes as $doing):
                        ?>
                                <div class="alert alert-success p-2">
                                    <h4><?php echo $doing['title'] ?></h4>
                                    <h5><?php echo $doing['created_at'] ?></h5>
                                    <div class="d-flex justify-content-between mt-3">
                                        <a></a>
                                        <a href="#" class="btn btn-success p-1 text-white rounded ">Done</a>
                                    </div>

                                </div>

                            <?php
                            endforeach;
                        else:
                            ?>

                            <div class="item">
                                <div class="alert-success text-center ">
                                    empty to do
                                </div>
                            </div>
                        <?php
                        endif;
                        ?>




                    </div>
                </div>

            </div>

            <!-- done -->
            <div class="col-md-3 ">
                <h4 class="text-white">Done</h4>
                <div class="m-2 py-3">
                    <div class="show-to-do">
                        <?php
                        $stm = $conn->query('SELECT * FROM todo where `status`="done";');
                        if ($stm->rowCount() > 0):
                            $done_notes = $stm->fetchAll();
                            foreach ($done_notes as $done):
                        ?>
                                <div class="alert alert-warning p-2">
                                    <a href="handle/delete.php?id=<?php echo $done['id'] ?>" onclick="confirm('are your sure')"
                                        class="remove-to-do text-dark d-flex justify-content-end "><i class="fa fa-close"
                                            style="font-size:16px;"></i></a>
                                    <h4><?php echo $done['title'] ?></h4>
                                    <h5><?php echo $done['created_at'] ?></h5>
                                </div>
                            <?php
                            endforeach;
                        else:
                            ?>
                            <div class="item">
                                <div class="alert-warning text-center ">
                                    empty to do
                                </div>
                            <?php endif; ?>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>