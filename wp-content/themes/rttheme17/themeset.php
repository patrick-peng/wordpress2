<?php
//创建自定义表用于存储用户提交数据
        
function my_table_install () { 
    global $wpdb,$table_name;
    $table_name = $wpdb->prefix . "sixsir";  //获取表前缀，并设置新表的名称
    if($wpdb->get_var("show tables like $table_name") != $table_name) {  //判断表是否已存在
        $sql = "CREATE TABLE " . $table_name . " (
          id int(9) NOT NULL AUTO_INCREMENT,
          title varchar(32) NOT NULL,
          time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
          email varchar(32) NOT NULL,
          content text NOT NULL,
          productcase text NOT NULL,
          UNIQUE KEY id (id)
          );";
		
 		require_once(ABSPATH . "wp-admin/includes/upgrade.php");  //引用wordpress的内置方法库
        dbDelta($sql);
    }
} 

my_table_install();

//查询所有的提交

if($_POST['custom_index_set'] == 'true'){ update_custom_index_set(); }

function update_custom_index_set(){
    $xiangloveqin_facebook=$_POST['facebook'];
    $xiangloveqin_livecat=$_POST['livecat'];
    $xiangloveqin_eamil=$_POST['email'];
    $xiangloveqin_box_left=$_POST['box_left'];
    $xiangloveqin_box_center=$_POST['box_center'];
    $xiangloveqin_box_right=$_POST['box_right'];
    $xiangloveqin_slider_name=$_POST['slider_name'];
    $xiangloveqin_copyright=$_POST['footer_copyright'];

      $product_index_url = array('1' =>'1' ,
            '2' =>'2' ,
            '3' =>'3' ,
            '4' =>'4' ,
            '5' =>'5' ,
            '6' =>'6' ,
            '7' =>'7' ,
            '8' =>'8' 
     );
    foreach ($product_index_url as $key => $value) {
        $product_title=$_POST['product_title_'.$key];
        $product_url=$_POST['product_url_'.$key];
        update_option('xiangloveqin_product_title_'.$key,$product_title);
        update_option('xiangloveqin_product_url_'.$key,$product_url);
    }

    $xiangloveqin_theme_option = array('xiangloveqin_facebook_url' => $xiangloveqin_facebook, 
            'xiangloveqin_livecat_url' => $xiangloveqin_livecat,
            'xiangloveqin_email_url' => $xiangloveqin_eamil,
            'xiangloveqin_box_left' => $xiangloveqin_box_left,
            'xiangloveqin_box_center' => $xiangloveqin_box_center,
            'xiangloveqin_box_right' => $xiangloveqin_box_right,
            'xiangloveqin_slider_name' => $xiangloveqin_slider_name,
            'xiangloveqin_copyright'=> $xiangloveqin_copyright
        );
        foreach ($xiangloveqin_theme_option as $key => $value) {
            update_option($key,$value);
        }
}
add_action('admin_menu', 'register_custom_menu_page');

