<?php

remove_auth();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['login'] == LOGIN && $_POST['password'] == PASSWORD) {
        $_SESSION['is_auth'] = true;
        if (isset($_POST['remember'])) {
            set_auth();
        }
        redirect_to(ROOT);
    } else {
        $msg = 'Invalid username or password';
    }
} else {
    $msg = '';
}

$title = 'Login page';
$inner = template('login', [
    'msg' => $msg,
]);
