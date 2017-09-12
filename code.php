<?php
function ping() {
    echo 'Pong';
}

function login() {
    $_GET['token'] = md5(json_encode($_GET));
    extract($_GET);
    
    include __DIR__.'/tpl/login.php';
}

function portal() {

}

function auth() {

}

function logout() {

}
