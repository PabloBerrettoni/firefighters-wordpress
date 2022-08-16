<?php 
/*
 * Template Name: Alerts
 *
*/
?>
<?php
$style = '/assets/css/alerts.css';
$logo = '/assets/images/logo.png';
include ('templates/partials/header.php');
?>


<div class="alertsMain">
    <div class="alert">
        <h1>Alert</h1>
    </div>
    <div class="directions">
        <h2 class="direction">Direction</h2>
        <h2 class="direction">Direction</h2>
    </div>
    <div class="btnAssist">
        <button type="submit" class="assistButton">Assist</button>
    </div>
    <div>
        <button class="circleMap"></button>
    </div>
    <div class="bottomAlert">
        <div class="topLine">
            <p>Personal</p>
        </div>
        <div class="bottomInfo">
            <div class="infoPO">
                <p>10</p>
                <p>Presents</p>
            </div>
            <div class="separator"><p></p></div>
            <div class="infoPO">
                <p>14</p>
                <p>On site</p>
            </div>
        </div>
    </div>
</div>

<?php include('templates/partials/footer.php') ?>
