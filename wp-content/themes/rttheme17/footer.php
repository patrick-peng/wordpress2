	<!-- footer --> 
	
		<div class="content fullwidth clearfix">
			<div class="footer_widgets"> 
			<div class="box box-shadow two first footer widget widget_text" style="width: 220px;margin:0 !important">
        <div class="featured">
          <div class="title">
            <h3>About US</h3>
            <div class="space margin-b10"></div>
          </div>
         <div class="textwidget"><div class="featured"><div class="title"><div class="space margin-b10"></div></div>
           <ul style="list-style-type:none;margin: 0 0 20px 0;">
              <li class="cat-item cat-item-15"><a href="http://127.0.0.1/wordpress/?cat=15" title="View all posts filed under Another Blog Category">Another Blog Category</a>
            </li>
              <li class="cat-item cat-item-16"><a href="http://127.0.0.1/wordpress/?cat=16" title="View all posts filed under Latest News">Latest News</a>
            </li>
              <li class="cat-item cat-item-17"><a href="http://127.0.0.1/wordpress/?cat=17" title="View all posts filed under Post Types">Post Types</a>
            </li>
              <li class="cat-item cat-item-1"><a href="http://127.0.0.1/wordpress/?cat=1" title="View all posts filed under Uncategorized">Uncategorized</a>
            </li>
                </ul>
				</div></div>
		</div></div><div class="box box-shadow two first footer widget widget_text" style="
    width: 220px;margin:0 !important
"><div class="featured"><div class="title"><h3>Support</h3><div class="space margin-b10"></div></div>			<div class="textwidget"><div class="featured"><div class="title"><div class="space margin-b10"></div></div>		
	<ul style="list-style-type:none;margin: 0 0 20px 0;">
		<li class="cat-item cat-item-15"><a href="http://127.0.0.1/wordpress/?cat=15" title="View all posts filed under Another Blog Category">Another Blog Category</a>
	</li>
		<li class="cat-item cat-item-16"><a href="http://127.0.0.1/wordpress/?cat=16" title="View all posts filed under Latest News">Latest News</a>
	</li>
		<li class="cat-item cat-item-17"><a href="http://127.0.0.1/wordpress/?cat=17" title="View all posts filed under Post Types">Post Types</a>
	</li>
		<li class="cat-item cat-item-1"><a href="http://127.0.0.1/wordpress/?cat=1" title="View all posts filed under Uncategorized">Uncategorized</a>
	</li>
	</ul>
</div></div>
		</div></div><div class="box box-shadow two first footer widget widget_text" style="width: 420px;margin:0 !important;height: 142px;"><div class="featured"><div class="title"><h3>Socialise With Us</h3><div class="space margin-b10"></div></div>			<div class="textwidget"><div class="featured"><div class="title"><div class="space margin-b10"></div></div>
        	<?php 
				//social media icons
				if(get_option(THEMESLUG.'_social_media_bottom')){
					echo do_shortcode("[rt_social_media_icons]");
				}
				?>
        <h4>Join our Free Newsletter</h4>
        <form action="/" method="post">
          <input type="text" name="email" placeholder="Enter Your Email Address" style="width: 75%;padding: 8px;"/>
          <input type="submit" value="提交" style="padding: 10px;"/>
        </form>
</div></div>
		</div></div>		
			</div> 			
		</div>
	

	<div class="footer_pos_fix">
	<div class="transparent-line footer" style="background:none"></div>
	</div><br clear="all"/>
	<div id="footer" class="box-shadow">

	<footer>
	 
		<!-- footer info -->
		<div class="footer_info" style="text-align: center;">		
				
				<!-- left side -->
				<div class="part1" style="float:none">
					<!-- copyright text -->
					<div class="copyright"><?php //echo do_shortcode(wpml_t(THEMESLUG, 'Footer Copyright Text', get_option(THEMESLUG.'_footer_copy')));?>
					<?php echo get_option('xiangloveqin_copyright'); ?>
					</div><!-- / end div .copyright -->				
					
				</div><!-- / end div .part1 -->
				
				<!-- social media icons -->				
			<!-- / end ul .social_media_icons -->

		</div><!-- / end div .footer_info -->
		
	</footer>
	<div class="clear"></div>
	</div><!--! end of div #footer -->
	</div><!--! end of div .footer_pos_fix -->

  </div><!-- end div #container -->

<?php echo get_option( THEMESLUG.'_google_analytics');?> 
<?php echo get_option(THEMESLUG.'_space_for_footer');?>
<?php wp_footer(); ?>
</body>
</html> 