<?php

session_start();
const LOGIN = 'user1';
const PASS = '123';

function login(array $post)
{
    $check = null;
    if (isset($post['login']) && isset($post['password'])) {
        if ($post['login'] == LOGIN && $post['password'] == PASS) {
            $check = true;
        }
    }
    if ($check) {
        $_SESSION['access'] = true;
        $_SESSION['login'] = $post['login'];
        header('Location: /HomeTask/auth/blog.php');
        exit;
    } else {
        $_SESSION['access'] = false;
        header('Location: /HomeTask/auth/access_denied.php');
        exit;
    }
}

function logout()
{
    session_destroy();
}

function viewUserName()
{
    return isset($_SESSION['login']) ? $_SESSION['login'] : null;
}