<?php
session_start();

unset($_SESSION['MEMBER']);

header('Location: http://localhost/learn-php/uts/index.php?page=home');