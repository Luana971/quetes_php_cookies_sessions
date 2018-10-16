<?php
session_start();

$cart = [];

if (isset($_GET['cookie']))
{
    if (!isset($_SESSION['cart']['cookie'][$_GET['cookie']]))
    {
        $_SESSION['cart']['cookie'][] = $_GET['cookie'];
        $_SESSION['cart']['cookie'][$_GET['cookie']]['nb'] = 1;
    } else {
        $_SESSION['cart']['cookie'][$_GET['cookie']]['nb']++;
    }
}