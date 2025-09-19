<?php
    /* 
        INI ADALAH FILE UNTUK MENGUPLOAD PHP
    */
    
    // ambil konten dari chat.txt
    header('Content-Type: text/plain');
    echo file_get_contents("chat.txt");
?>