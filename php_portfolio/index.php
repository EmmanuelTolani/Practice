<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Ethos</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <?php require("includes/head.php"); ?>
</head>

<body id="top" class="home__page">
      <!-- preloader
    ================================================== -->

   <?php require("includes/preloader.php"); ?>

    <!-- header
    ================================================== -->
     <?php require("includes/header.php"); ?>

    <!-- hero -HomePage
    ================================================== -->
    <section id="hero" class="s-hero target-section" data-parallax="scroll" data-image-src="images/hero-bg-3000.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="row hero-content">

            <div class="column large-full">

                <h1>
                Hello, I'm John Doe, <br>
                a frontend developer <br>
                & designer currently <br>
                based somewhere.
                </h1>

                <ul class="hero-social">
                    <li>
                        <a href="#0" title="">Twitter</a>
                    </li>
                    <li>
                        <a href="#0" title="">Behance</a>
                    </li>
                    <li>
                        <a href="#0" title="">Dribbble</a>
                    </li>
                </ul> <!-- end hero-social -->

            </div> 

        </div> <!-- end hero-content -->

        <div class="hero-scroll">
            <a href="#about" class="scroll-link smoothscroll">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 24l-8-9h6v-15h4v15h6z"/></svg>
            </a>
        </div> <!-- end hero-scroll -->

    </section> <!-- end s-hero -->


    <!-- about
    ================================================== --><!-- end s-about -->


    <!-- services
    ================================================== -->
     <!-- end s-services -->


    <!-- portfolio
    ================================================== -->
    <!-- end portfolio -->


    <!-- testimonials
    ================================================== -->
    <!-- end s-testimonials -->


    <!-- footer
    ================================================== -->
    <!-- end s-footer -->


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


    <!-- Java Script
    ================================================== -->
  <?php require('includes/scripts.php'); ?>

</body>