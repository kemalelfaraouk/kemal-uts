<?php

// base url (domain) jika udah online / di hosting masukkan domain contoh : https://domainku.com
$url= "http://localhost/kemal-uts/";

// Config database
$config = [
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'name' => 'users',
];

// Global Variabel db untuk query 
$db = mysqli_connect($config['host'], $config['username'], $config['password'], $config['name']);

// Cek koneksi jika gagal akan berhenti dan menampilkan error database.
if(!$db) {
    die('Database error ' . mysqli_connect_error());
}

// Start session.
session_start();
?>