<?php
function my_table_install () { 
    global $wpdb,$table_name;
    $table_name = $wpdb->prefix . "sixsir";  //获取表前缀，并设置新表的名称
    if($wpdb->get_var("show tables like $table_name") != $table_name) {  //判断表是否已存在
        $sql = "CREATE TABLE " . $table_name . " (
          id int(9) NOT NULL AUTO_INCREMENT,
          title varchar(32) NOT NULL,
          time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
          email varchar(32) NOT NULL,
          product text NOT NULL,
          UNIQUE KEY id (id)
          );";
		echo $sql;
 		     require_once(ABSPATH . "wp-admin/includes/upgrade.php");  //引用wordpress的内置方法库
        dbDelta($sql);
    }
} 

my_table_install();

?>