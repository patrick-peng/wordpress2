<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head> 
<meta charset="<?php bloginfo( 'charset' ); ?>" />  
<?php if(!get_option( THEMESLUG."_close_responsive")):?><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, text-size=normal"><?php endif;?>
	
<title><?php if (is_home() || is_front_page() ): bloginfo('name'); else: wp_title('');endif; ?></title>
  <link rel='stylesheet' id='font_awesome_styles-css'  href='<?php bloginfo('template_url'); ?>/css/font-awesome.min.css?ver=r.9.1' type='text/css' media='all' />
<?php if (get_option( 'rttheme_favicon_url')):?><link rel="icon" type="image/png" href="<?php echo get_option( 'rttheme_favicon_url');?>"><?php endif;?>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); //thread comments?>		

<?php echo get_option(THEMESLUG.'_space_for_head');?>

<?php 
#
# Add specific CSS class by filter
#
add_filter('body_class','rt_body_class_name');
?>
<?php wp_head(); ?>

 <style>#container .rev_slider_wrapper, body #container .rev_slider {
 width: 980px !important;
}</style>
</head>
<body <?php body_class(); ?>>

<?php
#
#	Variables for javascript
#
echo '
<script type="text/javascript">
/* <![CDATA[ */
	var rttheme_template_dir = "'.THEMEURI.'";  
/* ]]> */	
</script>
';
?>
	
<?php
#
# Static 100% & Randomized Backgrounds
#

// meta values for current post 
if( !is_archive() && !is_search() && !is_404() && !is_category() && isset($post->ID)){
$background_image= @get_post_meta( $post->ID, THEMESLUG . "_background_image_url", true );
$randomized_banckground_images =  trim(@get_post_meta( $post->ID, THEMESLUG . "_background_image_urls", true ));
$full_width_background =	@get_post_meta( $post->ID, THEMESLUG . "_full_width_background", true );
}

// default values
if( ( !isset($background_image) || empty($background_image) ) && ( !isset($randomized_banckground_images) || empty($background_image)) ){
	$background_image= get_option( THEMESLUG.'_background_image_url' );
	$randomized_banckground_images =  trim(get_option( THEMESLUG.'_background_image_urls'));
	$full_width_background = get_option( THEMESLUG.'_full_width_background' );
} 

if($full_width_background && ( $background_image || $randomized_banckground_images) ){
	
	//Static 100% Bakcround
	if($background_image && !$randomized_banckground_images){
		echo '<img src="'.$background_image.'" alt="" id="background" />';	
	}

	//Randomized 100% Backgrounds
	if($randomized_banckground_images){
	    $random_background = trim(preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $randomized_banckground_images)); 
	    $images=explode("\n",  $random_background);    
	    $random_number = rand(0, count($images)-1);    
	    echo '<img src="'.$images[$random_number].'" alt="" id="background" />'; 
	}	
}
?>


<?php if(!get_option(THEMESLUG.'_hide_woo_cart') && class_exists( 'Woocommerce' )):?>
<?php global $woocommerce; ?>
    <div id="rt_woo_links" style="top: 0px; opacity: 1; right: 20px !important;">
	   <ul>
		  <li class="icon_cart_contents"><a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'rt_theme'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'rt_theme'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?></a></li>
		  <?php if ( is_user_logged_in() ) { ?>
		  <li class="user"><a href="<?php echo get_permalink( wpml_page_id(get_option('woocommerce_myaccount_page_id')) ); ?>" title="<?php _e('My Account','rt_theme'); ?>"><?php _e('My Account','rt_theme'); ?></a></li>
		  <li class="logout"><a href="<?php echo wp_logout_url(home_url('/')); ?>" title="<?php _e('Logout','rt_theme'); ?>"><?php _e('Logout','rt_theme'); ?></a></li>
	   <?php }
	    else { ?>
		  <li class="login"><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Login / Register','rt_theme'); ?>"><?php _e('Login / Register','rt_theme'); ?></a></li>
	   <?php } ?>
	   </ul>
    </div>
<?php $theWPML = "true";?>
<?php endif;?>

<?php if(get_option(THEMESLUG.'_show_flags') && function_exists('icl_get_languages')):?>
	<!-- / flags -->	
	<div id="wpml_flags">
	    <?php languages_list();?>		  
 	</div>
	<!-- / flags -->
<?php $theWPML = "true";?>
<?php endif;?>



<!-- background wrapper -->
 
<div id="container" class="extrapadding" style="padding:0">
	<!-- <div id="container" class="extrapadding2"> -->
	<div id="container">
	<!-- content wrapper -->	
	<div class="content-wrapper box-shadow margin-b30" style="margin-bottom:0px !important">	
	<!-- <div class="content-wrapper"> -->
		<!-- header -->
		<div id="header" style="height: 180px;width:100%"><header>
			<?php
				global $logo_container;
				$logo_container = get_option(THEMESLUG.'_logo_container');
				$logo_url		= get_option('rttheme_logo_url');
			?>
			<!-- logo -->
      <div style="float:left;width:25%;height:110px;overflow: hidden;margin:10px">
        <a href="<?php echo BLOGURL; ?>" title="<?php echo bloginfo('name');?>"><img src="<?php echo $logo_url; ?>" alt="<?php echo bloginfo('name');?>" /></a>
      </div>
