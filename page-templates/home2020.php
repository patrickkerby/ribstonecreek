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

$now = time(); // or your date as well
$your_date = strtotime("2011-10-24");
$datediff = $now - $your_date;

$brewing = round($datediff / (60 * 60 * 24)/364.75, 4);

?>

<div id="content" class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">			
    <section class="intro row lazy">
      <div class="col-md-4">
        <h3>Started in Edgerton, AB</h3>
        <h4>Population: 410</h4>
      </div>
      <div class="col-md-4">
        <h3>Moved to Lloydminster in 2023</h3>
        <h4>Doing what we love!</h4>
      </div>
      <div class="col-md-4">
        <h3>Award Winning Beers</h3>
        <h4>23 and counting!</h4>
      </div>
    </section>
    <section class="promo row no-gutters lazy">      

      <div id="carouselExampleIndicators" class="carousel slide w-100" data-ride="carousel" data-interval="4000" >
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <!-- Carousel slide 1 -->
          <div class="carousel-item active">
            <div class="row align-items-center justify-content-center tallboy">
              <div class="col-sm-5">
                <img src="app/themes/ribstonecreek/img/abbeylane.png" alt="Abbey Lane" />
              </div>
              <div class="beer_content one col-10 col-sm-6">
                <style>
                  .beer_content.one a {
                    border-color: #394C60;
                    color: #394C60;
                  }
                  .beer_content.one a:hover {
                    border-color: #394C60;
                    background: #394C60;
                    color: #fff;
                  }
                  .beer_content.one h2 {
                    color: #0B2134;
                  }
                  .beer_content.one meta {
                    color: #394C60;
                  }
                </style>
                <h2>Abbey Lane</h2>
                <p style="color: #133349;">A classic British beer. Even with low alcohol content, our Abbey Lane English Mild carries the mild flavors of dark toast and roasted nuttiness solidly on its malt backbone. With enough bitterness to offset the malt character, Abbey Lane finishes clean and dry.</p>
                <a href="https://4thmeridianbrewing.com/shop/" target="_blank" class="ghost">Order Online</a>
              </div>
            </div>
          </div> 
          <!-- Carousel slide 2 -->
          <div class="carousel-item">
            <div class="row align-items-center justify-content-center">
              <div class="col-sm-5">
                <img src="app/themes/ribstonecreek/img/oldmanwinter.png" alt="Old Man Winter" />
              </div>
              <div class="beer_content two col-10 col-sm-6">
                <style>
                  .beer_content.two a {
                    border-color: #599AB1;
                    color: #599AB1;
                  }
                  .beer_content.two a:hover {
                    border-color: #599AB1;
                    background: #599AB1;
                    color: #fff;
                  }
                  .beer_content.two h2 {
                    color: #599AB1;
                  }
                  .beer_content.two meta {
                    color: #5E9CB3;
                  }
                </style>
                <h2>Old Man Winter Porter</h2>
                <p>Our Porter offers a pronounced chocolate & roast coffee notes, balanced by a light caramel sweetness. With a fruity & roasted aroma on the nose, this well-bodied brew is the perfect companion for a cold winter night.</p>
                <a href="https://4thmeridianbrewing.com/shop/" target="_blank" class="ghost">Order Online</a>
              </div>
            </div>
          </div>
          <!-- Carousel slide 3 -->
          <div class="carousel-item">
            <div class="row align-items-center justify-content-center">
              <div class="col-sm-5">
                <img src="app/themes/ribstonecreek/img/lager.png" alt="Ribstone Creek Lager" />
              </div>
              <div class="beer_content three col-10 col-sm-6">
                <style>
                  .beer_content.three a {
                    border-color: #333;
                    color: #333;
                  }
                  .beer_content.three a:hover {
                    border-color: #333;
                    background: #333;
                    color: #fff;
                  }
                  .beer_content.three h2 {
                    color: #333;
                  }
                  .beer_content.three meta {
                    color: #333;
                  }
                </style>
                <h2>Ribstone Creek Lager</h2>
                <p>Our Premium Lager displays sparkling clarity and a soft blanket of white head that combines an easy-drinking finish with micro-brewed attention to detail. The aroma offers delicate, grainy malt sweetness supplemented by a grassiness and hit of floral hoppiness.</p>
                <a href="https://4thmeridianbrewing.com/shop/" target="_blank" class="ghost">Order Online</a>
              </div>
            </div>
          </div>           
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <section class="features row lazy">
      <div class="col-sm-6">
        <a href="https://ribstonecreekbrewery.ca/brewery">
          <img src="app/themes/ribstonecreek/img/brewery.jpg" alt="" />
          <div>
            <h3>The Brewery</h3>
            <h4>History, tours, directions</h4>
          </div>
        </a>
      </div>
      <div class="col-sm-6">
        <a target="_blank" href="https://4thmeridianbrewing.com/shop/">
          <img src="app/themes/ribstonecreek/img/lager.jpg" alt="" />
          <div>
            <h3>General Store</h3>
            <h4>Order Ribstone beer online!</h4>
          </div>
        </a>
      </div>
    </section>
    <section class="visit row lazy justify-content-center">
      <h2 class="col-md-12">We've moved!</h2>
      <div class="col-sm-8 col-md-7 map">
        <img width="630px" src="app/themes/ribstonecreek/img/map.png" alt="" />
      </div>
      <div class="col-sm-9 col-md-5">
        <p><strong>There will be many updates soon, so stay tuned.</strong></p>
        <p>After 11 years in Edgerton we moved (but not far!). You can now visit us in Lloydminster.</p>
        <p>Follow us on social media, and check back often. Good things coming!</p>
        <br />
        <p><strong>Questions? Send us a message:</strong></p>
        <a href="/contact" class="email ghost">&#xf1d8; <span>Email</span></a>
        <a href="https://facebook.com/RibstoneCreekBrewery" target="_blank" class="ghost">&#xf09a;</a>
        <a href="https://twitter.com/RibstoneCreek" target="_blank" class="ghost">&#xf099;</a>
        <a href="https://www.instagram.com/ribstonecreek/" target="_blank" class="ghost">&#xf16d;</a>  
      </div>
      <div class="col-sm-12 videopromo justify-content-center">
        <a href="#" data-toggle="modal" data-target="#videoModal" data-theVideo="https://www.youtube.com/embed/oIIlJlmriKM">
          <h3>Welcome to <span>(play video)</span> the Brewery</h3>
        </a>
        <img src="app/themes/ribstonecreek/img/video-bg.jpg" alt="" />
      </div>
      <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <iframe width="100%" height="auto" src="" allowfullscreen></iframe>
            </div>            
          </div>
        </div>
      </div>
    </section>
    <!-- section class="stories row no-gutters justify-content-center lazy">
      <div class="col-sm-6">
        <h2>Stories from <br>Edgerton</h2>
        <h4>Our Small Town Living Community</h4>
      </div>
      <div class="row no-gutters">
        <div class="col-sm-6 col-md-3 tall">
          <a href="https://stories.ribstonecreekbrewery.ca/pare-family" target="_blank" class="story" style="background-image: url('https://www.ribstonecreekbrewery.ca/app/themes/ribstonecreek/img/stories/pare.jpg');">
            <div class="title">
              <h3>Paré Family</h3>
              <h4>Stories from Edgerton</h4>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-3">
          <a href="https://stories.ribstonecreekbrewery.ca/jim" target="_blank" class="story" style="background-image: url('https://www.ribstonecreekbrewery.ca/app/themes/ribstonecreek/img/stories/jim.jpg');">
            <div class="title">
              <h3>Jim</h3>
              <h4>A day in the life of small town farming</h4>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-3">
          <a href="https://stories.ribstonecreekbrewery.ca/lenny" target="_blank" class="story" style="background-image: url('https://www.ribstonecreekbrewery.ca/app/themes/ribstonecreek/img/stories/lenny.jpg');">
            <div class="title">
              <h3>Lenny</h3>
              <h4>Local hardware store is a staple in any small town.</h4>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-3 tall">
          <a href="https://stories.ribstonecreekbrewery.ca/wanda" target="_blank" class="story" style="background-image: url('https://www.ribstonecreekbrewery.ca/app/themes/ribstonecreek/img/stories/wanda.jpg');">
            <div class="title">
              <h3>Wanda</h3>
              <h4>Owner of the Oasis Hotel</h4>
            </div>
          </a>
        </div>
      </div>
    </section>
	</div --><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
