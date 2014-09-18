<?php
/**
 * Description tab
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce, $post;

$heading = esc_html( apply_filters( 'woocommerce_product_description_heading', __( 'Product Description', 'woocommerce' ) ) );
?>

<!--h2><?php //echo $heading; ?></h2-->
<form action="<?php bloginfo('template_url'); ?>/product_save.php" method="post" > 
<input type="hidden" name="title" value="<?php the_title(); ?>" />
<?php 
	global $wp;
$current_url = home_url(add_query_arg(array()));
echo '<input type="hidden" name="the_url" value="'.$current_url.'" />';
?>
<?php the_content(); ?>
<br clear="all" />
<br clear="all" />
    <div style="margin:0 10px;">
       <fieldset style="border:1px solid #F0F0F0;border-radius: 4px">
            <legend style="margin-left:10px">Your Information</legend>
              <div style="margin-left:10px;margin-top:10px">
              <lable>E-mail</lable> 
                  <input type="text" name="product_email" placeholder="Enter you email address !" required style="width:265px"/>
              <!--div class="bbt">Custom Parameters</div>
                    <textarea id="product_case" name="product_case" rows="5" required placeholder="Please enter your custom parameters, or if you want to say!"></textarea-->
              <input type="submit" value="Submit" style="padding: 20px 120px;
font-size: 18px;
letter-spacing:2px;
line-height: 1.33;
border-radius: 6px;
color: #fff;
background-color: #428bca;
display: inline-block;
margin-bottom: 0;
font-size: 14px;
font-weight: 400;
line-height: 1.42857143;
background-image: none;
border: 1px solid transparent;
border-radius: 4px;
cursor: pointer;margin-top:10px;margin-bottom:10px;text-align:center"/>
              </div>
       </fieldset>    
   </div>
</form>
	<script src="http://cdn.bootcss.com/jquery/2.1.1-rc2/jquery.min.js"></script>
	<script type="text/javascript">
	$("#quantity").click(function(){
			var xc1=$("#quantity").val();
			if(xc1 == "custom"){
				$("#quantity1").css("display","block");
			}else{
				$("#quantity1").css("display","none");
			}
	});
	$("#size").click(function(){
			var xc1=$("#size").val();
			if(xc1 == "custom"){
				$("#size1").css("display","block");
			}else{
				$("#size1").css("display","none");
			}
	});
	$("#pages").click(function(){
			var xc1=$("#pages").val();
			if(xc1 == "custom"){
				$("#pages1").css("display","block");
			}else{
				$("#pages1").css("display","none");
			}
	});
	</script>
