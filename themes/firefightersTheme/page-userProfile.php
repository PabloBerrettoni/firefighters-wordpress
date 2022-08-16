<?php 
/*
 * Template Name: userProfile
 *
*/
?>
<?php
$style = '/assets/css/userProfile.css';
$logo = '/assets/images/logo.png';
$maleProfile = '/assets/images/male-profile.jpg';
include ('templates/partials/header.php');
?>


<div class="profileMain">
    <img src="<? echo get_template_directory_uri(); ?><?php echo $maleProfile ?>" alt="headquarters department">
    <h2>Name of user</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque doloribus, aperiam, adipisci veritatis, provident rem libero quaerat enim accusamus fuga nihil reprehenderit voluptatum vitae repellat perspiciatis cupiditate laborum numquam omnis?</p>
    <img src="<? echo get_template_directory_uri(); ?><?php echo $logo ?>" alt="profile image">
</div>

<?php include('templates/partials/footer.php') ?>
