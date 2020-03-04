<?php
if (!isset($_SESSION)) {
    ob_start();
    session_start();
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <title>Zepid</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="lib/css/main.css">
    <link rel="stylesheet" href="lib/css/form.css">
    <script src="lib/js/main.js"></script>
</head>
<body>
<div class="header">
    <h1>Zepid</h1>
    <p>Love At First Words</p>
    <!-- <a href= "../zepid/index.php" title="Herzlich Wilkommen">
        <img src="lib/media/img/logo.png" alt="logo">
    </a> -->
</div>


<div class="row">
    <div class="leftcolumn">
        <div class="card">
            <h2>Anmeldung</h2>
            <?php
                include 'lib/php/includes/anmeldung_form_inc.php';
            ?>
        </div>
    </div>

    <div class="slideShow">
        <img class="slides animate-zoom" src="lib/media/img/slideshow/mixedrace1.jpg">
        <img class="slides animate-zoom" src="lib/media/img/slideshow/mixedrace2.jpg">
        <img class="slides animate-zoom" src="lib/media/img/slideshow/mixedrace3.jpg">
        <img class="slides animate-zoom" src="lib/media/img/slideshow/beautifulgal1.jpg">
        <img class="slides animate-zoom" src="lib/media/img/slideshow/beautifulgal2.jpg">
        <img class="slides animate-zoom" src="lib/media/img/slideshow/beautifulgal3.jpg">
    </div>
    
    <div class="rightcolumn-l">
        <div class="card">
            <h4>Mitglieder-Login</h4>
            <?php
            include 'lib/php/includes/login_inc.php';
            ?>
        </div>
    </div>
</div>

<div class="footer">
    <!-- FOOTER -->
    <?php
    include 'lib/php/includes/footer_inc.php';
    ?>
</div>


</body>
</html>
<?php
    ob_flush();
?>
