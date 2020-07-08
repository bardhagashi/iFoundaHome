<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iFoundaHome Theme</title>
    <?php wp_head(); ?>
</head>

<body>
    <header id="masthead" class="site-header" role="banner">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="<?php echo home_url(); ?>"><img alt="RealHomes Modern"
                    src="http://modern.b-cdn.net/wp-content/uploads/2017/06/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" width="18px" height="18px" viewBox="0 0 459 459" style="enable-background:new 0 0 459 459;"
                    xml:space="preserve">
                    <g>
                        <path
                            d="M91.8,198.9c35.7,71.4,96.9,130.05,168.3,168.3L316.2,311.1c7.649-7.649,17.85-10.199,25.5-5.1
                                c28.05,10.2,58.649,15.3,91.8,15.3c15.3,0,25.5,10.2,25.5,25.5v86.7c0,15.3-10.2,25.5-25.5,25.5C193.8,459,0,265.2,0,25.5
                                C0,10.2,10.2,0,25.5,0h89.25c15.3,0,25.5,10.2,25.5,25.5c0,30.6,5.1,61.2,15.3,91.8c2.55,7.65,0,17.85-5.1,25.5L91.8,198.9z">
                        </path>
                    </g>
                </svg>
                <span class='phone-number'>&nbsp; +383 38 111 111 &nbsp; &nbsp; </span>

                <?php 
                    if(isset($_SESSION['userId'])) {

                        echo '<span class="user-login">
                                <a href="#">'.$_SESSION['userUsername'].'</a>
                            </span>
                            <span>
                                <form action="'; echo get_template_directory_uri().'/logout.php" method="post">
                                    <button type="submit" name="logout-submit">Logout</button>
                                </form>
                            </span>';

                    } else {
                        
                        echo '<span class="user-login" data-toggle="modal" data-target="#loginModal">
                                <a href="#" data-toggle="modal" data-target="#loginModal">
                                    <svg version="1.1" class="user-icon" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="28px"
                                        viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
                                        <g id="account-circle">
                                            <path
                                                d="M255,0C114.75,0,0,114.75,0,255s114.75,255,255,255s255-114.75,255-255S395.25,0,255,0z M255,76.5
                                                    c43.35,0,76.5,33.15,76.5,76.5s-33.15,76.5-76.5,76.5c-43.35,0-76.5-33.15-76.5-76.5S211.65,76.5,255,76.5z M255,438.6
                                                    c-63.75,0-119.85-33.149-153-81.6c0-51,102-79.05,153-79.05S408,306,408,357C374.85,405.45,318.75,438.6,255,438.6z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                            </span>';
                    }
                ?>

            </div>
        </nav>
    </header>

    <!-- Login Register Modal -->
    <div class="modal fade bd-example-modal-lg" id="loginModal" tabindex="-1" role="dialog"
        aria-labelledby="loginModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- Close Button -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- Close Button -->
                    <div class="container">
                        <div class="row">
                            <div class="col-6" id="divOfQuotes">
                                <div>
                                    <span class="quotePhoto">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 28">
                                            <path class="st0"
                                                d="M33.2 2c-2.7 0-5.4 1.4-8 4.1 -2.7 2.6-4.3 6.2-4.3 9.9 -0.1 2.3 0.7 4.6 2.2 6.4 1.4 1.6 3.4 2.4 5.6 2.4 1.9 0 3.8-0.6 5.2-1.9 1.4-1.1 2.2-2.9 2.1-4.7 0.1-1.5-0.5-2.9-1.4-4 -0.9-1-2.2-1.6-3.6-1.6 -1.2 0.3-2.3 0.6-3.5 0.7 0.6-2.1 2.1-3.9 4.1-4.9l3.2-1.6C35.5 6.3 36 5.4 36 4.4 36 2.8 35.1 2 33.2 2L33.2 2zM12.7 15.8C11 16 9.4 16.6 8 17.5c-0.1-0.5-0.1-1-0.1-1.5 0.1-2 0.8-4 2.1-5.5 1.3-1.9 2-3.2 2-3.9 0-1.6-0.9-2.5-2.8-2.5 -1.5 0-3 1.3-4.6 3.8C2.9 10.3 2 13.2 2 16.2c-0.1 2.8 0.8 5.5 2.4 7.7 1.4 2 3.6 3.1 6 3.1 1.8 0.1 3.6-0.5 5-1.7 1.2-1.1 1.9-2.7 1.9-4.3C17.3 17.5 15.7 15.8 12.7 15.8L12.7 15.8 12.7 15.8z">
                                            </path>
                                        </svg>
                                    </span>
                                    <p class="smarty"><?php the_field('quote'); ?></p>
                                    <span class="authorOfSmarty"><?php the_field('quote_author'); ?></span>
                                </div>
                                <div class="dateBox">
                                    <span class="loginDate" id="loginDate"></span>
                                    <span class="loginDay" id="loginDay"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <!-- Default form login -->
                                <form class="text-center" id="loginForm"
                                    action="<?php echo get_template_directory_uri(); ?>/login.php" method="post">

                                    <p class="h4 mb-4">Sign in</p>

                                    <!-- Username or Email -->
                                    <input type="text" id="defaultLoginFormEmail" class="form-control mb-4"
                                        name="usermail" placeholder="Username or E-mail">

                                    <!-- Password -->
                                    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4"
                                        name="pwd" placeholder="Password">

                                    <div class="d-flex justify-content-around">
                                        <div>
                                            <!-- Remember me -->
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="defaultLoginFormRemember">
                                                <label class="custom-control-label"
                                                    for="defaultLoginFormRemember">Remember me</label>
                                            </div>
                                        </div>
                                        <div>
                                            <!-- Forgot password -->
                                            <a href="">Forgot password?</a>
                                        </div>
                                    </div>

                                    <!-- Login button -->
                                    <button class="btn btn-info btn-block my-4" type="submit"
                                        name="login-submit">Login</button>

                                    <!-- Register -->
                                    <p>Not a member?
                                        <input class="formBtn" id="clickToRegister" type="button" value="Register">
                                    </p>

                                </form>
                                <!-- Default form login -->

                                <!-- Default form register -->
                                <form class="text-center" id="registerForm"
                                    action="<?php echo get_template_directory_uri(); ?>/register.php" method="post">

                                    <p class="h4 mb-4">Sign up</p>

                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <!-- User name -->
                                            <input type="text" id="defaultRegisterFormUserName" class="form-control"
                                                name="username" placeholder="Username">
                                        </div>
                                    </div>

                                    <!-- E-mail -->
                                    <input type="text" id="defaultRegisterFormEmail" class="form-control mb-4"
                                        name="email" placeholder="E-mail">

                                    <!-- Password -->
                                    <input type="password" id="defaultRegisterFormPassword" class="form-control"
                                        name="pwd" placeholder="Password"
                                        aria-describedby="defaultRegisterFormPasswordHelpBlock">
                                    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                                        At least 8 characters and 1 digit
                                    </small>

                                    <!-- Newsletter -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input"
                                            id="defaultRegisterFormNewsletter" name="subscribe" value=1>
                                        <label class="custom-control-label"
                                            for="defaultRegisterFormNewsletter">Subscribe to our newsletter</label>
                                    </div>

                                    <!-- Sign up button -->
                                    <button class="btn btn-info my-4 btn-block" type="submit" name="signup-submit">Sign
                                        up</button>

                                    <!-- Login -->
                                    <p>Already have an account?
                                        <input class="formBtn" id="clickToLogin" type="button" value="Login">
                                    </p>

                                </form>
                                <!-- Default form register -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Register Modal -->