function register_custom_menu_page(){

    add_menu_page('guanli', '订单管理', 'administrator', 'custompage', 'custom_menu_page', plugins_url('../../wp-content/plugins/wp-editor//images/wpeditor_logo_16.png'), 3);
    add_menu_page('system_set', '首页设置', 'administrator', 'system_set', 'custom_index_set', plugins_url('../../wp-content/plugins/wp-editor//images/wpeditor_logo_16.png'), 4);

}
function custom_index_set(){
?>
<style> 
.error{display:none}
.wrap,textarea,em{font-family:'Century Gothic','Microsoft YaHei',Verdana;}
em{
    float:left;
    width:45%;
    margin-left:15px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    line-height: 22px;
    color: #666666;
    text-decoration: none;
}
.submit { padding:10px;}
.bbt {
    width:100%;
    height:30px;
    font-size: 12px;
    line-height: 30px;
    color: #0066CC;
    float:left;
    padding-left:10px;
    text-decoration: none;
}
strong{font-size: 16px}
fieldset{width:100%;border:1px solid #aaa;padding-bottom:10px;margin-top:10px;-webkit-box-shadow:rgba(0,0,0,.2) 0px 0px 5px;-moz-box-shadow:rgba(0,0,0,.2) 0px 0px 5px;box-shadow:rgba(0,0,0,.2) 0px 0px 5px;}
 
legend{margin-left:5px;padding:0 5px;color:#2481C6;}

textarea{width:45%;font-size:11px; float:left; padding:0; border:1px solid #aaa;background:none;-webkit-box-shadow:rgba(0,0,0,.2) 1px 1px 2px inset;-moz-box-shadow:rgba(0,0,0,.2) 1px 1px 2px inset;box-shadow:rgba(0,0,0,.2) 1px 1px 2px inset;-webkit-transition:all .4s ease-out;-moz-transition:all .4s ease-out;}
 
textarea:focus{-webkit-box-shadow:rgba(0,0,0,.2) 0px 0px 8px;-moz-box-shadow:rgba(0,0,0,.2) 0px 0px 8px;box-shadow:rgba(0,0,0,.2) 0px 0px 8px;outline:none;}
.wrap .box h1{height:35px;background:#ebebeb;font-size: 18px;line-height: 35px; padding-left:15px;}
#lianx1,#lianx1_1 { width:35%; margin-right:10px;}
.jdt_1{
    width:auto;
    padding-right:20px;
    line-height: 35px;
    font-weight: normal;
    text-decoration: none;
    font-style: normal;
}
.text{width: 660px}
.w30{width: 600px;float: left;margin-bottom: 10px}
.w600{width: 600px}
#wpfooter{display: none;}
</style>
 
<div class="wrap">
<ul>
<form method="post" action="">
<li class="box"><h1>顶部</h1>
<div class="text">
    <fieldset>
    <legend><strong>社交媒体</strong></legend>
        <table class="form-table" style="margin-left:10px">
            <tr><td>
                <div class="bbt">FaceBook_URL</div>
                <input type="text" name="facebook" id="facebook" class="w600" value="<?php echo get_option('xiangloveqin_facebook_url'); ?>" /> 
            </td></tr>
            <tr><td>
                <div class="bbt">LiveCat_URL</div>
                <input type="text" name="livecat" id="livecat" class="w600" value="<?php echo get_option('xiangloveqin_livecat_url'); ?>" /> 
            </td></tr>
            <tr><td>
                <div class="bbt">Email</div>
                <input type="text" name="email" id="email" class="w600" value="<?php echo get_option('xiangloveqin_email_url'); ?>" /> 
            </td></tr>
        </table>
    </fieldset>
</div>
</li>
<li class="box"><h1>Revolution Sliders</h1>
<div class="text">
    <fieldset >
    <legend style="margin-bottom:10px"><strong>Sliders Name</strong></legend>
                <div class="w30" style="margin-left:20px">
                <span class="w30"></span>
                <input type="text" name="slider_name" id="slider_name" class="w600" value="<?php echo get_option('xiangloveqin_slider_name'); ?>" /> 
                </div>
    </fieldset>
</div>
</li>
<li class="box"><h1>中间</h1>
<div class="text">
    <fieldset >
    <legend style="margin-bottom:10px"><strong>三个盒子</strong></legend>
                <div class="w30" style="margin-left:20px">
                <span class="w30">Left</span>
                <input type="text" name="box_left" id="box_left" class="w600" value="<?php echo get_option('xiangloveqin_box_left'); ?>" /> 
                </div>
                <div class="w30" style="margin-left:20px">
                <span class="w30">Center</span>
                <input type="text" name="box_center" id="box_center" class="w600" value="<?php echo get_option('xiangloveqin_box_center'); ?>" /> 
                </div>
                <div class="w30" style="margin-left:20px">
                <span class="w30">Right</span>
                <input type="text" name="box_right" id="box_right" class="w600" value="<?php echo get_option('xiangloveqin_box_right'); ?>" /> 
                </div>
    </fieldset>
</div>
</li>
<li class="box"><h1>八个产品</h1>
<div class="text">
    <fieldset>
    <legend style="margin-bottom:10px"><strong>产品参数</strong></legend>
    <?php 
            $product_index_url = array('1' =>'1' ,
            '2' =>'2' ,
            '3' =>'3' ,
            '4' =>'4' ,
            '5' =>'5' ,
            '6' =>'6' ,
            '7' =>'7' ,
            '8' =>'8' 
     );
            foreach ($product_index_url as $key => $value) {
     ?>
                <div class="w30" style="margin-left:20px">
                    <span class="w30"><?php echo $value; ?></span>
                    <div><label>标题:</label>
                    <input type="text" name="product_title_<?php echo $value; ?>" id="product_<?php echo $value; ?>" value="<?php echo get_option('xiangloveqin_product_title_'.$value); ?>" style="margin-left:10px;width:400px"/></div>
                    <div><label>链接:</label>
                    <input type="text" name="product_url_<?php echo $value; ?>" id="product_<?php echo $value; ?>_url" style="margin-left:10px;width:500px" value="<?php echo get_option('xiangloveqin_product_url_'.$value); ?>"/>
                    </div>
                </div>
    <?php  } ?>
    </fieldset>
</div>
</li>
<li class="box"><h1>底部</h1>
<div class="text">
    <fieldset >
    <legend style="margin-bottom:10px"><strong>版权信息</strong></legend>
                <div class="w30" style="margin-left:20px">
                <textarea name="footer_copyright" id="footer_copyright" class="w600" style="background-color: white;height: 60px;"><?php echo get_option('xiangloveqin_copyright'); ?></textarea></div>
                </div>
    </fieldset>
</div>
</li>
    <p class="submit"> 
        <input type="submit" name="Submit" class="button-primary" value="保存设置" style="position: fixed;bottom:100px;margin-left:20px" /> 
        <input type="hidden" name="custom_index_set" value="true" style="display:none;" /> 
    </p>
</form>
</ul>
</div>
<?php
}

function custom_menu_page(){ 
	
?>
<style type="text/css">
	div.error{display: none}
</style>
<div style="margin: 5px 15px 2px;">
	<div style="margin:20px;font-size:18px;font-weight:bold">订单管理</div>
    <div>
        <table  id="tab1" border="1px" cellspacing="0" bordercolor="#666" cellpadding="0" width="99%">
    <tbody>
        <tr height="20">
        	<td bgcolor="#e74592" height="30" width="5%" align="middle">
                <span style="color:#fff">
                    <strong>
                        管理
                    </strong>
                </span>
            </td>
            <td bgcolor="#e74592" height="30" width="15%" align="middle">
                <span style="color:#fff">
                    <strong>
                        产品名称
                    </strong>
                </span>
            </td>
            <td bgcolor="#e74592" height="30" width="15%" align="middle">
                <span style="color:#fff">
                    <strong>
                        提交时间
                    </strong>
                </span>
            </td>
            <td bgcolor="#e74592" height="30" width="15%" align="middle">
                <span style="color:#fff">
                    <strong>
                        用户邮箱
                    </strong>
                </span>
            </td>
            <td bgcolor="#e74592" height="30" width="27.5%" align="middle">
                <span style="color:#fff">
                    <strong>
                        产品参数
                    </strong>
                </span>
            </td>
            <td bgcolor="#e74592" height="30" width="27.5%" align="middle">
                <span style="color:#fff">
                    <strong>
                        用户自定义
                    </strong>
                </span>
            </td>
        </tr>
 	<?php
        	global $wpdb,$table_name;
        	$post_query="select * from $table_name";
		$results =mysql_query($post_query);
		while ($rows=mysql_fetch_assoc($results)) { ?>
        <tr height="19">
        	<td bgcolor="#fff" height="18" width="5%" align="middle">
                <span style="color:#000">
                    <strong>
                          <a href="<?php bloginfo('template_url');?>/delete.php?id=<?php echo $rows['id'];?>&num=xiangloveqin_lxc">删除</a>
                    </strong>
                </span>
            </td>
            <td bgcolor="#fff" height="18" width="15%" align="middle">
                <span style="color:#000">
                    <strong>
                        <?php echo $rows['title'];?>
                    </strong>
                </span>
            </td>
            <td bgcolor="#fff" height="18" width="15%" align="middle">
                <span style="color:#000">
                    <strong>
                        <?php echo $rows['time'];?>
                    </strong>
                </span>
            </td>
            <td bgcolor="#fff" height="18" width="15%" align="middle">
                <span style="color:#000">
                    <strong><a href="mailto:<?php echo $rows['email'];?>"><?php echo $rows['email'];?></a>
                    </strong>
                </span>
            </td>
            <td bgcolor="#fff" height="18" width="27.5%" align="left" >
                <p style="color:#000;margin-left:10px">
                    <strong>
             		<?php echo $rows['content'];?>
                    </strong>
                </p>
            </td>
            <td bgcolor="#fff" height="18" width="27.5%" align="middle">
                <span style="color:#000">
                    <strong>
                    <?php echo $rows['productcase'];?>
                    </strong>
                </span>
            </td>
        </tr>
		<?php }   ?>
    </tbody>
</table>
	</div>
</div>
<?php
}
?>