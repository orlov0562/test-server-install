<?php

    // Simple protection from bots
    if (empty($_GET['info']) || $_GET['info']!=$_SERVER['REMOTE_ADDR']) {
        exit;
    }

    phpinfo();
