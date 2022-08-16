<?php 
$style = '/assets/css/firefighterList.css';
$logo = '/assets/images/logo.png';
include ('templates/partials/header.php');
?>

<div class="fireList">
    <div class="section">
        <p class="topData">On site: 5</p>
        <div class="sectionData">
        <?php 
            $i=0;
            while($i < 5) {
                echo '<p>Apellido, Nombre</p>';
                $i++;
            }
        ?>
        </div>
    </div>
    <div class="section">
        <p class="topData">On their way: 5</p>
        <div class="sectionData">
        <?php 
            $i=0;
            while($i < 5) {
                echo '<p>Apellido, Nombre</p>';
                $i++;
            }
        ?>
        </div>
    </div>
</div>

<?php include('templates/partials/footer.php') ?>