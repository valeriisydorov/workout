<?php

function template($view_name, $vars = []) {
    extract($vars);
    ob_start();
    include("views/$view_name.php");
    return ob_get_clean();
}

function redirect_to($tpl) {
    header("Location: $tpl");
    exit();
}