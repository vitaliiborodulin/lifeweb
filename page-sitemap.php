<?php
/*
Template Name: Sitemap
*/

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Карта сайта</title>
</head>
<body>

<?php echo do_shortcode('[wp_sitemap_page]');  ?>

</body>

