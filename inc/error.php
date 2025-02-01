<?php
if ($session->check('errors')) {
    foreach ($session->get('errors') as $error) {
        echo "<div class='alert alert-danger'>" . $error . "</div>";
    }
    $session->remove('errors');
}
