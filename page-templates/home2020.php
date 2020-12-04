<?php
/**
 * Template Name: Home Page 2020
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
?>

<?php
$container   = get_theme_mod( 'understrap_container_type' );
?>

<div id="content" class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">			
    <section class="intro row lazy">
      <div class="col-md-4">
        <h3>Brewed in Edgerton, AB</h3>
        <h4>Population: 410</h4>
      </div>
      <div class="col-md-4">
        <h3>9.75 years brewing</h3>
        <h4>Still kickin'</h4>
      </div>
      <div class="col-md-4">
        <h3>Award Winning Beers</h3>
        <h4>23 and counting!</h4>
      </div>
    </section>
    <section class="promo row no-gutters lazy">
      <div class="col-md-6 justify-content-end">
        <img width="447px" src="app/themes/ribstonecreek/img/oldmanwinter.jpg" alt="Old Man Winter" />
      </div>
      <div class="col-md-6">
        <h2 style="color: rgba(31, 66, 89, 100);">Old Man Winter Porter</h2>
        <span style="color: #5E9CB3;" class="meta">$15 / 6 Pack</span>
        <p style="color: #133349;">Our Porter offers a pronounced chocolate & roast coffee notes, balanced by a light caramel sweetness. With a fruity & roasted aroma on the nose, this well-bodied brew is the perfect companion for a cold winter night.</p>
        <a href="/store" class="ghost" style="border-color: #599AB1; color: #599AB1;">Order Online</a>
      </div>
    </section>
    <section class="features row lazy">
      <div class="col-md-6">
        <a href="">
          <img src="app/themes/ribstonecreek/img/brewery.jpg" alt="" />
          <div>
            <h3>The Brewery</h3>
            <h4>History, tours, directions, etc.</h4>
          </div>
        </a>
      </div>
      <div class="col-md-6">
        <a href="">
          <img src="app/themes/ribstonecreek/img/lager.jpg" alt="" />
          <div>
            <h3>General Store</h3>
            <h4>Order Ribstone beer online!</h4>
          </div>
        </a>
      </div>
    </section>
    <section class="visit row lazy">
      <h2 class="col-md-12">Come Visit!</h2>
      <div class="col-md-7 map">
        <img width="630px" src="app/themes/ribstonecreek/img/map.png" alt="" />
      </div>
      <div class="col-md-5">
        <p><strong>We’re pretty friendly over here</strong></p>
        <p>We’re a few hours from Edmonton, a bit further from Calgary, kind of the same from Medicine Hat, and a decent roadtrip from Lethbridge. </p>
        <p>Come out and see the beauty of Eastern Alberta, take a tour, have a bite to eat and some pints in the taproom.</p>
        <p>You can usually find some taproom exclusive beers, along with merch and glassware you can’t find anywhere else.</p>
        <br />
        <p><strong>Questions? Send us a message:</strong></p>
        <a href="" class="ghost">Email</a>
        <a href="" class="ghost">f</a>
        <a href="" class="ghost">t</a>
        <a href="" class="ghost">i</a>    
      </div>
    </section>
    <section class="stories row no-gutters justify-content-center lazy">
      <div class="col-sm-6">
        <h2>Stories from <br>Edgerton</h2>
        <h4>Our Small Town Living Community</h4>
      </div>
      <div class="row no-gutters">
        <div class="col-sm-3 tall">
          <a href="" class="story" style="background-image: url(app/themes/ribstonecreek/img/stories/pare.jpg);">
            <div class="title">
              <h3>Paré Family</h3>
              <h4>Stories from Edgerton</h4>
            </div>
          </a>
        </div>
        <div class="col-sm-3">
          <a href="" class="story" style="background-image: url(app/themes/ribstonecreek/img/stories/jim.jpg);">
            <div class="title">
              <h3>Jim</h3>
              <h4>A day in the life of small town farming</h4>
            </div>
          </a>
        </div>
        <div class="col-sm-3">
          <a href="" class="story" style="background-image: url(app/themes/ribstonecreek/img/stories/lenny.jpg);">
            <div class="title">
              <h3>Lenny</h3>
              <h4>Local hardware store is a staple in any small town.</h4>
            </div>
          </a>
        </div>
        <div class="col-sm-3 tall">
          <a href="" class="story" style="background-image: url(app/themes/ribstonecreek/img/stories/wanda.jpg);">
            <div class="title">
              <h3>Wanda</h3>
              <h4>Owner of the Oasis Hotel</h4>
            </div>
          </a>
        </div>
      </div>
    </section>
	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
