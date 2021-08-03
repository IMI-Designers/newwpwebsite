<?php
/**
* Template Name: Home
 *
 * Displays Only Home template
 *
 * @package WordPress
 * @subpackage anyar
 * @since anyar 1.0
 */

 get_header(); ?>
		<!--Slider-->
		<section class="mbr-slider mbr-section mbr-section__container carousel slide mbr-section-nopadding mbr-after-navbar" data-ride="carousel" data-keyboard="false" data-wrap="true" data-pause="false" data-interval="5000" id="slider-2">
			<div>
				<div>
					<div>
						<ol class="carousel-indicators">
							<li data-app-prevent-settings="" data-target="#slider-2" data-slide-to="0" class="active"></li>
							<li data-app-prevent-settings="" data-target="#slider-2" class="" data-slide-to="1"></li>
							<li data-app-prevent-settings="" data-target="#slider-2" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full active" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/slide1.jpg);">
								<div class="mbr-table-cell">
									<div class="mbr-overlay"></div>
									<div class="container-slide container">
										<div class="row">
											<div class="col-md-8 col-md-offset-2 text-xs-center">
												<h2 class="mbr-section-title display-1">Use our trusted service to build your dream home</h2>
												<p class="mbr-section-lead lead">We provide both interior and exterior painting services at affordable prices.</p>
												<div class="mbr-section-btn">
													<a class="btn btn-lg btn-success" href="#">CONTACT US</a> 
													<a class="btn btn-lg btn-white btn-white-outline" href="#">READ MORE</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/slide2.jpg);">
								<div class="mbr-table-cell">
									<div class="mbr-overlay"></div>
									<div class="container-slide container">
										<div class="row">
											<div class="col-md-8 col-md-offset-2 text-xs-center">
												<h2 class="mbr-section-title display-1">Use our trusted service to build your dream home</h2>
												<p class="mbr-section-lead lead">We provide both interior and exterior painting services at affordable prices.</p>
												<div class="mbr-section-btn">
													<a class="btn btn-lg btn-success" href="#">CONTACT US</a> 
													<a class="btn btn-lg btn-white btn-white-outline" href="#">READ MORE</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/slide3.jpg);">
								<div class="mbr-table-cell">
									<div class="mbr-overlay"></div>
									<div class="container-slide container">
										<div class="row">
											<div class="col-md-8 col-md-offset-2 text-xs-center">
												<h2 class="mbr-section-title display-1">Use our trusted service to build your dream home</h2>
												<p class="mbr-section-lead lead">We provide both interior and exterior painting services at affordable prices.</p>
												<div class="mbr-section-btn">
													<a class="btn btn-lg btn-success" href="#">CONTACT US</a> 
													<a class="btn btn-lg btn-white btn-white-outline" href="#">READ MORE</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<a data-app-prevent-settings="" class="left carousel-control" role="button" data-slide="prev" href="#slider-2">
						<span class="icon-prev" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
						</a>
						<a data-app-prevent-settings="" class="right carousel-control" role="button" data-slide="next" href="#slider-2">
						<span class="icon-next" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</section>

		 <!--About-->
		<section class="mbr-section mbr-section-hero mbr-section-full header2 mbr-parallax-background" id="header6-3" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/room-laptop1.jpg);">
			<div class="mbr-overlay" style="opacity: 0.9; background-color: rgb(204, 204, 204);">
			</div>
			<div class="mbr-table mbr-table-full">
				<div class="mbr-table-cell">
					<div class="container">
						<div class="mbr-section row">
							<div class="mbr-table-md-up">
								<div class="mbr-table-cell mbr-right-padding-md-up mbr-valign-top col-md-7 image-size" style="width: 50%;">
									<div class="mbr-figure">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about.jpg">
									</div>
								</div>
								<div class="mbr-table-cell col-md-5 text-xs-center text-md-left content-size">
									<h3 class="mbr-section-title display-2">About Ben NSW painting</h3>
									<div class="mbr-section-text">
										<p>Ben NSW painting have provided painting services in Sydney and surrounding areas for over 12 years. We provide both interior and exterior painting services at affordable prices.</p>
									</div>
									<div class="mbr-section-btn"><a class="btn btn-lg btn-black-outline btn-black" href="#">MORE</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!--Services-->
		<section class="mbr-cards mbr-section mbr-section-nopadding" id="features2-8" style="background-color: rgb(255, 255, 255);">
			<div class="mbr-cards-row row striped">
				<div class="mbr-cards-col col-md-3 col-sm-6 col-xs-12" style="padding-top: 80px; padding-bottom: 80px;">
					<div class="container">
						<div class="card cart-block">
							<div class="card-img">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/freequotes.jpg">
							</div>
							<div class="card-block">
								<h4 class="card-title">Free competitive quotes and consultation</h4>
								<p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</p>
								<div class="card-btn"><a href="#" class="btn btn-primary">MORE</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="mbr-cards-col col-md-3 col-sm-6 col-xs-12" style="padding-top: 80px; padding-bottom: 80px;">
					<div class="container">
						<div class="card cart-block">
							<div class="card-img">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/painting.jpg">
							</div>
							<div class="card-block">
								<h4 class="card-title">Painting</h4>
								<p class="card-text">BEN NSW Sydney Painting Company is a member of Master Painters Australia, which stands as an indication of the quality of the services...</p>
								<div class="card-btn"><a href="#" class="btn btn-primary">MORE</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="mbr-cards-col col-md-3 col-sm-6 col-xs-12" style="padding-top: 80px; padding-bottom: 80px;">
					<div class="container">
						<div class="card cart-block">
							<div class="card-img">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/decoration.jpg">
							</div>
							<div class="card-block">
								<h4 class="card-title">Decoration</h4>
								<p class="card-text">BEN NSW Sydney Painting Company is a member of Master Painters Australia, which stands as an indication of the quality of the services...</p>
								<div class="card-btn"><a href="#" class="btn btn-primary">MORE</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="mbr-cards-col col-md-3 col-sm-6 col-xs-12" style="padding-top: 80px; padding-bottom: 80px;">
					<div class="container">
						<div class="card cart-block">
							<div class="card-img">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/silicon.jpg">
							</div>
							<div class="card-block">
								<h4 class="card-title">Silicon</h4>
								<p class="card-text">BEN NSW Painting is the most reliable and trusted residential painting company in Sydney. Our professional team of painters is trained and...</p>
								<div class="card-btn"><a href="#" class="btn btn-primary">MORE</a></div>
							</div>
						</div>
					</div>
				</div>

				<div class="mbr-cards-col col-md-3 col-sm-6 col-xs-12 white" style="padding-top: 80px; padding-bottom: 80px;">
					<div class="container">
						<div class="card cart-block">
							<div class="card-img">
								 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/decorative-finishes.jpg">
							</div>
							<div class="card-block">
								<h4 class="card-title">Decorative Finishes</h4>
								<p class="card-text">BEN NSW Painting’s Decorative Finishes range creates limitless possibilities for natural aesthetics – from a traditional organic, clay plaster...</p>
								<div class="card-btn"><a href="#" class="btn btn-primary">MORE</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="mbr-cards-col col-md-3 col-sm-6 col-xs-12 black" style="padding-top: 80px; padding-bottom: 80px;">
					<div class="container">
						<div class="card cart-block">
							<div class="card-img">
								 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/texture-finishes.jpg">
							</div>
							<div class="card-block">
								<h4 class="card-title">Texture Finishes</h4>
								<p class="card-text">BEN NSW Painting’s Decorative Finishes range creates limitless possibilities for natural aesthetics – from a traditional organic, clay plaster...</p>
								<div class="card-btn"><a href="#" class="btn btn-primary">MORE</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="mbr-cards-col col-md-3 col-sm-6 col-xs-12 white" style="padding-top: 80px; padding-bottom: 80px;">
					<div class="container">
						<div class="card cart-block">
							<div class="card-img">
								 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/top-coating-rendered-walls.jpg">
							</div>
							<div class="card-block">
								<h4 class="card-title">Top Coating Rendered Walls</h4>
								<p class="card-text">Plaster is coating a surface with cement render or plaster finish on an internal or external wall. Plaster is for decoration and...</p>
								<div class="card-btn"><a href="#" class="btn btn-primary">MORE</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="mbr-cards-col col-md-3 col-sm-6 col-xs-12 black" style="padding-top: 80px; padding-bottom: 80px;">
					<div class="container">
						<div class="card cart-block">
							<div class="card-img">
								 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/interior-and-exterior.jpg">
							</div>
							<div class="card-block">
								<h4 class="card-title">Interior and Exterior Painting Services</h4>
								<p class="card-text">There is nothing quite like a coat of paint to lift up the interior of your home. Interior house painting done properly...</p>
								<div class="card-btn"><a href="#" class="btn btn-primary">MORE</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<!--Add-->
		<section class="mbr-section article mbr-parallax-background" id="msg-box8-b" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/add-bg.jpg); padding-top: 120px; padding-bottom: 120px;">
			<div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-xs-center">
						<h3 class="mbr-section-title display-2">Would You like to work with us?.&nbsp;</h3>
						<div class="lead">
							<p><a style="background: #fff;border-color: #fff;color: #333;font-weight: 600;    font-size: 16px;" href="#" class="btn btn-primary">Contact Now</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!--Gallery-->
		<section class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel" id="gallery1-5" data-filter="false" style="background-color: rgb(255, 255, 255); padding-top: 0rem; padding-bottom: 0rem;">
			<!-- Filter -->
			<!-- Gallery -->
			<div class="mbr-gallery-row">
				<div class=" mbr-gallery-layout-default">
					<div>
						<div>
							<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Awesome" data-video-url="false">
								<div href="#lb-gallery1-5" data-slide-to="0" data-toggle="modal">
									<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bike-small.jpg">
									<span class="icon-focus"></span>
								</div>
							</div>
							<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Responsive" data-video-url="false">
								<div href="#lb-gallery1-5" data-slide-to="1" data-toggle="modal">
									<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/code-man-small.jpg">
									<span class="icon-focus"></span>
								</div>
							</div>
							<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Creative" data-video-url="false">
								<div href="#lb-gallery1-5" data-slide-to="2" data-toggle="modal">
									<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/coworkers-small.jpg">
									<span class="icon-focus"></span>
								</div>
							</div>
							<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Animated" data-video-url="false">
								<div href="#lb-gallery1-5" data-slide-to="3" data-toggle="modal">
									<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/desktop-small.jpg">
									<span class="icon-focus"></span>
								</div>
							</div>
							<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Awesome" data-video-url="false">
								<div href="#lb-gallery1-5" data-slide-to="4" data-toggle="modal">
									<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/room-laptop-small.jpg">
									<span class="icon-focus"></span>
								</div>
							</div>
							<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Beautiful" data-video-url="false">
								<div href="#lb-gallery1-5" data-slide-to="5" data-toggle="modal">
									<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/table-small.jpg">
									<span class="icon-focus"></span>
								</div>
							</div>
							<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Responsive" data-video-url="false">
								<div href="#lb-gallery1-5" data-slide-to="6" data-toggle="modal">
									<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/windows-books-small.jpg">
									<span class="icon-focus"></span>
								</div>
							</div>
							<div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Animated" data-video-url="false">
								<div href="#lb-gallery1-5" data-slide-to="7" data-toggle="modal">
									<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/working-area-small.jpg">
									<span class="icon-focus"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- Lightbox -->
			<div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery1-5">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							<ol class="carousel-indicators">
								<li data-app-prevent-settings="" data-target="#lb-gallery1-5" class=" active" data-slide-to="0"></li>
								<li data-app-prevent-settings="" data-target="#lb-gallery1-5" data-slide-to="1"></li>
								<li data-app-prevent-settings="" data-target="#lb-gallery1-5" data-slide-to="2"></li>
								<li data-app-prevent-settings="" data-target="#lb-gallery1-5" data-slide-to="3"></li>
								<li data-app-prevent-settings="" data-target="#lb-gallery1-5" data-slide-to="4"></li>
								<li data-app-prevent-settings="" data-target="#lb-gallery1-5" data-slide-to="5"></li>
								<li data-app-prevent-settings="" data-target="#lb-gallery1-5" data-slide-to="6"></li>
								<li data-app-prevent-settings="" data-target="#lb-gallery1-5" data-slide-to="7"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bike.jpg">
								</div>
								<div class="carousel-item">
									<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/code-man.jpg">
								</div>
								<div class="carousel-item">
									<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/coworkers.jpg">
								</div>
								<div class="carousel-item">
									<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/desktop.jpg">
								</div>
								<div class="carousel-item">
									<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/room-laptop.jpg">
								</div>
								<div class="carousel-item">
									<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/table.jpg">
								</div>
								<div class="carousel-item">
									<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/windows-books.jpg">
								</div>
								<div class="carousel-item">
									<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/working-area.jpg">
								</div>
							</div>
							<a class="left carousel-control" role="button" data-slide="prev" href="#lb-gallery1-5">
							<span class="icon-prev" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" role="button" data-slide="next" href="#lb-gallery1-5">
							<span class="icon-next" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
							</a>
							<a class="close" href="#" role="button" data-dismiss="modal">
							<span aria-hidden="true">×</span>
							<span class="sr-only">Close</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Gallery-->

		<!--Testimonials-->
		<section class="mbr-section" id="testimonials3-f" style="background-color: rgb(48, 48, 48); padding-top: 120px; padding-bottom: 40px;">
			<div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
			</div>
			<div class="mbr-section mbr-section__container mbr-section__container--middle">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-xs-center">
							<h3 class="mbr-section-title display-2">WHAT OUR FANTASTIC USERS SAY</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="mbr-testimonials mbr-section mbr-section-nopadding">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-lg-4">
							<div class="mbr-testimonial card">
								<div class="card-block">
									<p>“I recently had work done by BEN NSW Sydney Painting & Maintenance. We had work done on our driveway, which was looking very grey and mould was growing. BEN NSW Sydney...”</p>
								</div>
								<div class="mbr-author card-footer">
									<div class="mbr-author-name">Ashleigh B.</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-lg-4">
							<div class="mbr-testimonial card">
								<div class="card-block">
									<p>“We recently had excellent work completed on the outside of our house including the deck by BEN NSW Sydney Painting & Maintenance. We had three other quotes given on...”</p>
								</div>
								<div class="mbr-author card-footer">
									<div class="mbr-author-name">Debie S.</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-lg-4">
							<div class="mbr-testimonial card">
								<div class="card-block">
									<p>“We recently had work done on our property by BEN NSW Sydney Painters & Maintenance. My partner and I are exceptionally happy with the completed work. I was very...”</p>
								</div>
								<div class="mbr-author card-footer">
									<div class="mbr-author-name">Linda G.</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<center style="margin-top: 60px;">
								<p class="text-center"><a style="background: #fff;border-color: #fff;color: #333;font-weight: 600;    font-size: 16px;" href="#" class="btn btn-primary">View All</a></p>
							</center>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!--MAp-->
		<section class="mbr-section mbr-section-nopadding" id="map1-h">
			<div class="mbr-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26502.764963146114!2d151.19248232816886!3d-33.86786927798657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae401e8b983f%3A0x5017d681632ccc0!2sSydney+NSW+2000!5e0!3m2!1sen!2sau!4v1489110859471" allowfullscreen=""></iframe></div>
		</section>

	        <?php get_footer(); ?>