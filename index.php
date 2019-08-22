<?php
get_header();     //подключит headerphp
?>

<div class="slide-wrapper">
    <div class="container relative">

        <!-- Social Icons -->
        <div class="header-social-wrapper">
            <div class="social social--header"> 
                <a href="#" class="social__item">
                    <img src="<?php echo get_template_directory_uri()?>/img/socials/social-tumblr.svg" alt="">
                </a>
                <a href="#" class="social__item">
                    <img src="<?php echo get_template_directory_uri()?>/img/socials/social-twitter.svg" alt="">
                </a>
                <a href="#" class="social__item">
                    <img src="<?php echo get_template_directory_uri()?>/img/socials/social-vimeo.svg" alt="">
                </a>
            </div>
        </div>
</div>

    <div id="headerSlider" class="owl-carousel">
         <div class="container slide-item">
                        <div class="slide-item__desc">
                            <h2 class="slide-item__heading">
                                <span>Your</span>
                                Beautiful Escape
                            </h2>
                            <div class="slide-item__text">
            
                                <p>
                                    One of the greatest things about the sport of surfing is that you need only three things:
                                    your body,
                                    a surfboard, and a wave.
            
                                </p>
                            </div>
            
                        </div>
                        <div class="slide-item__img slide-item__img--bg-1">
                        </div>
                    </div>
         <div class="container slide-item">
                        <div class="slide-item__desc">
                            <h2 class="slide-item__heading">
                                <span>Your</span>
                                Beautiful Escape
                            </h2>
                            <div class="slide-item__text">
            
                                <p>
                                    One of the greatest things about the sport of surfing is that you need only three things:
                                    your body,
                                    a surfboard, and a wave.
            
                                </p>
                            </div>
            
                        </div>
                        <div class="slide-item__img slide-item__img--bg-1">
                        </div>
                    </div>
         <div class="container slide-item">
                        <div class="slide-item__desc">
                            <h2 class="slide-item__heading">
                                <span>Your</span>
                                Beautiful Escape
                            </h2>
                            <div class="slide-item__text">
            
                                <p>
                                    One of the greatest things about the sport of surfing is that you need only three things:
                                    your body,
                                    a surfboard, and a wave.
            
                                </p>
                            </div>
            
                        </div>
                        <div class="slide-item__img slide-item__img--bg-1">
                        </div>
                    </div>
         <div class="container slide-item">
                        <div class="slide-item__desc">
                            <h2 class="slide-item__heading">
                                <span>Your</span>
                                Beautiful Escape
                            </h2>
                            <div class="slide-item__text">
            
                                <p>
                                    One of the greatest things about the sport of surfing is that you need only three things:
                                    your body,
                                    a surfboard, and a wave.
            
                                </p>
                            </div>
            
                        </div>
                        <div class="slide-item__img slide-item__img--bg-1">
                        </div>
                    </div>
         <div class="container slide-item">
                        <div class="slide-item__desc">
                            <h2 class="slide-item__heading">
                                <span>Your</span>
                                Beautiful Escape
                            </h2>
                            <div class="slide-item__text">
            
                                <p>
                                    One of the greatest things about the sport of surfing is that you need only three things:
                                    your body,
                                    a surfboard, and a wave.
            
                                </p>
                            </div>
            
                        </div>
                        <div class="slide-item__img slide-item__img--bg-1">
                        </div>
                    </div>
    </div>

    <div class="container relative">

        <!-- Slide controls -->
        <div class="slide-controls">
            <a id="headerSliderLeft" class="slide-controls__left" href="#">
                <img src="<?php echo get_template_directory_uri()?>/img/controls/header-slider-left.svg" alt="Left">
            </a>
            <div class="slide-controls-number">
                <span class="slide-controls-number__active">-</span>
                <span class="slide-controls-number__from">/</span>
                <span class="slide-controls-number__total">-</span>


            </div>


            <a id="headerSliderRight" class="slide-controls__right" href="#">
                <img src="<?php echo get_template_directory_uri()?>/img/controls/header-slider-right.svg" alt="Right">
            </a>
        </div>
    </div>
</div>
	<section class="quote">
	<div class="quote-wrapper">

<div class="quote__text">
		Surfing is the most blissful experience you can have
		on this planet, a taste of heaven.
</div>

<div class="quote__author">John McCarthy</div>
</div>
</section>
	<section class="club-description">
    <div class="container">
        <div class="club-description-wrapper">
<div class="club-description__img">
<img src="<?php echo get_template_directory_uri()?>/img/img/img-2.jpg" alt="Picture">
</div>

<div class="club-description-video">
       <img src="<?php echo get_template_directory_uri()?>/img/img/img-3.jpg" alt="Video">
       <div class="club-description-video__control">
           <img src="<?php echo get_template_directory_uri()?>/img/controls/control-play.svg" alt="Play">

       </div>


</div>
<div class="club-description__text">
<p>
       By better understanding the various aspects of surfing, you will improve faster and have more fun in the water.
