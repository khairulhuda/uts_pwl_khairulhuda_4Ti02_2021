<?php
session_start();
require_once '../server/koneksi.php';
require_once '../model/Member.php';

$uname = $_POST['username'];
$password = $_POST['password'];

$listData = [$uname,$password];

$obj = new Member();
$login = $obj->cekLogin($listData);

if(!empty($login)) {
    $_SESSION['MEMBER'] = $login;
    header('Location: http://localhost/php/uts/index.php?page=views/menu/dataPegawai');
} else {
    header('Location: http://localhost/php/uts/index.php?page=views/menu/gagalLogin');
}