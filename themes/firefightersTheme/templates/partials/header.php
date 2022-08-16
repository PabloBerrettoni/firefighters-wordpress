<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        FirefightersApp
    </title>
    <link rel="stylesheet" href="<? echo get_template_directory_uri(); ?><?php echo $style ?>">
    <?php wp_head();?>
</head>
<body <?php body_class();?> class="body">

<div class="top-row">
    <div class="left">
        <img src="<? echo get_template_directory_uri(); ?><?php echo $logo ?>" alt="logo">
        <a href="/">Home</a>
    </div>
    <a href="/?page_id=14">Alerts</a>
    <a href="/?page_id=10">Profile</a>
    <a href="/?page_id=12">List</a>
</div>