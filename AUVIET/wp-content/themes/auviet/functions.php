<?php 
/**
@ Khai bao gia tri
	@ THEME_URL = lay đuongan cua thu muc theme
	@ CORE = lay duong dan cua thu muc core
**/
define('THEME_URL', get_stylesheet_directory_uri());
define('CORE', THEME_URL."/core");

/**
@ Nhung core/ini/php
**/

//require(CORE."/init.php");

/** 
@thiet lap chieu rong
**/

if(!isset($content_width)){
	$content_width = 700;

}

/**
@Khai bao chuc nang theme
**/

if(!function_exists('tuanpham_theme_setup')){
	function tuanpham_theme_setup(){
		$language_folder = THEME_URL. 'languages';

		add_theme_support('automatic-feed-links');

		add_theme_support('post-thumbnails');

		add_theme_support('post-formats',array(
			'image',
			'video',
			'gallery',
			'quote',
			'link'
			));
		add_theme_support('title-tag');
		$defaults = array(
		'default-color'          => '',
		'default-image'          => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => ''
		);
		add_theme_support( 'custom-background', $defaults );
		add_theme_support( 'custom-header' );
		register_nav_menu('primary-menu',__('Primary Menu','tuanpham'));
		register_nav_menu('primary-menu2',__('Primary Menu 2','tuanpham'));
	

	function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu','tuanpham'));
}
add_action( 'init', 'register_my_menu' );


		add_theme_support( 'custom-logo' );

		add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
		) );
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

		$sidebar = array(
	        'name' => __('Main sidebar','tuanpham'),
	        'id' => "main-sidebar",
	        'description' => '',
	        'class' => 'main-sidebar',
	        'before_title' => '<h2 class="widgettitle">',
	        'after_title' => "</h2>\n",
	    );
		register_sidebar($sidebar);

	}
	add_action('init','tuanpham_theme_setup');
}
if(!function_exists('tuanpham_menu')){
	function tuanpham_menu($menu){
		$menu = array(
			'theme_location'=>$menu,
			'container_class'=>'sub-menu',
			 'menu_class'=> 'mainmenu pull-left',
    		'items_wrap' => '<ul class="menutop">%3$s</ul>',);
		wp_nav_menu($menu);
		}
}

function tp_has_featured_posts() {
	return ! is_paged() && (bool) tp_has_featured_posts();
}


if(!function_exists('tuanpham_phantrang')){
	function tuanpham_phantrang(){
		if($GLOBALS['wp_query']->max_num_pages < 2){
			return '';
		}?>

		<nav class="pagination" role ="navigation">
			<?php if(get_next_posts_link()): ?>
				<div class="next"><?php next_posts_link(__('<button type="button" class="btn btn-info"><i class="fa fa-forward">Trang tiếp</i></button>','tuanpham')); ?>
				<?php endif; ?>
				<?php if(get_previous_posts_link()) : ?>
					<div class="pre"><?php echo get_previous_posts_link(__('<button type="button" class="btn btn-info"><i class="fa fa-backward"> Trang sau</i></button>','tuanpham')); ?>
					<?php endif; ?>
		</nav>
		<?php }
}

/** thumdnail**/

if(!function_exists('thuanpham_thumbnail')){
	function thuanpham_thumbnail($size){
		
			return the_post_thumbnail_url($size);   
	
	}
}

add_action( 'after_setup_theme', 'mytheme_custom_thumbnail_size' );
function mytheme_custom_thumbnail_size(){
    add_image_size( 'thumb', 360, 284.675, true ); // Hard crop to exact dimensions (crops sides or top and bottom)
    add_image_size( 'thumb-medium', 520, 9999 ); // Crop to 520px width, unlimited height
    add_image_size( 'thumb-large', 720, 340 ); // Soft proprtional crop to max 720px width, max 340px height
}


if(!function_exists('tuanpham_entry_header')){ 
	function tuanpham_entry_header(){?>
		<?php if( is_single() ) : ?>
		<hr><h1 class="entry-title"><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h1><hr>
		<?php else: ?>
		<hr><h2 class="entry-title" style="text-align: center;"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"> <?php the_title();?></a></h2><hr>
		<?php endif; ?>
		<?php }
}

if(!function_exists('tuanpham_entry_meta')){ 
	function tuanpham_entry_meta() { ?>
		<?php if (!is_page()) :?>
				<?php 
					printf(__('<span class="date-published">%1$s ','tuanpham'),get_the_date());
				?>
				<?php endif;?>
	<?php }
}

if(!function_exists('tuanpham_entry_content')){ 
	function tuanpham_entry_content(){
		if(!is_single() && !is_page()){
			the_excerpt();
		}
		else {
			the_content();
		}
		
	}
}

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  } 
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}
if(!function_exists('tuanpham_entry_tag')){ 
	function tuanpham_entry_tag(){
		if(has_tag()):
			echo '<div class="entry-tag">';
		printf(__('Tagged in %1$s','tuanpham'),get_the_tag_list('',','));
		echo '</div>';
		endif;
	}
}

