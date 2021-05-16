<?php
require 'config.php';

if($_SESSION['login']) {
	unset($_SESSION['login']);
	$_SESSION['success'] = 'Logout berhasil.';
	exit(header("Location: " . $url . "landing"));
} else {
	exit(header("Location: " . $url));
}