
<?php get_header();?>
        <!-- CONTENT WRAPPER START -->
        <div class="wrapper" id="wrapper-index">
            


			<!-- TT-HEADER-BANNER START -->
            <div class="tt-header-banner tt-block">				
				<div class="swiper-container" data-loop="1" >
					<div class="swiper-wrapper">

						<?php /* Start the Loop */ query_posts(array('post_type' => array('slider')));
						// Start the loop.
						while ( have_posts() ) : the_post();?>

								
									<div class="swiper-slide">
										<div class="tt-slider-entry" style="background-image:url(<?php echo the_post_thumbnail_url();?>);">
											<div class="tt-header-entry">
												<div class="container">
													<h1 class="h1 title"><?php the_title();?></h1>
													<a class="btn" href="#"><span>Order now</span><i class="fa fa-birthday-cake" aria-hidden="true"></i></a>
												</div> 
											</div>                           
										</div>
									</div>
								

						<?php endwhile; ?>
			
					</div>
					<div class="swiper-pagination type-1 relative"></div>
				</div>				
            </div>
			<!-- TT-HEADER-BANNER END -->



            <!-- TT-WHAT-WE-SERVE START -->
            <div class="tt-what-we-serve tt-block">
                <div class="tt-block-bg" style="background-image: url(<?php echo get_template_directory_uri();?>/img/what-we-serve-bg.jpg);">
                    
					<!-- TT-TITLE START -->
					<div class="tt-title-wrapp">
						<div class="container">
							<div class="empty-space marg-xl-b50 marg-md-b40 marg-sm-b30"></div>
							<span class="tt-title-icon"><i class="fa fa-birthday-cake" aria-hidden="true"></i></span>
							<div class="line-top"></div>
							<h3 class="h3"><?php the_field('main_block_title', 2);?></h3>
							<div class="simple-text">
								<p><?php the_field('main_block_description', 2);?></p>
							</div>
							<div class="line-bottom"></div>						
							<div class="empty-space marg-xl-b70 marg-md-b40 marg-sm-b30"></div>
						</div>
					</div>
					<!-- TT-TITLE END -->

					<div class="container">
						<div class="row">
                            <div class="col-lg-4 col-sm-12">						
								<div class="tt-what-wrapp">
									<img class="plate img-responsive" src="<?php the_field('box_1_image', 2);?>" alt="">
									<div class="tt-what-inner">
										<h2 class="h2 color-1"><?php the_field('box_1_title', 2);?></h2>
										<div class="tt-what-line"></div>
										<div class="simple-text">
											<p><?php the_field('box_1_description', 2);?></p>
										</div>
										<a class="btn style-2 color-1" href="<?php the_field('box_1_link', 2);?>"><span>Check our menu</span></a>
										<img class="img-responsive tt-style1-cake" src="<?php echo get_template_directory_uri();?>/img/plate1-cake.png" alt="">		
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-sm-12">
								<div class="empty-space marg-md-b40"></div>								
								<div class="tt-what-wrapp">
									<img class="plate img-responsive" src="<?php the_field('box_2_image', 2);?>" alt="">
									<div class="tt-what-inner">
										<h2 class="h2 color-2"><?php the_field('box_2_title', 2);?></h2>
										<div class="tt-what-line"></div>
										<div class="simple-text">
											<p><?php the_field('box_2_description', 2);?></p>
										</div>
										<a class="btn style-2 color-2" href="<?php the_field('box_2_link', 2);?>"><span>Check our menu</span></a>
										<img class="img-responsive tt-style2-cake" src="<?php echo get_template_directory_uri();?>/img/plate1-cake.png" alt="">
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-sm-12">
								<div class="empty-space marg-md-b40"></div>							
								<div class="tt-what-wrapp">
									<img class="plate img-responsive" src="<?php the_field('box_3_image', 2);?>" alt="">
									<div class="tt-what-inner">
										<h2 class="h2 color-3"><?php the_field('box_3_title', 2);?></h2>
										<div class="tt-what-line"></div>
										<div class="simple-text">
											<p><?php the_field('box_3_description', 2);?></p>
										</div>
										<a class="btn style-2 color-3" href="<?php the_field('box_3_link', 2);?>"><span>Check our menu</span></a>
										<img class="img-responsive tt-style3-cake" src="<?php echo get_template_directory_uri();?>/img/plate1-cake.png" alt="">
									</div>
								</div>
							</div>
						</div>
						<img class="img-responsive tt-serve-img-1" src="<?php echo get_template_directory_uri();?>/img/serve-img-1.png" alt="">
		                <img class="img-responsive tt-serve-img-2" src="<?php echo get_template_directory_uri();?>/img/serve-img-2.png" alt="">
			            <img class="img-responsive tt-serve-img-3" src="<?php echo get_template_directory_uri();?>/img/serve-img-3.png" alt="">
			            <img class="img-responsive tt-serve-img-4" src="<?php echo get_template_directory_uri();?>/img/serve-img-4.png" alt="">					
						<div class="empty-space marg-xl-b90 marg-md-b40"></div>
					</div>
				</div>
			</div>
			<!-- TT-WHAT-WE-SERVE END -->

		</div>
		<!-- CONTENT WRAPPER END -->
		
		<!-- TT-SEARCH START -->
		<div class="tt-s-popup">
        	<div class="tt-s-popup-overlay"></div>
	        <div class="tt-s-popup-content">
	            <div class="tt-s-popup-layer"></div>
	            <div class="tt-s-popup-container">
	                <form class="tt-s-popup-form">
	                    <h2 class=" h2 tt-s-popup-title">Search</h2>
	                    <div class="tt-s-popup-field">
	                        <input type="text" placeholder="Enter keyword" class="input" required>
	                        <div class="tt-s-popup-devider"></div>
	                        <div class="tt-s-popup-submit">
	                            <i class="fa fa-search"></i>
	                            <input type="submit" value="">
	                        </div>                            
	                    </div>
	                    <a href="#" class="tt-s-popup-close"></a>
	                </form> 
	            </div>
	        </div>
    	</div>
    	<!-- TT-SEARCH END -->
			
	</div>
	<!-- PAGE WRAPPER END -->

<?php wp_footer();?>
</body>
</html>