function tuanpham_style(){
	wp_register_style('main-style',THEME_URL."/style.css",'all');
	wp_enqueue_style('main-style');


	wp_register_style('reset-style',THEME_URL."/responsive.css",'all');
	wp_enqueue_style('reset-style');

	wp_register_style('font1-style',THEME_URL."/font-awesome/css/fontawesome.css",'all');
	wp_enqueue_style('font1-style');

	wp_register_style('font2-style',THEME_URL."/font-awesome/css/fontawesome.min.css",'all');
	wp_enqueue_style('font2-style');

	wp_register_style('font3-style',THEME_URL."/font-awesome/css/fa-solid.min.css",'all');
	wp_enqueue_style('font3-style');

	wp_register_style('font4-style',THEME_URL."/font-awesome/css/fa-brands.min.css",'all');
	wp_enqueue_style('font4-style');

	wp_register_style('font5-style',THEME_URL."/font-awesome/css/fa-regular.min.css",'all');
	wp_enqueue_style('font5-style');

	wp_register_style('font6-style',THEME_URL."/font-awesome/css/fontawesome-all.min.css",'all');
	wp_enqueue_style('font6-style');

	wp_register_style('font7-style',THEME_URL."/font-awesome/css/fontawesome-all.css",'all');
	wp_enqueue_style('font7-style');

	wp_register_style('owlcarousel-style',THEME_URL."/assets/owlcarousel/assets/owl.carousel.min.css",'all');
	wp_enqueue_style('owlcarousel-style');

	wp_register_style('owlcarousel1-style',THEME_URL."/assets/owlcarousel/assets/owl.theme.default.min.css",'all');
	wp_enqueue_style('owlcarousel1-style');


	// wp_register_style('font-style',THEME_URL."/css/font-awesome.min.css",'all');
	// wp_enqueue_style('font-style');

	// wp_register_style('topicon-style',THEME_URL."/top-css.css",'all');
	// wp_enqueue_style('topicon-style');



}
add_action('wp_enqueue_scripts','tuanpham_style');

function wpdocs_scripts_method() {
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/js/jquery-3.3.1.min.js', array( 'jquery') );
      wp_enqueue_script( 'btscript', get_template_directory_uri() . '/js/app.js', array ( 'jquery' ));
      wp_enqueue_script( 'vendors', get_template_directory_uri() . '/assets/vendors/jquery.min.js', array ( 'jquery' ));
      wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/assets/owlcarousel/owl.carousel.js', array ( 'jquery' ));
}
add_action( 'wp_enqueue_scripts', 'wpdocs_scripts_method' );




if(!function_exists('tuanpham_url')){ 
	function tuanpham_url(){
		return get_site_url()."/wp-content/themes/auviet/";
	}
}

/**

Required: set ‘ot_theme_mode’ filter to true.
*/
add_filter( 'ot_theme_mode', '__return_true' );
/**

Required: include OptionTree.
*/
require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );

