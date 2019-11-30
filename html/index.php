<?php
    $actions = array_map(
        fn($file) => preg_replace('~\.action\.php$~','',basename($file)),
        glob(dirname(__FILE__).'/*.action.php')
    );
    $action = $_GET['action'] ?? 'index';
    if (!in_array($action, $actions)) $action='index';
    if (file_exists(dirname(__FILE__).'/'.$action.'.action.php')) {
        ob_start();
        include dirname(__FILE__).'/'.$action.'.action.php';
        $content = ob_get_clean();
    }
?>
<html>
    <head>
        <style>
            html, body {height:100%;}
            body {display:flex; padding:0; margin:0; background-color:#282828; color:#c0c0c0; font-family:Arial; font-size:14px;}
            a {color:#b0b2ff; text-decoration:none;}
            a:hover {text-decoration:underline;}
            #sidebar {width: 200px; background-color: #080808; padding:10px;}
            #content {display:flex; flex-direction:column; flex:1;}
            #content h1 {margin:10px 0px 0px; padding:10px;}
            #page-content {padding:10px; flex:1;}
            #page-content iframe {width:100%; height:100%;}
        </style>
    </head>
    <body>
        <div id="sidebar">
            <ul>
                <?php foreach($actions as $action):?>
                <li><a href="?action=<?=$action?>"><?=ucfirst($action)?></a></li>
                <?php endforeach;?>
            </ul>
        </div>
        <div id="content">
            <?=$content??''?>
        </div>
    </body>
</html>
