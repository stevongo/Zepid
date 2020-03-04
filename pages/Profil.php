<?php
if(!isset($_SESSION)) {
    ob_start();
    session_start();
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <title>Profil</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../lib/css/main.css">
    <link rel="stylesheet" href="../lib/css/form.css">
</head>
<body>
<div class="header">
    <h1>Zepid</h1>
    <p>Love AT First Words</p>
</div>

<div class="topnav">
   <!-- NAV -->
   <?php
        $page = basename(__FILE__);
        include '../lib/php/includes/nav_inc.php'; ?>
</div>

<div class="row">    
    <div class="leftcolumn">
            <!-- 
            Einträge der Datenbank anzeigen und editierbar machen. 
            
            -->
    </div>
    
</div>

<div class="footer">
    <!-- FOOTER -->
    <?php
    include '../lib/php/includes/footer_inc.php'; ?>
</div>


</body>
</html>


