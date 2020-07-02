<?php get_header();?>

<!-- Back to top button -->
<a class="buttonToTop"></a>

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
                    <span class="priceInDollars"> $540,000 </span>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/secondpic.jpg"
                    alt="Second slide">
                <div class="second-card">
                    <h3> <a href="#" class="title">
                            Villa on Grand Avenue </a></h3>
                    <div class="price">For Rent</div>
                    <span class="priceInDollars"> $4,750 Monthly </span>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/thirdpic.jpg"
                    alt="Third slide">
                <div class="third-card">
                    <h3> <a href="#" class="title">
                            Home in Coral Gables </a></h3>
                    <div class="price">For Sale</div>
                    <span class="priceInDollars"> $850,000 </span>
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
                ​<textarea id="message" name="message" rows="4" placeholder="Tell us about desired property"></textarea>
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
            <span class="phone_icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                    <path
                        d="M18.3 15.3c-0.4 0-0.6 0.2-0.7 0.3l-1.5 1.5c0 0-0.1 0-0.2 0 -0.8 0-2.6-0.9-4.3-2.6 -2.3-2.3-2.8-4.3-2.6-4.5l1.5-1.5c1-1-0.8-3-1.9-4.1C8.1 3.8 6.3 2.1 5.2 2.1c-0.4 0-0.6 0.2-0.7 0.3l-3 3c-0.9 0.9-0.6 2.6 0.9 5.1 1.3 2.2 3.4 4.7 5.8 7.2C11.9 21.3 16.7 25 19.3 25h0c0.7 0 1.1-0.3 1.3-0.5l3-3c1-1-0.8-3-1.9-4.1C21.2 16.9 19.4 15.3 18.3 15.3zM19.5 23.4C19.5 23.5 19.4 23.5 19.3 23.5c-1.5 0-5.5-2.4-9.9-6.8 -2.4-2.4-4.4-4.8-5.6-6.9C2.3 7.5 2.4 6.6 2.6 6.5l2.8-2.8c0.4 0.2 1.2 0.7 2.2 1.7 1 1 1.5 1.8 1.7 2.2L7.9 8.9c-1.4 1.4 0.4 4.4 2.6 6.6 1.9 1.9 4 3.1 5.3 3.1 0.7 0 1.1-0.3 1.3-0.5l1.3-1.3c0.4 0.2 1.2 0.7 2.2 1.7 1 1 1.5 1.8 1.7 2.2L19.5 23.4z"
                        class="a"></path>
                    <path
                        d="M22.5 3.5C20.8 1.9 18.7 1 16.3 1c0 0 0 0 0 0 -0.4 0-0.7 0.3-0.7 0.8s0.3 0.8 0.8 0.8c0 0 0 0 0 0 1.9 0 3.7 0.7 5.1 2.1C22.8 5.9 23.5 7.7 23.5 9.7c0 0.4 0.3 0.8 0.8 0.8s0.8-0.3 0.8-0.7C25 7.3 24.1 5.2 22.5 3.5z"
                        class="a"></path>
                    <path
                        d="M15.4 5.5c0 0 0 0 0 0 1.4 0 2.7 0.5 3.7 1.5 1 1 1.5 2.3 1.5 3.7 0 0.4 0.3 0.8 0.8 0.8s0.8-0.3 0.8-0.7c0-1.8-0.7-3.5-2-4.7 -1.3-1.3-2.9-2-4.7-2 0 0 0 0 0 0 -0.4 0-0.7 0.3-0.7 0.8S14.9 5.5 15.4 5.5z"
                        class="a"></path>
                    <path
                        d="M14.4 8.4c0 0 0 0 0 0 0.9 0 1.7 0.3 2.3 0.9 0.6 0.6 0.9 1.4 0.9 2.3 0 0.4 0.3 0.8 0.8 0.8s0.8-0.3 0.8-0.7c0-1.3-0.5-2.4-1.4-3.3C16.8 7.4 15.6 6.9 14.4 6.9c0 0 0 0 0 0 -0.4 0-0.7 0.3-0.7 0.8S14 8.4 14.4 8.4z"
                        class="a"></path>
                </svg>
            </span>
        </div>
    </div>
</div>

<?php get_footer();?>