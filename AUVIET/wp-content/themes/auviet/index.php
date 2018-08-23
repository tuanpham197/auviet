<?php

get_header(); ?>
	<div class="slide">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
	    <!-- Indicators -->
	    <ol class="carousel-indicators">
	      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	      <li data-target="#myCarousel" data-slide-to="1"></li>
	      <li data-target="#myCarousel" data-slide-to="2"></li>
	    </ol>

	    <!-- Wrapper for slides -->
	    <div class="carousel-inner">
	      <div class="item active">
	        <img src="<?php echo tuanpham_url(); ?>img/img-slide1.png" alt="Los Angeles" style="width:100%;">
	      </div>

	      <div class="item">
	        <img src="<?php echo tuanpham_url(); ?>img/img-slide2.png" alt="Chicago" style="width:100%;">
	      </div>
	    
	      <div class="item">
	        <img src="<?php echo tuanpham_url(); ?>img/img-slide1.png" alt="New york" style="width:100%;">
	      </div>
	    </div>

	    <!-- Left and right controls -->
	    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right"></span>
	      <span class="sr-only">Next</span>
	    </a>
	  </div>
	</div>
<div class="content">
	<!-- about -->
	<div class="about">
		<div class="container">
			<div class="row">
				<div id="title-about">
					<h2>About Au Viet</h2>
				</div>
				<div class="content-about">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos et asperiores libero totam sed optio tempora nemo incidunt ut repellendus, beatae voluptatum voluptas, aliquid eligendi, accusamus ipsum enim omnis, voluptate!</p>
				</div>
			</div>
			<div class="service">
				<div class="row">
					<div class="col-xs-12 col-sm-3 col-md-3">
						<div id="img-ser">
							<i class="fas fa-map"></i>
						</div>
						<h3>Route Selection</h3>
						<p>Mauris fermentum tortor non enim aliquet condimentum. Nam aliquam pertium duissem feugiat</p>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3">
						<div id="img-ser">
							<i class="fas fa-life-ring"></i>
						</div>
						<h3>24/7 Support</h3>
						<p>Mauris fermentum tortor non enim aliquet condimentum. Nam aliquam pertium duissem feugiat</p>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3">
						<div id="img-ser">
							<i class="fas fa-globe"></i>
						</div>
						<h3>Wide Choice</h3>
						<p>Mauris fermentum tortor non enim aliquet condimentum. Nam aliquam pertium duissem feugiat</p>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3">
						<div id="img-ser">
							<i class="fas fa-plane"></i>
						</div>
						<h3>Buy Tickets</h3>
						<p>Mauris fermentum tortor non enim aliquet condimentum. Nam aliquam pertium duissem feugiat</p>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end about -->
	<!-- blog -->
	<div class="blog">
		<div class="container">
			<div class="row">
				<div id="title-blog">
					<h3>Blog</h3>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-8">
					<div class="row">
						<?php
							$tuanphampost = new WP_Query(array(
							'post_type'=>'post',
							'post_status'=>'publish',
							'cat' => 2,
							'orderby' => 'ID',
							'order' => 'DESC',
							'posts_per_page'=> 3));
						?>
						<?php while ($tuanphampost->have_posts()) : $tuanphampost->the_post(); ?>
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="content-blog">
								<a href="<?php the_permalink(); ?>">
									<img alt="<?php the_permalink(); ?>" src="<?php thuanpham_thumbnail('thumb'); ?>" />
								</a>	
								<div class="text">
									<a href="<?php the_permalink(); ?>">
										<h2><?php the_title() ;?></h2>
									</a>
									<p><?php echo excerpt(16) ;?></p>
									<a href="<?php the_permalink(); ?>" id="red">Read more</a>
								</div>
							</div>
						</div>
						<?php endwhile ; wp_reset_query() ;?>
						<!-- <div class="col-xs-12 col-sm-4 col-md-4">
							<div class="content-blog">
								<a href="">
									<img src="<?php echo tuanpham_url(); ?>img/img-blog2.png" alt="">
								</a>	
								<div class="text">
									<a href="">
										<h2>Essentials on Doing Business in Vietnam 2017</h2>
									</a>
									<p>Fermentum tortor non enim aliquet mauris del condimentum. Nam aliquam pretium duis sem feugiat condimentum .</p>
									<a href="" id="red">Read more</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="content-blog">
								<a href="">
									<img src="<?php echo tuanpham_url(); ?>img/img-blog3.png" alt="">
								</a>	
								<div class="text">
									<a href="">
										<h2>Essentials on Doing Business in Vietnam 2017</h2>
									</a>
									<p>Fermentum tortor non enim aliquet mauris del condimentum. Nam aliquam pretium duis sem feugiat condimentum .</p>
									<a href="" id="red">Read more</a>
								</div>
							</div>
						</div> -->
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="publication">
						<div id="title-pub">
							<h3>NEW PUBLICATION</h3>
						</div>
						<a href="">
							<img src="<?php echo tuanpham_url(); ?>img/img-pub.png" alt="">
						</a>
						<div class="text">
							<a href="">
								<h2>Essentials on Doing Business in Vietnam 2017</h2>
							</a>
							<p>Fermentum tortor non enim aliquet mauris del condimentum. Nam aliquam pretium duis sem feugiat condimentum .</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end blog -->
	<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<div class="row">
				<div id="title-tes">
					<h3>Testimonials</h3>
				</div>
				<div class="owl-carousel owl-theme">
				<?php
					$tuanphampost = new WP_Query(array(
					'post_type'=>'post',
					'post_status'=>'publish',
					'cat' => 3,
					'orderby' => 'ID',
					'order' => 'DESC',
					'posts_per_page'=> 4));
				?>
				<?php while ($tuanphampost->have_posts()) : $tuanphampost->the_post(); ?>
				
					<div class="item">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div id="content-tes">
								<div class="row">
									<div class="col-xs-12 col-sm-3 col-md-3">
										<div id="img-test">
											<img alt="<?php the_permalink(); ?>" src="<?php thuanpham_thumbnail('thumb'); ?>" />
										</div>
									</div>
									<div class="col-xs-12 col-sm-9 col-md-9">
										<div id="nd-tes">
											<p><?php echo excerpt(16) ;?></p>
										</div>
										<h4><?php the_title() ;?></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				
				<?php endwhile ; wp_reset_query() ;?>
				</div>
			</div>
		</div>
	</div> <!-- end testimonials -->
	<div id="test">
		<?php 

		$testinput = ot_get_option( 'about', array() );

		if ( ! empty( $testinput ) ) {
		foreach( $testinput as $data ) {
		?>
		<p><?php echo $data['title']; ?></p>

		<?php
			}
		}
		?>
	</div>
</div>
<?php
get_footer();
?>