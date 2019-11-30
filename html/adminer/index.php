<?php
    function adminer_object() {
        // required to run any plugin
        include_once "./plugins/plugin.php";

        // autoloader
        foreach (glob("plugins/*.php") as $filename) {
            include_once "./$filename";
        }

        $plugins = array(
            // specify enabled plugins here
            new AdminerTablesFilter,
        );

        return new AdminerPlugin($plugins);
    }

    require dirname(__FILE__).'/adminer-4.7.5-en.php';
