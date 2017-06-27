<?php
session_start();

// check 'phone' field, proceed if !empty,
// else return to page
if (empty($_POST['phone'])) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    $_SESSION['order'] = array(
        'urlCameFrom' => $_SERVER['HTTP_REFERER'],
        'fio' => $_POST['name'],
        'phone' => $_POST['phone'],
        'timezone' => $_POST['timezone'],
        'ip' => $ip,

        'offerName' => 'wowpolisher', // offer name
        'price' => 1, // price
    );
    //parse to checkout page
    include_once "../../../checkout/index.php";
}