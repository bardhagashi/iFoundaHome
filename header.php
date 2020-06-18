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