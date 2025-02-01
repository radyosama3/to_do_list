<?php
if ($session->check('success')) {
        $success = $session->get('success');
        echo "<div class='alert alert-success'>{$success}</div>";
    $session->remove('success');
}
