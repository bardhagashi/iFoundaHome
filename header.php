<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>iFoundaHome Theme</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <?php wp_head(); ?>
    </head>

    <body>
        <header id="masthead" class="site-header" role="banner">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="<?php echo home_url(); ?>"><img alt="RealHomes Modern" src="http://modern.b-cdn.net/wp-content/uploads/2017/06/logo.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <?php 
                    wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             =>  2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'navbarSupportedContent',
                        'menu_class'        => 'nav navbar-nav menuItems',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker())
                    );
                ?>
                
                <div class="col-md-auto">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18px" height="18px" viewBox="0 0 459 459" style="enable-background:new 0 0 459 459;" xml:space="preserve">
                        <g>
                            <path d="M91.8,198.9c35.7,71.4,96.9,130.05,168.3,168.3L316.2,311.1c7.649-7.649,17.85-10.199,25.5-5.1
                                c28.05,10.2,58.649,15.3,91.8,15.3c15.3,0,25.5,10.2,25.5,25.5v86.7c0,15.3-10.2,25.5-25.5,25.5C193.8,459,0,265.2,0,25.5
                                C0,10.2,10.2,0,25.5,0h89.25c15.3,0,25.5,10.2,25.5,25.5c0,30.6,5.1,61.2,15.3,91.8c2.55,7.65,0,17.85-5.1,25.5L91.8,198.9z">
                            </path>
                        </g>
                    </svg>
                    <span class='phone-number'>&nbsp; +383 38 111 111 &nbsp; &nbsp; </span>
                    <span class="user-login">
                        <a href="#"  data-toggle="modal" data-target="#loginModal">
                            <svg version="1.1" class="user-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
                                <g id="account-circle">
                                    <path d="M255,0C114.75,0,0,114.75,0,255s114.75,255,255,255s255-114.75,255-255S395.25,0,255,0z M255,76.5
                                        c43.35,0,76.5,33.15,76.5,76.5s-33.15,76.5-76.5,76.5c-43.35,0-76.5-33.15-76.5-76.5S211.65,76.5,255,76.5z M255,438.6
                                        c-63.75,0-119.85-33.149-153-81.6c0-51,102-79.05,153-79.05S408,306,408,357C374.85,405.45,318.75,438.6,255,438.6z">
                                    </path>
                                </g>
                            </svg>
                        </a>
                    </span>
                </div>
            </nav>
        </header>
        
        <div class="sad">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/firstpic.jpg"
                            alt="First slide">
                        <div class="first-card">
                            <h3> <a href="#" class="title">
                                    Home in Merrick Way </a></h3>
                            <div class="price">For Sale</div>
                            <span> $540,000 </span>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/secondpic.jpg"
                            alt="Second slide">
                        <div class="second-card">
                            <h3> <a href="#" class="title">
                                    Villa on Grand Avenue </a></h3>
                            <div class="price">For Rent</div>
                            <span> $4,750 Monthly </span>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/thirdpic.jpg"
                            alt="Third slide">
                        <div class="third-card">
                            <h3> <a href="#" class="title">
                                    Home in Coral Gables </a></h3>
                            <div class="price">For Sale</div>
                            <span> $850,000 </span>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="form">
                <form class="form-style" name="form" method="POST" action="form.php">

                    <div class="top">
                        <h3 id="title">Let Us Call You! </h3>
                        <p>To help you choose your property </p>
                    </div>
                    <div class="first-row">
                        <div class="col">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="column">
                            <input type="tel" id="phone" class="form-control" placeholder="Your Number">
                        </div>
                    </div>
                    <div class="second-row">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="third-row">
                        ​<textarea id="message" name="message" rows="4"
                            placeholder="Tell us about desired property"></textarea>
                    </div>
                    <div class="fourth-row">
                        <div class="form-check">
                            <p><b>GDPR Agreement *</b></p>
                            <p><input type="checkbox" required /> I consent to having this website store my submitted
                                information so they can respond to my inquiry.</p>
                        </div>
                    </div>
                    <div class="fifth-row">
                        <button name="submit" id="submit">Submit </button>
                        <?php include 'form.php'; ?>
                    </div>
                </form>

                <div class="box arrow-right">
                    <i class="fas fa-phone-alt"></i>
                </div>
            </div>
        </div>