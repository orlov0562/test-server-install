<?php

    $ip = file_get_contents('https://md5calc.com/ip.plain');

    // Simple protection from bots
    if (empty($_GET['info']) || $_GET['info']!=$ip) {
        header("HTTP/1.0 404 Not Found");
        exit;
    }

    phpinfo();
