<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">

        <!-- Scripts -->
        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

        <link rel="stylesheet" href="<?php echo e(asset('zendo_assets/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('zendo_assets/css/animate.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('zendo_assets/css/font-awesome.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('zendo_assets/css/nivo-lightbox.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('zendo_assets/css/nivo_themes/default/default.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('zendo_assets/css/style.css')); ?>">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
    </head>
    <body>

        <!-- preloader section -->
        <section class="preloader">
            <div class="sk-spinner sk-spinner-pulse"></div>
        </section>

        <!-- navigation section -->
        <section class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                    </button>
                    <a href="/" class="navbar-brand">Foodelivery</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/" class="smoothScroll">HOME</a></li>
                        <li><a href="/categories" class="smoothScroll">CATEGORIES</a></li>
                        <li><a href="/menus" class="smoothScroll">SPECIAL MENU</a></li>
                        <li><a href="/reservations/step-one" class="smoothScroll">MAKE RESERVATION</a></li>
                        <li><a href="/contact" class="smoothScroll">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <div class="font-sans text-gray-900 antialiased min-h-screen">
            <?php echo e($slot); ?>

        </div>

        <footer class="parallax-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
                        <h2 class="heading">Contact Info.</h2>
                        <div class="ph">
                            <p><i class="fa fa-phone"></i> Phone</p>
                            <h4>090-080-0760</h4>
                        </div>
                        <div class="address">
                            <p><i class="fa fa-map-marker"></i> Our Location</p>
                            <h4>120 Duis aute irure, California, USA</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
                        <h2 class="heading">Open Hours</h2>
                            <p>Sunday <span>10:30 AM - 10:00 PM</span></p>
                            <p>Mon-Fri <span>9:00 AM - 8:00 PM</span></p>
                            <p>Saturday <span>11:30 AM - 10:00 PM</span></p>
                    </div>
                    <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
                        <h2 class="heading">Follow Us</h2>
                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-facebook wow bounceIn" data-wow-delay="0.3s"></a></li>
                            <li><a href="#" class="fa fa-twitter wow bounceIn" data-wow-delay="0.6s"></a></li>
                            <li><a href="#" class="fa fa-behance wow bounceIn" data-wow-delay="0.9s"></a></li>
                            <li><a href="#" class="fa fa-dribbble wow bounceIn" data-wow-delay="0.9s"></a></li>
                            <li><a href="#" class="fa fa-github wow bounceIn" data-wow-delay="0.9s"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT JS FILES -->
        <script src="<?php echo e(asset('zendo_assets/js/jquery.js')); ?>"></script>
        <script src="<?php echo e(asset('zendo_assets/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('zendo_assets/js/jquery.parallax.js')); ?>"></script>
        <script src="<?php echo e(asset('zendo_assets/js/smoothscroll.js')); ?>"></script>
        <script src="<?php echo e(asset('zendo_assets/js/nivo-lightbox.min.js')); ?>"></script>
        <script src="<?php echo e(asset('zendo_assets/js/wow.min.js')); ?>"></script>
        <script src="<?php echo e(asset('zendo_assets/js/custom.js')); ?>"></script>
    </body>
</html>
<?php /**PATH /Users/apple/Desktop/Final/resources/views/layouts/guest.blade.php ENDPATH**/ ?>