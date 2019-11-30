<?php

    // Simple protection from bots
    if (empty($_GET['info']) || $_GET['info']!=$_SERVER['REMOTE_ADDR']) {
        header("HTTP/1.0 404 Not Found");
        exit;
    }

    phpinfo();
