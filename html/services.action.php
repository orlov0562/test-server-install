<?php
    $ip = file_get_contents('https://md5calc.com/ip.plain');
?>
<h1>Services</h1>
<div id="page-content">
    <ul>
        <li><a href="adminer/index.php" target="_blank">Open adminer in new window</a></li>
        <li><a href="http://<?=$ip?>:8983/solr/" target="_blank">Open SOLR in new window</a></li>
        <li><a href="http://<?=$ip?>:9200/" target="_blank">Open Elasticsearch in new window</a></li>
    </ul>
</div>
