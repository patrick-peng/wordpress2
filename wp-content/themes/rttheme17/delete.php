<?php
		if(isset($_GET['id'])&&$_GET['num']=='xiangloveqin_lxc'){
			require_once('../../../wp-blog-header.php');
			global $wpdb,$table_name;
			$id=$_GET['id'];
			$delete_query="delete from $table_name where id=$id";
			$wpdb->query($delete_query);
			header("Location: ../../../wp-admin/admin.php?page=custompage");
	}
?>