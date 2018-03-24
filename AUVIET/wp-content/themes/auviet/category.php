<?php

get_header('page'); ?>

<style type="text/css" media="screen">


	#menu-0{
		height: 49px;
	    background: #383b43;
	}
	.listpost img{
		width: 100%;
	    height: 100%;
	}
	.date-published{
		color:#9f9f9f;
	}
</style>

<div id="breadcrumb" class="page_title1 sty13"><div class="container"><h1 style="color: #fff;"><?php echo single_cat_title('',false) ?></h1><div class="pagenation">

 </div></div></div>

<div id="content">
	<div id="main-content">
	<div class="container" style="background: #fff;">
	<div class="row">
		<div class="col-md-8">
		<?php
			if(is_tag()) :
				printf(__('Posts tagged: %1$s','tuanpham'),single_tag_title('',false));
			elseif(is_category()) :
				printf(__('<div class="category"><h2><blockquote style="margin-top:30px;">
						<div class="btn btn-info"><p class="cate">Chuyên mục: %1$s</p></div>
						</blockquote></h2></div>','tuanpham'),
					single_cat_title('',false));
			elseif(is_date()):
				printf(__('Daily Archives: %1$s','tuanpham'),
					get_the_time('l,F j, Y'));
			elseif(is_month()):
				printf(__('Monthly Archives: %1$s','tuanpham'),
					get_the_time('F Y'));
			elseif(is_year()):
				pritf(__('Yearly Archives: %1$s','tuanpham'),
					get_the_time('Y'));
			endif;
		?>
		<?php if( is_tag() || is_category() ):?>
			<div class="archive-description">
				<?php echo term_description(); ?>
			</div>
		<?php endif;?>
		</div>
		</div>
		</div>

		<div class="container" style="background: #fff;">
			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
				<div class="row listpost" style="">
					<div class="col-md-4">
						 <?php if ( has_post_thumbnail() ) {
				                the_post_thumbnail('', array( 'class' => 'thumcate img-responsive3', 'alt' => esc_attr( get_the_title( $post_id ) ) ) );
				            } 
				            else{
				               echo '<img width="100%" class="thumcate img-responsive3" src="'.catch_that_image().'" />';
				            }

				             ?>
					</div>
					<div class="col-md-8" style="position: relative;">
						<h3 style="margin-top: 10px;margin-bottom: 10px;"><a href="<?php the_permalink(); ?>"> <?php the_title() ;?></a></h3>
						<?php tuanpham_entry_meta(); ?>
						 <p style="margin-top: 10px; color:#333"><?php echo excerpt(25); ?></p>
						 <div class="button button--ujarak button--border-thin button--text-thick" style="  text-align: end;float: right;    border-radius: 0;"><a style="color: #fff;" href="<?php the_permalink(); ?>">Xem thêm</a></div>
					</div>
					<div class="clearfix"></div>
					<hr>
				</div>
		<?php endwhile ?>
		</div>
		<?php tuanpham_phantrang() ?>
		<?php else: ?>
		<?php get_template_part('content','none'); ?>
		<?php endif; ?>
	</div>
</div>

<?php

get_footer();

?>