<?php $TopSocialIcons = "true";?>

      <div style="float:right;width:62%;overflow:hidden;margin-top:25px;height:110px;text-decoration:none;">
      		<div style="height:108px;margin-top:8px">
      			<div style="width:33%;float:left;height:108px">
      				<div style="width: 40%;margin:18px 0 0 13px;float:left"><a href="<?php echo get_option('xiangloveqin_facebook_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/facebook.png"></a>
      				</div>
      				<div style="margin: 35px 0;font-size: 13px;word-wrap: break-word;"><a href="<?php echo get_option('xiangloveqin_facebook_url'); ?>" style="text-decoration:none;">Plese Contact Us On Facebook</a></div>
      			</div>
      			<div style="width:33%;float:left;height:108px">
      				<div style="width: 40%;margin:18px 0 0 13px;float:left"><a href="<?php echo get_option('xiangloveqin_livecat_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/onlinechat.png"></a>
      				</div>
      				<div style="margin: 35px 0;font-size: 13px;word-wrap: break-word;"><a href="<?php echo get_option('xiangloveqin_livecat_url'); ?>" style="text-decoration:none;">Plese Contact Us On LiveChat</a></div>
      			</div>
      			<div style="width:33%;float:left;height:108px">
      				<div style="width: 40%;margin:18px 0 0 13px;float:left"><a href="mailto:<?php echo get_option('xiangloveqin_email_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/email.png"></a>
      				</div>
      				<div style="margin: 35px 0;font-size: 13px;word-wrap: break-word;"><a href="mailto:<?php echo get_option('xiangloveqin_email_url'); ?>" style="text-decoration:none;">Plese Contact Us On Email</a></div>
      			</div>
      		</div>
      </div>
			<!-- / end div #logo -->
      <!-- seacrh form-->
        <div style="float:left;width: 28%">
      		 <form method="get" id="searchform" action="<?php echo home_url(); ?>/" >
        
<div style="float:left"> <input type="text"  name="s" id="s" placeholder="Search Products" style="padding: 6px; margin:10px 0;width:210px "/></div>
<div style="float:left"><button type="submit"  class="fa fa-search" style="float;left;margin-top: 10px;padding: 8px;border: 1px solid #F0F0F0;background: #fff;/* margin-left: -190px; */position: relative;"  value=""></button></div>
 
          </form>
      	</div> 
			<!-- navigation --> 
			<nav><div id="navigation_bar" class="navigation"  style="top: 11px">
	 
	 		<?php if ( has_nav_menu( 'rt-theme-main-navigation' ) ): ?>
					<!-- Standart Menu -->
					<?php            
					//call the main menu
					$menuVars = array(
						'menu_id'         => "navigation", 
						'echo'            => false,
						'container'       => '', 
						'container_class' => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'container_id'    => '', 
						'theme_location'  => 'rt-theme-main-navigation' 
					);
					
					$main_menu=wp_nav_menu($menuVars);
					echo ($main_menu);
					?>
					<!-- / Standart Menu --> 

					<!-- Mobile Menu --> 
					<?php            
					//call the main menu once again for mobile navigation
					$MobilemenuVars = array(
						'menu_id'         => "MobileMainNavigation", 
						'echo'            => false,
						'container'       => 'div', 
						'container_class' => '', 
						'container_id'    => 'MobileMainNavigation-Background', 
						'theme_location'  => 'rt-theme-main-navigation', 
						'dropdown_title'  => __('-- Main Menu --',"rt_theme"), 
						'indent_string'   => '- ', 
						'indent_after'    => '' 
					);
					
					$mobile_menu=dropdown_menu($MobilemenuVars);
					echo ($mobile_menu);
					?>
 					<!-- / Mobile Menu -->    
			<?php else:?>
					<!-- Standart Menu -->
					<?php            
					//call the main menu
					$menuVars = array(
						'menu'            => 'RT Theme Main Navigation Menu',  
						'menu_id'         => "navigation", 
						'echo'            => false,
						'container'       => '', 
						'container_class' => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'container_id'    => '', 
						'theme_location'  => 'rt-theme-main-navigation' 
					);
					
					$main_menu=wp_nav_menu($menuVars);
					echo ($main_menu);
					?>
					<!-- / Standart Menu --> 

					<!-- Mobile Menu --> 
					<?php            
					//call the main menu once again for mobile navigation
					$MobilemenuVars = array(
						'menu'            => 'RT Theme Main Navigation Menu',  
						'menu_id'         => "MobileMainNavigation", 
						'echo'            => false,
						'container'       => 'div', 
						'container_class' => '', 
						'container_id'    => 'MobileMainNavigation-Background', 
						'theme_location'  => 'rt-theme-main-navigation', 
						'dropdown_title'  => __('-- Main Menu --',"rt_theme"), 
						'indent_string'   => '- ', 
						'indent_after'    => '' 
					);
					
					$mobile_menu=dropdown_menu($MobilemenuVars);
					echo ($mobile_menu);
					?>
 					<!-- / Mobile Menu -->    
 			<?php endif;?>

			</div></nav>
			<!-- / navigation  -->
			
		</header></div><!-- end div #header -->		 
		
	</div><!-- / end div content-wrapper --> 
