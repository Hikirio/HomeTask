<?php
/**
 * Created by PhpStorm.
 * User: Анатолий
 * Date: 23.04.2018
 * Time: 17:38
 */

session_start();
const  VOOPROS1 = 'PHP';
const VOPROD2 = 'HTML';

function test()
{

    $check = null;
    if (isset($_POST['answer']) && isset($_POST['ans'])) {
        if ($_POST['answer'] == VOOPROS1 && $_POST['ans'] == VOPROD2) {
            $check = true;
        }

        if ($check) {
            $_SESSION['access'] = true;
            $_SESSION['answer'] = $_POST['answer'];
            $_SESSION['ans'] = $_POST['ans'];
            header('Location: /HomeTask/myFunc/vseok.php');
            exit;
        }

    }
}

