<?php

define('LOGIN', 'admin');
define('PASSWORD', 'demo');

function set_auth($login = LOGIN, $password = PASSWORD) {
    setcookie('login', hash('sha256', $login), time() + 3600 * 24 * 7, '/');
    setcookie('password', hash('sha256', $password), time() + 3600 * 24 * 7, '/');
    return true;
}

function is_auth($login = LOGIN, $password = PASSWORD) {
    $is_auth = false;
    if (isset($_SESSION['is_auth']) && $_SESSION['is_auth']) {
        $is_auth = true;
    } elseif (isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
        if ($_COOKIE['login'] == $login && $_COOKIE['password'] == hash('sha256', $password)) {
            $_SESSION['is_auth'] = true;
            $is_auth = true;
        }
    }
    return $is_auth;
}

function remove_auth() {
    if (isset($_SESSION['is_auth'])) {
        unset($_SESSION['is_auth']);
    }
    if (isset($_COOKIE['login'])) {
        setcookie('login', '', 1, '/');
    }
    if (isset($_COOKIE['password'])) {
        setcookie('password', '', 1, '/');
    }
    return true;
}
