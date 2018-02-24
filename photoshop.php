<!DOCTYPE html>
<html lang="en">
  <!--call header file -->
  <?php include('header.php'); ?>
  <!--call navbar file -->
  <?php include('navbar.php'); ?>
  <body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <!--call preloader file -->
    <?php include('preloader.php'); ?>

<!-- Section: intro -->
<section>
    <div class="navbar_bg">
    </div>
    <div class="container">
      <div class="jumbotron text-center">
          <br />
          <h1>Photoshop</h1>
      </div>
  </div>
</section>
<!-- /Section: intro -->

<!-- Section: photoshop -->
<section id="photoshop" class="text-center">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
    <div class="row">
			<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.2s">
          <div class="team boxed-grey">
            <div class="inner">
						  <h3>Book Cover</h3><br>
              <div class="avatar"><a href="#book-cover"><img src="img/book-cover.jpg" alt="" class="img-responsive img-thumb" /></a></div>
            </div>
          </div>
				</div>
      </div>
      <div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.5s">
            <div class="team boxed-grey">
              <div class="inner">
						    <h3>App</h3><br>
                <div class="avatar"><a href="#app"><img src="img/ipad.png" alt="" class="img-responsive img-thumb" /></a></div>
            </div>
          </div>
				</div>
      </div>
			<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.8s">
                <div class="team boxed-grey">
                    <div class="inner">
						            <h3>Photo Corrections</h3>
                        <div class="avatar"><a href="#photo"><img src="img/photo-correction.png" alt="" class="img-responsive img-thumb" /></a></div>
                    </div>
                </div>
				      </div>
            </div>
          </div>
        </div>
		   </div>
	     <div id="book-cover" class="row text-center">
            <div class="col-xs-10 col-sm-10 col-md-10 col-xs-offset-1">
			         <br>
			         <br>
			         <br>
			         <h4>Book Cover</h4>
               <p>
               Sample for Book Cover created in class during my Photoshop course</p>
               <br>
			         <img src="img/book-cover.jpg">
			         <br>
			         <br>
			         <p><a href="#Top"><input class="btn btn-default " value="Top"></a></p>
              </div>
            </div>
  				</div>
        </div>
        <div id="app" class="row text-center">
          <div class="col-xs-10 col-sm-10 col-md-10 col-xs-offset-1">
			       <br>
			       <br>
			       <br>
			       <h4>App</h4>
             <p>
             Sample for App in Ipad screen</p>
             <br>
			       <img src="img/ipad.png">
			       <br>
			       <br>
			       <p><a href="#Top"><input class="btn btn-default " value="Top"></a></p>
            </div>
          </div>
				</div>
       </div>
       <div id="photo" class="row text-center">
          <div class="col-xs-10 col-sm-10 col-md-10 col-xs-offset-1">
			      <br>
			      <br>
			      <br>
			      <h4>Photo Correction</h4>
            <p>
            Sample for improve quality and correct some problems in a old photo</p>
            <br>
 			     <img src="img/photo-correction.png">
			     <br>
			     <br>
			     <p><a href="#Top"><input class="btn btn-default " value="Top"></a></p>
          </div>
        </div>
			</div>
    </div>
    <br />
    <br />
  </section>
  <!-- Section: photoshop -->

    <!--call footer file -->
    <?php include('footer.php'); ?>
    <!--call JS files file -->
    <?php include('js_links.php'); ?>
  </body>
</html>
