<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Custom
 */
get_header();
?>

<!-- AFTER-HEADER  -->
<section class="after-header">
    <img src="<?php the_field('picture1'); ?>" alt="" class="imgpos img1">
    <div class="container">
        <img src="<?php the_field('circle'); ?>" alt="" class="form-radialbg">
        <div class="flex">
            <!-- 1 -->
            <div class="left">
				<p class="cheaper"><?php the_field('find_cheaper'); ?></p>
                <div class="free">
                    <p class="delivery-img"><?php the_field('free_out'); ?></p>
                </div>
                <h1><?php the_field('main_title'); ?></h1>
                <h2><?php the_field('second_title'); ?></h2>
				<p class="difference">Найдете дешевле вернем разницу.</p>
                <div class="flex">
                    <div class="left-item">
                        <div class="item">
                            <div>
                                <div class="img"><img src="<?php echo get_template_directory_uri (); ?>/img/left1.png" alt=""></div>
                                <p><?php the_field('one_li'); ?></p>
                            </div>
                        </div>
                        <div class="item">
                            <div>
                                <div class="img"><img src="<?php echo get_template_directory_uri (); ?>/img/left2.png" alt=""></div>
                                <p><?php the_field('two_li'); ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="right-item">
                        <div class="item">
                            <div>
                                <div class="img"><img src="<?php echo get_template_directory_uri (); ?>/img/right1.png" alt=""></div>
                                <p><?php the_field('three_li'); ?></p>
                            </div>
                        </div>
                        <div class="item">
                            <div>
                                <div class="img"><img src="<?php echo get_template_directory_uri (); ?>/img/right2.png" alt=""></div>
                                <p><?php the_field('four_li'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="flex header-button">
                        <a href="#test-popup" class="hinge1 button">Узнать стоимость</a>
                        <div onclick="Marquiz.showModal('5fa96854fa805e0044f0573f')">
                            <div class="img"><img src="<?php echo get_template_directory_uri (); ?>/img/quiz.png" alt=""></div>
                            <p><?php the_field('five_li'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form">
				<?php the_field('form'); ?>
            </div>
        </div>
    </div>
</section>
<!-- AFTER-HEADER  -->

<!-- OUR-SERVICES -->
<section class="our-services" id="services">
    <img src="<?php echo get_template_directory_uri (); ?>/img/img2.png" alt="" class="mouse-parallax-bg imgpos img2">
    <img src="<?php echo get_template_directory_uri (); ?>/img/img3.png" alt="" class="mouse-parallax-bg1 imgpos img3">
    <img src="<?php echo get_template_directory_uri (); ?>/img/spot1.png" alt="" class="blot blot1">
    <img src="<?php echo get_template_directory_uri (); ?>/img/spot2.png" alt="" class="blot blot2">
    <img src="<?php echo get_template_directory_uri (); ?>/img/spot3.png" alt="" class="blot blot3">
    <img src="<?php echo get_template_directory_uri (); ?>/img/spot4.png" alt="" class="blot blot4">
    <div class="container">
        <h3><?php the_field('services_title'); ?></h3>
        <div class="flex">
            <!-- 1 -->	
			<?php if( have_rows('our_services_box') ): while ( have_rows('our_services_box') ) : the_row();	?>
					<div class="item">
					  <div class="img">
						 <img src="<?php the_sub_field('our_services_box_img'); ?>" alt="">
					  </div>
						<h4><?php the_sub_field('our_services_box_title'); ?></h4>
						<p><?php the_sub_field('our_services_box_text'); ?></p>
				   </div>
			<?php endwhile; endif; ?>
        </div>
<!--         <a href="#test-popup" class="hinge1 button">Узнать стоимость</a> -->
    </div>
</section>
<!-- OUR-SERVICES -->

<!-- WHY -->
<section class="why">
    <img src="<?php echo get_template_directory_uri (); ?>/img/img2.png" alt="" class="mouse-parallax-bg2 imgpos img4">
    <div class="container">
        <h3><?php the_field('why_title'); ?></h3>
        <div class="flex">
            <!-- 1 -->
			<?php if( have_rows('why_box') ): while ( have_rows('why_box') ) : the_row();	?>
            <div class="item">
                <div class="img">
                    <img src="<?php the_sub_field('why_box_img'); ?>" alt="">
                </div>
                <h5><?php the_sub_field('why_box_title'); ?></h5>
                <p><?php the_sub_field('why_box_text'); ?></p>
            </div>
			<?php endwhile; endif; ?>			        
        </div>
        <a href="#test-popup" class="hinge1 button">Сделать заказ</a>
    </div>
</section>
<!-- WHY -->

<!-- ORDER -->
<section class="order">
    <img src="<?php echo get_template_directory_uri (); ?>/img/spot5.png" alt="" class="blot blot5">
    <img src="<?php echo get_template_directory_uri (); ?>/img/spot6.png" alt="" class="blot blot6">
    <div class="container">
        <h3>Порядок оказания услуг</h3>
        <div class="flex">	
		<?php $my_count=0;
			if( have_rows('order_box') ): while ( have_rows('order_box') ) : the_row(); $my_count++; ?>
            <div class="item">
                <div class="img">
                    <img src="<?php the_sub_field('order_box_img'); ?>" alt="">
                </div>
                <p><?php the_sub_field('order_box_text'); ?></p>
                <img src="<?php echo get_template_directory_uri (); ?>/img/arrow-dotted<?php echo $my_count; ?>.png" alt="" class="arrow-dotted arrow-dotted<?php echo $my_count; ?>">
            </div>
		<?php endwhile; endif; ?>
        </div>
        <div class="flex button-block">
            <a href="#test-popup" class="hinge1 button">Сделать заказ</a>
            <a href="#test-popup" class="button" onclick="Marquiz.showModal('5fa96854fa805e0044f0573f')">Узнать стоимость</a>
        </div>
    </div>
</section>
<!-- ORDER -->

<!-- BRANDS -->
<section class="brands" id="brands">
    <div class="container">
        <h3><?php the_field('brands_title'); ?></h3>
        <p><?php the_field('brands_subtitle'); ?></p>
        <div class="flex">
            <!-- 1 -->
			<?php if( have_rows('brands_box') ): while ( have_rows('brands_box') ) : the_row();	?>
			   <div class="item">
                <div class="img">
                    <img src="<?php the_sub_field('brands_box_img'); ?>" alt="">
                </div>
               </div>
			<?php endwhile; endif; ?>
        </div>
    </div>
</section>
<!-- BRANDS -->

<!-- FORM-BLOCK -->
<section class="form-block">
    <img src="<?php echo get_template_directory_uri (); ?>/img/spot7.png" alt="" class="blot blot7">
    <img src="<?php echo get_template_directory_uri (); ?>/img/spot8.png" alt="" class="blot blot8">
    <img src="<?php echo get_template_directory_uri (); ?>/img/spot9.png" alt="" class="blot blot9">
    <img src="<?php echo get_template_directory_uri (); ?>/img/spot10.png" alt="" class="blot blot10">
    <div class="container">
        <img src="<?php echo get_template_directory_uri (); ?>/img/img5.png" alt="" class="imgpos img5">
		<?php the_field('form-block1'); ?>
    </div>
</section>
<!-- FORM-BLOCK -->

<!-- COST -->
<section class="cost" id="price">
    <img src="<?php echo get_template_directory_uri (); ?>/img/img3.png" alt="" class="mouse-parallax-bg4 imgpos img6">
    <div class="container">
        <h3><?php the_field('cost_title'); ?></h3>
        <h6><?php the_field('cost_subtitle'); ?></h6>
        <div class="flex">
<!-- 1 -->	
<?php		
$card1 = get_field('card1');	

if( $card1 ): ?>
			<div class="item">
				<h4><?php echo $card1['name']; ?></h4>
				<div class="text">
					<p><?php echo $card1['text1']; ?></p>
					<p class="green"><?php echo $card1['text2']; ?></p>
				</div>
				<div class="img">
					<img src="<?php echo $card1['img']; ?>" alt="">
				</div>
				<p class="price-text"><?php echo $card1['text3']; ?></p>
				<p class="price"><?php echo $card1['price']; ?></p>
				<a href="#test-popup" class="hinge1 cost-button button">Узнать стоимость</a>
			</div>
<?php endif; ?>			
<!-- 1 -->
<?php
		
$card2 = get_field('card2');	

if( $card2 ): ?>
			<div class="item">
				<h4><?php echo $card2['name']; ?></h4>
				<div class="text">
					<p><?php echo $card2['text1']; ?></p>
					<p class="green"><?php echo $card2['text2']; ?></p>
				</div>
				<div class="img">
					<img src="<?php echo $card2['img']; ?>" alt="">
				</div>
				<p class="price-text"><?php echo $card2['text3']; ?></p>
				<p class="price"><?php echo $card2['price']; ?></p>
				<a href="#test-popup" class="hinge1 cost-button button">Узнать стоимость</a>
			</div>
<?php endif; ?>	
<!-- 1 -->
<?php
		
$card3 = get_field('card3');	

if( $card3 ): ?>
			<div class="item">
				<h4><?php echo $card3['name']; ?></h4>
				<div class="text">
					<p><?php echo $card3['text1']; ?></p>
					<p class="red"><?php echo $card3['text2']; ?></p>
				</div>
				<div class="img">
					<img src="<?php echo $card3['img']; ?>" alt="">
					<p><?php echo $card3['bonus']; ?></p>
				</div>
				<p class="price-text"><?php echo $card3['text3']; ?></p>
				<p class="price"><?php echo $card3['price']; ?></p>
				<a href="#test-popup" class="hinge1 cost-button button">Узнать стоимость</a>
			</div>
<?php endif; ?>
<!-- 1 -->
<?php
		
$card4 = get_field('card4');	

if( $card4 ): ?>
			<div class="item">
				<h4><?php echo $card4['name']; ?></h4>
				<div class="text">
					<p><?php echo $card4['text1']; ?></p>
					<p class="green"><?php echo $card4['text2']; ?></p>
				</div>
				<div class="img">
					<img src="<?php echo $card4['img']; ?>" alt="">
				</div>
				<p class="price-text"><?php echo $card4['text3']; ?></p>
				<p class="price"><?php echo $card4['price']; ?></p>
				<a href="#test-popup" class="hinge1 cost-button button">Узнать стоимость</a>
			</div>
<?php endif; ?>			
<!-- 1 -->
<?php
		
$card5 = get_field('card5');	

if( $card5 ): ?>
			<div class="item">
				<h4><?php echo $card5['name']; ?></h4>
				<div class="text">
					<p><?php echo $card5['text1']; ?></p>
					<p class="green"><?php echo $card5['text2']; ?></p>
				</div>
				<div class="img">
					<img src="<?php echo $card5['img']; ?>" alt="">
				</div>
				<p class="price"><?php echo $card5['price']; ?></p>
				<a href="#test-popup" class="hinge1 cost-button button">Узнать стоимость</a>
			</div>
<?php endif; ?>		
<!-- 1 -->
<?php
		
$card6 = get_field('card6');	

if( $card6 ): ?>
			<div class="item">
				<h4><?php echo $card6['name']; ?></h4>
				<div class="text">
					<p><?php echo $card6['text1']; ?></p>
					<p class="green"><?php echo $card6['text2']; ?></p>
				</div>
				<div class="img">
					<img src="<?php echo $card6['img']; ?>" alt="">
				</div>
				<p class="price"><?php echo $card6['price']; ?></p>
				<a href="#test-popup" class="hinge1 cost-button button">Узнать стоимость</a>
			</div>
<?php endif; ?>	
        </div>
    </div>
</section>
<!-- COST -->

<!-- REVIEWS -->
<section class="reviews" id="reviews">
    <img src="<?php echo get_template_directory_uri (); ?>/img/spot11.png" alt="" class="blot blot11">
    <img src="<?php echo get_template_directory_uri (); ?>/img/spot12.png" alt="" class="blot blot12">
    <div class="container">
        <h3><?php the_field('reviews_title'); ?></h3>
        <div class="slider-reviews">
            <!-- 1 -->
			<?php if( have_rows('reviews_slider') ): while ( have_rows('reviews_slider') ) : the_row();	?>

			<div class="slide-wrap">
				<div class="slide">
					<div class="slide-head">
						<div class="img">
							<p><?php the_sub_field('reviews_img'); ?></p>
						</div>
						<div class="text">
							<p><?php the_sub_field('reviews_name'); ?></p>
							<p><?php the_sub_field('reviews_date'); ?></p>
						</div>
					</div>
					<p><?php the_sub_field('reviews_text'); ?></p>
				</div>
			</div>
			<?php endwhile; endif; ?>
        </div>
<!--         <a href="#test-popup" class="hinge1 button">Заказать</a> -->
    </div>
</section>
<!-- REVIEWS -->

<!-- ABOUT -->
<section class="about" id="about">
    <div class="container">
        <h3><?php the_field('about_title'); ?></h3>
        <div class="flex">
            <div class="img">
                <img src="<?php the_field('about_img'); ?>" alt="">
            </div>
            <div class="text">
				<p><?php the_field('about_text'); ?></p>
                <a href="#test-popup" class="hinge1 button">Сделать заказ</a>
            </div>
        </div>
    </div>
</section>
<!-- ABOUT -->

<!-- FORM-BLOCK -->
<section class="form-block form-block2">
    <img src="<?php echo get_template_directory_uri (); ?>/img/spot13.png" alt="" class="blot blot13">
    <img src="<?php echo get_template_directory_uri (); ?>/img/spot14.png" alt="" class="blot blot14">
    <img src="<?php echo get_template_directory_uri (); ?>/img/img7.png" alt="" class="mouse-parallax-bg5 imgpos img7">
    <div class="container">
		<?php the_field('form-block2'); ?>
    </div>
</section>
<!-- FORM-BLOCK -->

<!-- MAP -->
<section class="map">
	<div class="map-bg">
    <div class="container">
        <h3>Мы на карте</h3>
        <div class="map-block">
            <script async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A6f619d1e11d0614d64a51a636e7d42953b2822c26ae573567e546e69c1a220b0&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
    </div>
	</div>
</section>
<!-- MAP -->
<?php
get_footer();
?>