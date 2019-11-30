<?php
    $ip = file_get_contents('https://md5calc.com/ip.plain');
?>
<h1>Services</h1>
<div id="page-content">
    <ul>
        <li>PHP Info: <a href="phpinfo.php" target="_blank">http://<?=$ip?>/phpinfo.php</a></li>
        <li>Adminer: <a href="adminer/index.php" target="_blank">http://<?=$ip?>/adminer/</a></li>
    </ul>
    <p>The next services you should start after install from the <strong>/opt/docker</strong> folder</p>
    <ul>
        <li>Portainer: <a href="http://<?=$ip?>:9002" target="_blank">http://<?=$ip?>:9002</a></li>
        <li>SOLR: <a href="http://<?=$ip?>:8983/solr/" target="_blank">http://<?=$ip?>:8983</a></li>
        <li>Elasticsearch: <a href="http://<?=$ip?>:9200/" target="_blank">http://<?=$ip?>:9200</a></li>
        <li>Bitbucket: <a href="http://<?=$ip?>:7990/" target="_blank">http://<?=$ip?>:7990</a></li>
        <li>Teamcity: <a href="http://<?=$ip?>:8111/" target="_blank">http://<?=$ip?>:8111</a></li>
    </ul>
</div>
