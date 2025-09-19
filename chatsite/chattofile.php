<?php 
    /* 
        FILE UNTUK MENERIMA DARI FORM MENUJU KE FILE TEXT
    */
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    
    // Ambil dari post request
    // sanitize Agar tidak ada injection
    $username = htmlspecialchars($_POST['username']);
    $message = htmlspecialchars($_POST['message']);

    // Untuk timestamp setiap chat
    $timestamp = date('H:i');


    // Format file string
    // tambah html tag biar langsung terformat, nanti jika di display langsung kelihatan
    $writeMessage = "[$timestamp] $username: $message". PHP_EOL;

    // buka file chat
    $file = fopen("chat.txt", "a");

    // tulis ke file chat
    fwrite($file, $writeMessage);

    fclose($file);

    // Return ke index.php
    header("Location: index.php");
    exit();
?>