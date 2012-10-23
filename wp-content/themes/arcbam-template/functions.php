<?php 
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
		'supports' => array('title','author','thumbnail','excerpt'),
		'rewrite' => array('slug' => 'marketting'),
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,

		);
	register_post_type('marketting', $args_mr);
}

 ?>