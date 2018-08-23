			<footer>
				<div class="container">
					<div class="row bot">
						<div class="col-xs-12 col-sm-12 col-md-6">
							<div class="menu-footer">
								<!-- <ul>
									<li><a href="">HOME</a></li>
									<li><a href="">ABOUT</a></li>
									<li><a href="">DESTINATIONS</a></li>
									<li><a href="">GALLERY</a></li>
									<li><a href="">BLOG</a></li>
									<li><a href="">CONTACTS</a></li>
								</ul> -->
								<?php tuanpham_menu('primary-menu'); ?>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6">
							<div class="list-support">
								<div class="contact">
									<ul>
										<li><a href="#fb"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#pr"><i class="fab fa-pinterest-p"></i></a></li>
										<li><a href="#tw"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#vi"><i class="fab fa-vimeo-v"></i></a></li>
										<li><a href="#it"><i class="fab fa-instagram"></i></a></li>
										<li><a href="#gg"><i class="fab fa-google-plus-g"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row down">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<p>AU VIET Aquculture company limited / Telephone: +1 800 603 6035</p>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<p style="text-align: right;">© 2015 TripWay - Material IU Template</p>
						</div>
					</div>
				</div>
			</footer>
			<?php 
				if(is_home()){
					echo '</div>';
				}
			 ?>
		<!--  -->
		<!-- end wrapper -->
		<div id="wp-respon-menu">
			<h1>Menu AUVIET</h1>
			<ul id="respon-menu">
				<li><a href="#">HOME</a></li>
				<li>
					<a>ABOUT</a>
					<span><i class="fas fa-sort-down"></i></span>
					<ul class="submenu">
						<li><a href="">Submenu 1</a></li>
						<li><a href="">Submenu 2</a></li>
						<li><a href="">Submenu 3</a></li>
					</ul>
				</li>
				<li><a href="">DESTINATIONS</a></li>
				<li>
					<a >GALLERY</a>
					<i class="fas fa-sort-down"></i>
					<ul class="submenu">
						<li><a href="">Submenu 1</a></li>
						<li><a href="">Submenu 2</a></li>
						<li><a href="">Submenu 3</a></li>
					</ul>
				</li>
				<li><a href="">BLOG</a></li>
				<li><a href="">CONTACTS</a></li>
			</ul>
		</div>
	</div>
</body>
<script>
            $(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                autoplay:true,
                stagePadding: 30,
                smartSpeed: 450,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 2,
                    nav: false
                  },
                  1000: {
                    items: 2,
                    nav: true,
                    loop: false,
                    margin: 20
                  }
                }
              })
            })
          </script>
</html>
<?php wp_footer(); ?>