<?php 
	if(isset($_POST)){
		require_once('../../../wp-blog-header.php');
		global $wpdb;
		$table_name='wp_sixsir';
		$product['title']=$_POST['title'];
		$product['date']=date('Y-m-d H:i:s');
		$product['email']=$_POST['product_email'];
		$product['url']=$_POST['the_url'];
		if("custom"==$_POST['quantity']){
			$content='<b style="color:#0074a2">Quantity:</b>'.$_POST['quantity1'].'<br/>';
		}else{
			$content='<b style="color:#0074a2">Quantity:</b>'.$_POST['quantity'].'<br/>';}
		if(isset($_POST['folding_type'])){
			$content.='<b style="color:#0074a2">Folding_type:</b>'.$_POST['folding_type'].'<br/>';
		}
		if(isset($_POST['dusk_jacket'])){
			$content.='<b style="color:#0074a2">Dusk Jacket:</b>'.$_POST['dusk_jacket'].'<br/>';
		}
		if($_POST['size']=="custom"){
			$content.='<b style="color:#0074a2">Size:</b>'.$_POST['size1'].'<br/>';
		}else{
			$content.='<b style="color:#0074a2">Size:</b>'.$_POST['size'].'<br/>';
			}
		if("custom"==$_POST['pages']){
			$content.='<b style="color:#0074a2">Pages:</b>'.$_POST['pages1'].'<br/>';
		}else{
			$content.='<b style="color:#0074a2">Pages:</b>'.$_POST['pages'].'<br/>';
			}
		if(isset($_POST['binding'])){
			$content.='<b style="color:#0074a2">Bingding:</b>'.$_POST['binding'].'<br/>';
		}
		if(isset($_POST['printing_color'])){
			$content.='<b style="color:#0074a2">Printing_color_1:</b>'.$_POST['printing_color'].'<br/>';
		}
		if(isset($_POST['paper_stock_type'])){
			$content.='<b style="color:#0074a2">Paper_stock_type_1:</b>'.$_POST['paper_stock_type'].'<br/>';
		}
		if(isset($_POST['finishing'])){
			$content.='<b style="color:#0074a2">Finishing_Coating:</b>'.$_POST['finishing'].'<br/>';
		}
		if(isset($_POST['special_processing'])){
			$content.='<b style="color:#0074a2">Special_processing:</b>'.$_POST['special_processing'].'<br/>';
		}
		if(isset($_POST['printing_color_1'])){
			$content.='<b style="color:#0074a2">Printing_color_2:</b>'.$_POST['printing_color_1'].'<br/>';
		}
		if(isset($_POST['paper_stock_type_1'])){
			$content.='<b style="color:#0074a2">Paper_stock_type_2:</b>'.$_POST['paper_stock_type_1'].'<br/>';
		}
		if(isset($_POST['eletrionic_device'])){
			$content.='<b style="color:#0074a2">Eletrionic_Device:</b>'.$_POST['eletrionic_device'].'<br/>';
		}
		if(isset($_POST['sheets'])){
			$content.='<b style="color:#0074a2">Sheets:</b>'.$_POST['sheets'].'<br/>';
		}
		if(isset($_POST['punch_hole'])){
			$content.='<b style="color:#0074a2">Punch_Hole:</b>'.$_POST['punch_hole'].'<br/>';
		}
		if(isset($_POST['shapes'])){
			$content.='<b style="color:#0074a2">Shapes:</b>'.$_POST['shapes'].'<br/>';
		}
		if(isset($_POST['thickness'])){
			$content.='<b style="color:#0074a2">Thickness:</b>'.$_POST['thickness'].'<br/>';
		}
		if(isset($_POST['design'])){
			$content.='<b style="color:#0074a2">Design:</b>'.$_POST['design'].'<br/>';
		}
		if(isset($_POST['custom_shapes'])){
			$content.='<b style="color:#0074a2">Custom_shapes</b>'.$_POST['custom_shapes'].'<br/>';
		}
		if(isset($_POST['strings'])){
			$content.='<b style="color:#0074a2">Strings</b>'.$_POST['strings'].'<br/>';
		}
		if(isset($_POST['pocket'])){
			$content.='<b style="color:#0074a2">Pocket</b>'.$_POST['pocket'].'<br/>';
		}
		if(isset($_POST['hanger'])){
			$content.='<b style="color:#0074a2">Hanger</b>'.$_POST['hanger'].'<br/>';
		}		

		$product['content']=$content;
		$product['case']=$_POST['product_case'];
		$insert_sql = array('time' =>$product['date'],'title' =>$product['title'], 'email'=>$product['email'],'productcase' => $product['case'],'content' => $product['content']);
		$wpdb->insert($table_name,$insert_sql);
		echo '<script language="javascript">alert("Thank you for your quote ! \n\nAnd you can look at the other products.");window.location.href="'.$product['url'].'";</script>';
	}else{
		include '../404.php';
	}
?>
