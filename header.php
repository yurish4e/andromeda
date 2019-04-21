<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package andromeda
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">

<div class="container main_container">
        <header id="masthead" class="header">

            <!--logo-->
            <div class="site-branding logo">
                <?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                <?php
			else :
				?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                <?php
			endif;
			$andromeda_description = get_bloginfo( 'description', 'display' );
			if ( $andromeda_description || is_customize_preview() ) :
				?>
               
                <?php endif; ?>
            </div>
            <!--logo-->

            <div class="header_contacts">
                    <div class="header_contacts_left">
                        <a href="mail-to:" class="email"></a>
                        <a href="" class="location"></a>
                    </div>
                    <div class="header_contacts_right">
                        <a href="tel:+380933523072" class="phone">+38 093 352 30 72</a>
                        <a href="tel:+380933523072" class="phone">+38 095 598 64 21</a>
                    </div>
            </div>
            <div class="header_nav">
                   <nav id="site-navigation" class="main-navigation">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'andromeda' ); ?></button>
                    <?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
                </nav>
            </div>



        </header><!-- #masthead -->
        

        <div id="content" class="site-content">