<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header id="mainHeader">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pcsd-logo-website-header-x2.png" alt="District Logo" />
      <nav>
        <a href="<?php echo home_url(); ?>">Blog</a>
        <a href="https://espifam.com/contact-us/">Contact Us</a>
        <a href="https://espifam.com/privacy-policy/">Privacy Policy</a>
        <a href="https://github.com/joshespi/espi-theme">Theme</a>
      </nav>

      <form>
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
      <ul class="address" itemtype="https://schema.org/PostalAddress">
        <li itemprop="streetAddress">280 West 940 North Provo, Utah </li>
        <li itemprop="telephone">801-374-4800</li>
      </ul>

    </header><!-- .site-header -->

      <main>
        <section>
