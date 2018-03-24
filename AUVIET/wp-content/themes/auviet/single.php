<?php

get_header('page'); ?>


<style type="text/css" media="screen">

body.landing #header {
    background-color: #383b43;
    left: 0;
    position: fixed;
    line-height: 3em !important;
    top: 0;
    height: 3em !important;
    position: relative;
}
	
</style>


	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- set và update lại lượt views-->
			<?php get_template_part('content',get_post_format()); ?>	
			
	<?php endwhile ?>
	
	<?php else: ?>
		<?php get_template_part('content','none'); ?>
	<?php endif; ?>
	</div>
		
</div>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=693706190831812";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<?php

get_footer();
