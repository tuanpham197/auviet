<?php

get_header(); ?>
<div id="content">
	<div id="main-content">
		<div class="search-info">
		<div class="container" style="background: #fff;">
			<?php 
			$search_query = new WP_Query('s='.$s.'&showpost=-1');
			$search_keyword =  esc_html($s,1);
			$search_count = $search_query->post_count;

			printf(__('<div style="margin-top: 20px;" class="alert alert-success" role="alert">
					  <a href="#" class="alert-link">Tìm thấy %1$s chủ đề liên quan</a>
					</div>	','tuanpham'),$search_count);

			?>

		</div>
		</div>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part('content',get_post_format()); ?>
	<?php endwhile ?>
	<?php tuanpham_phantrang() ?>
	<?php else: ?>
		<?php get_template_part('content','none'); ?>
	<?php endif; ?>
	</div>
</div>

<?php

get_footer();
