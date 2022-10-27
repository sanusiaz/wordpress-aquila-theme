<?php
    /**
     * Header Template
     * @package Aquila
     */

?>

<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
    <meta charset="<?= bloginfo( 'charset' );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<? bloginfo( 'description' );?>">

    <?php wp_head(); ?>
</head>
<body <?php body_class('az_custom_class') ?>>

    <?php 
        if ( function_exists('wp_body_open') ) {
            wp_body_open();
        }
    ?>
    <header>This is my header</header>
