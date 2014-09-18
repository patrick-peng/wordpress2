<?php  
/* 
Template Name:首页模板
*/  
?> 
<?php get_header(); ?>
<style type="text/css">
	.img_width{overflow: hidden;width: 240px;height: 150px}
	.a_none{text-decoration:none;}
	.product_title{text-align:center;margin:0 auto;width: 100px;background-color: white;padding: 5px 20px;border-radius: 4px;color:black;}
	.product_box{padding: 5px 10px;position: relative;z-index: 999;margin-top: -38px;text-align:center;font-size:16px}
</style>
<div style="width:980px;margin:0 auto">
	<?php 
		$slider_name=get_option('xiangloveqin_slider_name');
	if(!empty($slider_name)){
		putRevSlider($slider_name);
	}else{
		echo '<img src="http://localhost/wordpress/wp-content/uploads/2014/07/slider11.jpg" style="width: 980px;height: 300px;overflow: hidden;">';
	}
	?>
	<div style="height:225px;width:980px;margin-top:10px">
		<div style="width:315px;height:210px;float:left;background-color:#fff" class="box-shadow">
			<div style="margin-top:10px;margin-left:10px;"><h3 style="color:#8291cc">Professional Customer Support</h3></div>
			<div style="margin-left:10px;width:60%;float:left">Buying from China is so easy and simple at IM Color. We direct you for every step.<br/><a href="<?php echo get_option('xiangloveqin_box_left'); ?>">Find out more</a></div>
			<div style="width:30%;float:left"><img src="http://127.0.0.1/wordpress/wp-content/uploads/2014/07/HighQuality1.jpg">
			</div>
		</div>
		<div style="width:315px;height:210px;float:left;background-color:#fff;margin:0 16px" class="box-shadow">
			<div style="margin-top:10px;margin-left:10px;"><h3 style="color:#8291cc">Quality Guarantee</h3></div>
			<div style="margin-left:10px;width:60%;float:left">We deeply understand QUALITY is what you care most, and this is what we can offer you—100% quality guarantee.<br/><a href="<?php echo get_option('xiangloveqin_box_center'); ?>">Find out more</a></div>
			<div style="width:30%;float:left"><img src="http://127.0.0.1/wordpress/wp-content/uploads/2014/07/TimelyDelivery1.jpg">
			</div>		</div>
		<div style="width:315px;height:210px;float:right;background-color:#fff" class="box-shadow">
			<div style="margin-top:10px;margin-left:10px;"><h3 style="color:#8291cc">Cost Saving</h3></div>
			<div style="margin-left:10px;width:60%;float:left">Cheap cost in China but poor quality?  --- This is NOT the fact…You can save more than ordering locally without giving up quality from here IM Color.<br/><a href="<?php echo get_option('xiangloveqin_box_right'); ?>">Find out more</a></div>
			<div style="width:30%;float:left"><img src="http://127.0.0.1/wordpress/wp-content/uploads/2014/07/edominded1.jpg">
			</div>
		</div>
	</div>
	<!-- Feature products -->
	<h2 style="margin:10px">Feature products</h2>

	<div style="height:330px;width:980px">
		<div>
			<div style="width:240px;height:150px;overflow: hidden;margin-right:7px;float:left;"><a href="<?php echo get_option('xiangloveqin_product_url_1'); ?>">
			<img src="http://127.0.0.1/wordpress/wp-content/uploads/2014/07/test1-1.jpg" class="img_width"></a>
				<div class="product_box"><a href="<?php echo get_option('xiangloveqin_product_url_1'); ?>" class="a_none" ><div class="product_title"><?php echo get_option('xiangloveqin_product_title_1'); ?></div></a>
				</div>
			</div>
			<div style="width:240px;height:150px;overflow: hidden;margin-right:7px;float:left;"><a href="<?php echo get_option('xiangloveqin_product_url_2'); ?>">
			<img src="http://127.0.0.1/wordpress/wp-content/uploads/2014/07/test1-2.jpg" class="img_width"></a>
				<div class="product_box"><a href="<?php echo get_option('xiangloveqin_product_url_2'); ?>" class="a_none"><div class="product_title"><?php echo get_option('xiangloveqin_product_title_2'); ?></div></a>
				</div>
			</div>
			<div style="width:240px;height:150px;overflow: hidden;margin-right:6px;float:left;"><a href="<?php echo get_option('xiangloveqin_product_url_3'); ?>">
			<img src="http://127.0.0.1/wordpress/wp-content/uploads/2014/07/test1-3.jpg" class="img_width"></a>
				<div class="product_box"><a href="<?php echo get_option('xiangloveqin_product_url_3'); ?>" class="a_none"><div class="product_title"><?php echo get_option('xiangloveqin_product_title_3'); ?></div></a>
				</div>
			</div>
			<div style="width:240px;height:150px;overflow: hidden;float:right;">
			<a href="<?php echo get_option('xiangloveqin_product_url_4'); ?>">
				<img src="http://127.0.0.1/wordpress/wp-content/uploads/2014/07/test1-4.jpg" class="img_width">
				</a>
				<div class="product_box"><a href="<?php echo get_option('xiangloveqin_product_url_4'); ?>" class="a_none"><div class="product_title"><?php echo get_option('xiangloveqin_product_title_4'); ?></div></a>
				</div>
			</div>
		</div><br clear="all" />
		<div style="margin-top:10px">
			<div style="width:240px;height:150px;overflow: hidden;margin-right:7px;float:left;"><a href="<?php echo get_option('xiangloveqin_product_url_5'); ?>">	
			<img src="http://127.0.0.1/wordpress/wp-content/uploads/2014/07/test1-5.jpg" class="img_width"></a>
				<div class="product_box"><a href="<?php echo get_option('xiangloveqin_product_url_5'); ?>" class="a_none"><div class="product_title"><?php echo get_option('xiangloveqin_product_title_5'); ?></div></a>
				</div>
			</div>
			<div style="width:240px;height:150px;overflow: hidden;margin-right:7px;float:left;"><a href="<?php echo get_option('xiangloveqin_product_url_6'); ?>">
			<img src="http://127.0.0.1/wordpress/wp-content/uploads/2014/07/test1-6.jpg" class="img_width"></a>
				<div class="product_box"><a href="<?php echo get_option('xiangloveqin_product_url_6'); ?>" class="a_none"><div class="product_title"><?php echo get_option('xiangloveqin_product_title_6'); ?></div></a>
				</div>
			</div>
			<div style="width:240px;height:150px;overflow: hidden;margin-right:6px;float:left;"><a href="<?php echo get_option('xiangloveqin_product_url_7'); ?>"><img src="http://127.0.0.1/wordpress/wp-content/uploads/2014/07/test1-7.jpg" class="img_width"></a>
				<div class="product_box"><a href="<?php echo get_option('xiangloveqin_product_url_7'); ?>" class="a_none"><div class="product_title"><?php echo get_option('xiangloveqin_product_title_7'); ?></div></a>
				</div>
			</div>
			<div style="width:240px;height:150px;overflow: hidden;float:right;">
				<a href="<?php echo get_option('xiangloveqin_product_url_8'); ?>">
				<img src="http://127.0.0.1/wordpress/wp-content/uploads/2014/07/test1-8.jpg" class="img_width">
				</a>
				<div class="product_box"><a href="<?php echo get_option('xiangloveqin_product_url_8'); ?>" class="a_none"><div class="product_title"><?php echo get_option('xiangloveqin_product_title_8'); ?></div></a>
				</div>
			</div>
		</div>	
		</div>
	</div>
</div>
<div style="margin-top:20px"></div>
<?php get_footer(); ?>
