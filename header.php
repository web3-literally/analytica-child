<?php
/**
 * This file is a part of the Radium Framework core.
 * Please be cautious editing this file,
 *
 * @category Analytica
 * @package  Energia
 * @author   Franklin Gitonga
 * @link     http://radiumthemes.com/
 */

/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up until <div class="site-inner">
 *
 * @since 1.0.0
 */
do_action( 'analytica_doctype' );
do_action( 'analytica_meta' );
do_action( 'analytica_title' );

wp_head(); // we need this for plugins

?></head><?php 
?>

<body>
<header>
    <div class="container p-3">
        <?php the_custom_logo(); ?>
        <span class="float-right" >
            <?php
            $user = get_current_user_id();
            if ($user) {
                $link = '/login';
                $title = 'Login';
            } else {
                $link = wp_logout_url();
                $title = 'Logout';
            }
            ?>
            <a class="btn btn-primary mt-2" href="<?=$link?>" ><?=$title?></a>
        </span>
    </div>
</header>
<div class="site">
<div class="container">

