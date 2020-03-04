<?php
    function getTitle($url) {
        /* Aktuelle Datei aus $page wird als String eingelesen */
        $str = file_get_contents($url);
        /* RegEx erzeugt ein Array in dem Der Seitentitel auf Index 1 liegt  */
        preg_match('/\<title\>(.*)\<\/title\>/', $str, $title);
        /* Seitentitel aus Index 1 zurückgeben */
        return $title[1];
    }
    $page ='';
    // echo '<h4>Sie befinden sich auf der Seite: '.getTitle($page).'</h4>';
    if($page !== 'index.php') {
        echo '<h3><a href="/htdocs/zepid/index.php">&#169; zepid 2019</a></h3>';
    }

?>