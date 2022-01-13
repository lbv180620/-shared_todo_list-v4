<?php

/**
 * guest
 *
 * login_form.php
 * $title = "ログイン";
 * $page = "新規登録";
 * $login_form_dir = ".";
 * $$page_transition_path = "../register/signup_form.php";
 *
 * signup_form.php
 * $title = "新規登録";
 * $page = "ログイン";
 * $login_form_dir = "../login";
 * $$page_transition_path = "../login/login_form.php";
 */

use App\Utils\Common;

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title><?= Common::h($title) ?></title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/validate_form.css">
    <style>
        .navbar {
            display: flex;
            justify-content: space-between;
        }

        #a-conf {
            color: inherit;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <span class="navbar-brand"><a href="<?= Common::h($login_form_dir) ?>/login_form.php" id="a-conf">TODOリスト</a></span>
        <a href="<?= Common::h($page_transition_path) ?>" class="btn btn-success"><?= Common::h($page) ?>へ</a>
    </nav>

    <div class="container">
        <div class="row my-2">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <h1><?= Common::h($title) ?>してください</h1>
            </div>
            <div class="col-sm-3"></div>
        </div>