/*
 * WordPress Breadcrumbs
 * author: TP - Edit WP.vn
 * version: 2017.25.02
 * license: MIT
*/
function breadcrumbs() {
	/* === OPTIONS === */
	$text['home']     = 'Trang chủ'; // text for the 'Home' link
	$text['category'] = 'Bài của chuyên mục %s'; // text for a category page
	$text['search']   = 'Kết quả tìm kiếm %s'; // text for a search results page
	$text['tag']      = 'Từ khóa %s'; // text for a tag page
	$text['author']   = 'Tất cả bài viết của %s'; // text for an author page
	$text['404']      = 'Lỗi 404'; // text for the 404 page
	$text['page']     = 'Trang %s'; // text 'Page N'
	$text['cpage']    = 'Trang bình luận %s'; // text 'Comment Page N'
	$wrap_before    = '<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">'; // the opening wrapper tag
	$wrap_after     = '</div><!-- .breadcrumbs -->'; // the closing wrapper tag
	$sep            = '›'; // separator between crumbs
	$sep_before     = '<span class="sep">'; // tag before separator
	$sep_after      = '</span>'; // tag after separator
	$show_home_link = 1; // 1 - show the 'Home' link, 0 - don't show
	$show_on_home   = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
	$show_current   = 1; // 1 - show current page title, 0 - don't show
	$before         = '<span class="current k75breadcrumbs">'; // tag before the current crumb
	$after          = '</span>'; // tag after the current crumb
	/* === END OF OPTIONS === */
	global $post;
	$home_url       = home_url('/');
	$link_before    = '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
	$link_after     = '</span>';
	$link_attr      = ' itemprop="item"';
	$link_in_before = '<span itemprop="name" class="k75breadcrumbs">';
	$link_in_after  = '</span>';
	$link           = $link_before . '<a href="%1$s"' . $link_attr . '>' . $link_in_before . '%2$s' . $link_in_after . '</a>' . $link_after;
	$frontpage_id   = get_option('page_on_front');
	$parent_id      = ($post) ? $post->post_parent : '';
	$sep            = ' ' . $sep_before . $sep . $sep_after . ' ';
	$home_link      = $link_before . '<a href="' . $home_url . '"' . $link_attr . ' class="home">' . $link_in_before . $text['home'] . $link_in_after . '</a>' . $link_after;
	if (is_home() || is_front_page()) {
		if ($show_on_home) echo $wrap_before . $home_link . $wrap_after;
	} else {
		echo $wrap_before;
		if ($show_home_link) echo $home_link;
		if ( is_category() ) {
			$cat = get_category(get_query_var('cat'), false);
			if ($cat->parent != 0) {
				$cats = get_category_parents($cat->parent, TRUE, $sep);
				$cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
				$cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
				if ($show_home_link) echo $sep;
				echo $cats;
			}
			if ( get_query_var('paged') ) {
				$cat = $cat->cat_ID;
				echo $sep . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
			} else {
				if ($show_current) echo $sep . $before . sprintf($text['category'], single_cat_title('', false)) . $after;
			}
		} elseif ( is_search() ) {
			if (have_posts()) {
				if ($show_home_link && $show_current) echo $sep;
				if ($show_current) echo $before . sprintf($text['search'], get_search_query()) . $after;
			} else {
				if ($show_home_link) echo $sep;
				echo $before . sprintf($text['search'], get_search_query()) . $after;
			}
		} elseif ( is_day() ) {
			if ($show_home_link) echo $sep;
			echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $sep;
			echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F'));
			if ($show_current) echo $sep . $before . get_the_time('d') . $after;
		} elseif ( is_month() ) {
			if ($show_home_link) echo $sep;
			echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y'));
			if ($show_current) echo $sep . $before . get_the_time('F') . $after;
		} elseif ( is_year() ) {
			if ($show_home_link && $show_current) echo $sep;
			if ($show_current) echo $before . get_the_time('Y') . $after;
		} elseif ( is_single() && !is_attachment() ) {
			if ($show_home_link) echo $sep;
			if ( get_post_type() != 'post' ) {
				$post_type = get_post_type_object(get_post_type());
				$slug = $post_type->rewrite;
				printf($link, $home_url . $slug['slug'] . '/', $post_type->labels->singular_name);
				if ($show_current) echo $sep . $before . get_the_title() . $after;
			} else {
				$cat = get_the_category(); $cat = $cat[0];
				$cats = get_category_parents($cat, TRUE, $sep);
				if (!$show_current || get_query_var('cpage')) $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
				$cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
				echo $cats;
				if ( get_query_var('cpage') ) {
					echo $sep . sprintf($link, get_permalink(), get_the_title()) . $sep . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
				} else {
					if ($show_current) echo $before . get_the_title() . $after;
				}
			}
		// custom post type
		} elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
			$post_type = get_post_type_object(get_post_type());
			if ( get_query_var('paged') ) {
				echo $sep . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
			} else {
				if ($show_current) echo $sep . $before . $post_type->label . $after;
			}
		} elseif ( is_attachment() ) {
			if ($show_home_link) echo $sep;
			$parent = get_post($parent_id);
			$cat = get_the_category($parent->ID); $cat = $cat[0];
			if ($cat) {
				$cats = get_category_parents($cat, TRUE, $sep);
				$cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
				echo $cats;
			}
			printf($link, get_permalink($parent), $parent->post_title);
			if ($show_current) echo $sep . $before . get_the_title() . $after;
		} elseif ( is_page() && !$parent_id ) {
			if ($show_current) echo $sep . $before . get_the_title() . $after;
		} elseif ( is_page() && $parent_id ) {
			if ($show_home_link) echo $sep;
			if ($parent_id != $frontpage_id) {
				$breadcrumbs = array();
				while ($parent_id) {
					$page = get_page($parent_id);
					if ($parent_id != $frontpage_id) {
						$breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
					}
					$parent_id = $page->post_parent;
				}
				$breadcrumbs = array_reverse($breadcrumbs);
				for ($i = 0; $i < count($breadcrumbs); $i++) {
					echo $breadcrumbs[$i];
					if ($i != count($breadcrumbs)-1) echo $sep;
				}
			}
			if ($show_current) echo $sep . $before . get_the_title() . $after;
		} elseif ( is_tag() ) {
			if ( get_query_var('paged') ) {
				$tag_id = get_queried_object_id();
				$tag = get_tag($tag_id);
				echo $sep . sprintf($link, get_tag_link($tag_id), $tag->name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
			} else {
				if ($show_current) echo $sep . $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
			}
		} elseif ( is_author() ) {
			global $author;
			$author = get_userdata($author);
			if ( get_query_var('paged') ) {
				if ($show_home_link) echo $sep;
				echo sprintf($link, get_author_posts_url($author->ID), $author->display_name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
			} else {
				if ($show_home_link && $show_current) echo $sep;
				if ($show_current) echo $before . sprintf($text['author'], $author->display_name) . $after;
			}
		} elseif ( is_404() ) {
			if ($show_home_link && $show_current) echo $sep;
			if ($show_current) echo $before . $text['404'] . $after;
		} elseif ( has_post_format() && !is_singular() ) {
			if ($show_home_link) echo $sep;
			echo get_post_format_string( get_post_format() );
		}
		echo $wrap_after;
	}
} // end of kenh76_breadcrumbs()