</p>

</div>
<div class="club-description__link">
   <a href="#" class="read-more-link">
           Read More
   </a>


            </div>
        </div>
    </div>
</section>





	<section class="shop">
    <!-- Title -->
    <div class="container">

        <h2 class="title">
            <span class="subtitle">Shop</span>
            Surfboards
        </h2>
    </div>


    <!-- Slider -->
    <div class="container shop-slider-wrapper">
        <div class="shop-slider-special-holder">
            <div id="shopSlider" class="owl-carousel">

            <?php
    global $post;
    $args = array(
        'post_type' => 'boards',
        'publish' => true
    );
    $slider_boards = get_posts($args);
    foreach ($slider_boards as $post) {
        include ( get_template_directory() . '/content_boardSlider.php');

    }
    wp_reset_postdata();
?>


   
<!-- 
     <div class="board">
        <div class="board__img-holder">
            <img class="board__img" src="<?php echo get_template_directory_uri()?>/img/boards/board-2.png" alt="Surfing board">
        </div>
        <div class="board-desc">
            <div class="board__cat">Surfboards</div>
            <div class="board__title">Emery NEM XF</div>
            <div class="board-buy">
                <div class="board-buy__price">$950</div>
                <div class="board-buy__link">Buy</div>
            </div>
        </div>
    </div>

    <div class="board">
        <div class="board__img-holder">
            <img class="board__img" src="<?php echo get_template_directory_uri()?>/img/boards/board-3.png" alt="Surfing board">
        </div>
        <div class="board-desc">
            <div class="board__cat">Funboards</div>
            <div class="board__title">Agency GROM</div>
            <div class="board-buy">
                <div class="board-buy__price">$670</div>
                <div class="board-buy__link">Buy</div>
            </div>
        </div>
    </div> -->


            </div>
        </div>
    </div>


    <!-- Controls -->
    <div class="container">
        <div class="shopSlider-controls">
            <div id="shopSliderLeft" class="shopSlider-arrow shopSlider-arrow--left">
                <img src="<?php echo get_template_directory_uri()?>/img/controls/boards-left.svg" alt="Prev">
            </div>

        <div id="shopSliderRight" class="shopSlider-arrow shopSlider-arrow--right">
            <img src="<?php echo get_template_directory_uri()?>/img/controls/boards-right.svg" alt="Next">
        </div>
    </div>
    </div>



    <!-- Link -->
    <div class="container">
        <div class="shop-link-wrapper">
            <a href="#" class="read-more-link">Show All</a>
        </div>
    </div>

</section>
	<section class="container">
    <article class="article article--even">
        <div class="article__desc">
            <h2 class="article__title" data-number="01">Surf Training</h2>
            <div class="article__text">
                <p> By better understanding the various aspects
                    of surfing, By better understanding the various
                    aspects of surfing, you will improve faster
                    and have more fun in the water.</p>
            </div>
            <a href="#" class="read-more-link">Read More</a>
        </div>

        <div class="article__preview">
            <img src="<?php echo get_template_directory_uri()?>/img/img/img-4.jpg" alt="Surf Training">
            <div class="article__preview-desc">
                 <div class="article__preview-desc-content">Surf&nbsp;Camps</div>
             </div>
        </div>
    </article>
</section>
	<section class="container">
    <article class="article article--odd">
        <div class="article__desc">
            <h2 class="article__title" data-number="02">Point Break</h2>
            <div class="article__text">
                <p> By better understanding the various
                    aspects of By better understanding the
                    various aspects of surfing,
                    By better understanding the various
                    aspects of surfing, you will improve
                    faster and have more fun in the water.</p>
            </div>
            <a href="#" class="read-more-link">Read More</a>
        </div>

        <div class="article__preview">
            <img src="<?php echo get_template_directory_uri()?>/img/img/img-5.jpg" alt="Point Break">
            <div class="article__preview-desc">
                 <div class="article__preview-desc-content">Surf&nbsp;Camps</div>
             </div>
        </div>
    </article>
</section>
	<section class="subscribe-wrapper">
    <div class="subscribe">
        <h2 class="title">Join the Club</h2>
        <div class="title-desc">
                By better understanding the various aspects of surfing, you will improve faster 
                and have more fun in the water.
        </div>
        <form action="" class="subscribe-form">
<input type="text" placeholder="Your E-mail" class="subscribe__input">
<input type="submit" class="subscribe__submit">
        </form>
    </div>
</section>
	<section class="camp">
    <div class="camp__img" style="background-image:url(<?php echo get_template_directory_uri()?>/img/img/img-6.jpg);"></div>
    <div class="container flex-end">
        <div class="camp__desc">
            <div class="camp__label">Our Camp</div>
            <div class="camp__address">
                    CA 91932, USA<br>
                    Imperial Beach<br>
                    560 Silver Strand Blvd
                
            </div>
            <a href="#" class="read-more-link">Get in Touch</a>
        </div>
    </div>
</section>



<?php
get_footer();        // подключит footer
