<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package southernOceanJewlery
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <title>Dont Blink Store</title>
    <link rel="stylesheet" href="/wp-content/themes/southernOcean/style.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/mystylesheets/bootstrap.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Arima+Madurai|Molle:400i" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
       <div class="container-fluid">
           <img class="navbar-img" src="<?php echo get_template_directory_uri(); ?>/images/image1.PNG" alt="">
       </div>
        <nav class="navbar navbar-expand-md">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

               <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8888">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Shop
                        </a>
                        <div class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                          <div class="row">
                              <div class="col-xs-12 col-md-4">
                                  <a class="dropdown-item" href="http://localhost:8888/product-category/necklaces/">Necklaces</a>
                                  <a class="dropdown-item" href="http://localhost:8888/product-category/bracelets/">Bracelets</a>
                                  <a class="dropdown-item" href="http://localhost:8888/product-category/earings/">Earings</a>
                              </div>
                              <div class="col-xs-12 col-md-4">
                                  <a class="dropdown-item" href="http://localhost:8888/product-category/copper/">Copper</a>
                                  <a class="dropdown-item" href="http://localhost:8888/product-category/paua/">Paua</a>
                                  <a class="dropdown-item" href="http://localhost:8888/product-category/silver/">Silver</a>
                              </div>
                              <div class="col-xs-12 col-md-4">
                                  <a class="dropdown-item" href="http://localhost:8888/product-category/assecories/">Assecories</a>
                                  <a class="dropdown-item" href="http://localhost:8888/product-category/featured/">Featured</a>
                                  <a class="dropdown-item" href="http://localhost:8888/shop/">Shop All</a>
                              </div>
                          </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8888/my-account/">Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8888/cart/">Cart</a>
                    </li>
                </ul>
            </div>
        </nav>