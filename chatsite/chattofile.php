<?php 
    /* 
        FILE UNTUK MENERIMA DARI FORM MENUJU KE FILE TEXT
    */

    // Ambil dari post request
    $username = $_POST['username'];
    $message = $_POST['message'];

    // Untuk timestamp setiap chat
    $timestamp = date('H:i');


    // Format file string
    // tambah html tag biar langsung terformat, nanti jika di display langsung kelihatan
    $writeMessage = "[$timestamp] $username: $message". PHP_EOL; // Perlu EOl supaya setiap chat baru ditulis ke line baru

    // buka file chat
    $file = fopen("chat.txt", "a");

    // tulis ke file chat
    fwrite($file, $writeMessage);

    fclose($file);

    // Return ke index.php
    header("Location: index.php");
    exit();
?>