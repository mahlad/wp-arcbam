<?php 
/*-----------Marketting Post type----------*/
add_action('init','creat_marketting_type');
function creat_marketting_type(){
	$lables_mr=array(
		'name' => 'تبلیغات',
		'singular_name' => 'تبلیغات',
		'add_new' => 'افزودن تبلیغات',
		'add_new_item' => 'افزودن تبلیغ جدید',
		'edit_item' => 'ویرایش تبیلغ',
		'new_item' => 'تبلیغ جدید',
		'view_item' => 'نمایش تبلیغ',
		'search_items' => 'جستجوی تبلیغ',
		'not_found' => 'تبلیغ مورد نظر یافت نشد',
		'not_found_in_trash' => 'تبلیغ مورد نظر در زباله دان یافت نشد',
		'parent_item_colon' => 'تبلیغ',
		'menu_name' => 'تبلیغات'
		);
	$args_mr=array(
		'label' => 'تبلیغات',
		'labels' => $lables_mr,
		'description' => 'این قسمت برای تبلیغات شرکت ها طراحی شده است',
		'public' => true,
		'exclude_from_search' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'menu_position' => 25,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array('title','thumbnail'),
		'rewrite' => array('slug' => 'marketting'),
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,

		);
	register_post_type('marketting', $args_mr);
	add_post_type_support( 'marketting', 'thumbnail' );
}
/*--------Upload Metaboxe---------*/
add_action('post_edit_form_tag','update_edit_form');
add_action('load-post.php','upload_metabox_setup');
add_action('load-post-new.php', 'upload_metabox_setup' );
add_action('save_post','metabox_save',10,1);
function update_edit_form(){
	echo 'enctype="multipart/form-data"';
}
function upload_metabox_setup(){
	add_meta_box(
		'upload',
		'لوگوی شرکت',
		'upload_metabox_content',
		'marketting',
		'advanced',
		);
}
function upload_metabox_content($object){
	$up_picture=get_post_meta($object->ID,'up_picture',true);
	if($up_picture['url']){
		$img=$up_picture['url'];
		echo '<div id="up_picture"><a href="'.$img.'" target="_blank"><img src="'.$img.'"></a></div>';
	}
}
 ?>