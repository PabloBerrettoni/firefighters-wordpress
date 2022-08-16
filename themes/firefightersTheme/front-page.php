<?php 
$style = '/assets/css/style.css';
$logo = '/assets/images/logo.png';
include ('templates/partials/header.php');
?>

<div class="main-home">
    <img src="<? echo get_template_directory_uri(); ?><?php echo $logo ?>" alt="logo">
    <h2>Bomberos Bogotá</h2>
    <div class="form">
        <input type="email" placeholder="Usuario">
        <input type="password" placeholder="Contraseña">
        <input type="button" value="Ingresar">
    </div>
</div>

<?php include('templates/partials/footer.php') ?>