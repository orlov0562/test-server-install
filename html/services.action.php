<?php
    $ip = file_get_contents('https://md5calc.com/ip.plain');
?>
<h1>Services</h1>
<div id="page-content">
    <ul>
        <li><a href="phpinfo.php" target="_blank">Open Phpinfo in new window</a></li>
        <li><a href="adminer/index.php" target="_blank">Open Adminer in new window</a></li>
    </ul>
    <p>The next services you should start after install from the /opt/docker folder</p>
    <ul>
        <li><a href="http://<?=$ip?>:9002" target="_blank">Open Portainer in new window</a></li>
        <li><a href="http://<?=$ip?>:8983/solr/" target="_blank">Open SOLR in new window</a></li>
        <li><a href="http://<?=$ip?>:9200/" target="_blank">Open Elasticsearch in new window</a></li>
        <li><a href="http://<?=$ip?>:7990/" target="_blank">Open Bitbucket in new window</a></li>
        <li><a href="http://<?=$ip?>:8111/" target="_blank">Open Teamcity in new window</a></li>
    </ul>
</div>
