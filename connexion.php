<?php
session_start();

if (!empty($_POST['loginname']))
{
    $_SESSION['loginname'] = $_POST['loginname'];
    header('Location:index.php');
}