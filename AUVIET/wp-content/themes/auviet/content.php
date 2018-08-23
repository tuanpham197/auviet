<style type="text/css" media="screen">

	
	#menu-0{
		height: 85px;
	    background: #383b43;
	}
	.container-fluid {
	    padding-left: 0px; 
	    padding-right: 0px; 
	}
</style>

<div class="container-fluid no-padding">
	<div class="container">
		<?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>
	</div>

	<div class="info-post">
		<div class="container">
			<?php tuanpham_entry_header(); ?>
			<?php tuanpham_entry_meta(); ?>
		</div>
	</div>
</div>
<div class="main">
	<div class="container">

	<div style="background: #fff"><div class="line-dot"></div></div>
	<div class="row" style="background: #fff;">
		<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12" style="border-right: 1px solid #f3f3f3;border-left: 1px solid #f4f4f4;">
			<article id="post <?php the_ID(); ?>" <?php post_class();?> >
				<div class="entry_content" style="    padding: 10px 0px 0px 0px;">
	  				<div class="thecontent">
    					<?php tuanpham_entry_content(); ?></div>
    					<?php get_the_tags(); ?>
    					<?php ( is_single()? tuanpham_entry_tag() :''); ?>
 				 </div>
			</article>
			<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="5"></div>
		</div>
	</div>
</div>


