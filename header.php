<?php
/**
 * Footer template.
 * 
 * @package BestCR 
 */
?>
<!doctype html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport"
        content="width=divice-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatable" content="ig-edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'hello-class' ); ?>>

<?php 
if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} 

?>

<header>Header</header>