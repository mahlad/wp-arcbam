<?php 
/*-----------General Settings----------*/
add_theme_support('post-thumbnails');
/*-----------Marketting Post type----------*/
add_action('init','creat_marketting_type');
function creat_marketting_type(){
	$labels=array(
		'name' => 'تبلیغات',
		'singular_name' => 'تبلیغات',
		'add_new' => 'افزودن تبلیغ',
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
	$args=array(
		'label' => 'تبلیغات',
		'labels' => $labels,
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
	register_post_type('marketting', $args);
	add_post_type_support( 'marketting', 'thumbnail' );
	
}
/*--------Upload Metaboxe---------*/

add_action('post_edit_form_tag', 'update_edit_form'); 
add_action('load-post.php', 'metabox_setup' );
add_action('load-post-new.php', 'metabox_setup' );
add_action('save_post', 'metabox_save', 10, 2 );


function update_edit_form() {  
    echo ' enctype="multipart/form-data"';  
}

function metabox_setup() {
	add_meta_box(
		'gsp_post_meta',
		'لوگوی شرکت',	
		'metabox_content',		
		'marketting',				
		'advanced',		
		'high'	
	);

}

function metabox_content($post){
	$profile_picture =  get_post_meta( $post->ID, 'profile_picture', true );
	if($profile_picture['url']){
		$img = $profile_picture['url'];
		echo '<div id="profile_picture"><a href="'.$img.'" target="_blank"><img src="'.$img.'"></a>
		</div>
		<br />';	
	}

?>
	<input id="wp_custom_attachment" name="wp_custom_attachment" value="" size="25" type="file">
 <?php
}


function metabox_save($post_id){
	if(!empty($_FILES['wp_custom_attachment']['name'])) {	
		$supported_types = array('image/gif','image/bmp','image/jpeg','image/png');  		
		$arr_file_type = wp_check_filetype(basename($_FILES['wp_custom_attachment']['name']));  
		$uploaded_type = $arr_file_type['type'];  
		if(in_array($uploaded_type, $supported_types)) {  
			$upload = wp_upload_bits($_FILES['wp_custom_attachment']['name'], null, file_get_contents($_FILES['wp_custom_attachment']['tmp_name'])); 
			if(isset($upload['error']) && $upload['error'] != 0) {  
				//wp_die('There was an error uploading your file. The error is: ' . $upload['error']);  
			} else {
				unset($upload['error']);
				$upload['file'] = str_replace(chr(92),"/",$upload['file']);
				update_post_meta($post_id ,'profile_picture', $upload);  
			}
		} else {
			//wp_die("The file type that you've uploaded is not a PDF.");  
		}
	} 
}
/*-----------Learn(Articles) Post type----------*/
add_action('init','craet_learn_type'); 
function craet_learn_type(){
	$labels=array(
		'name' => 'آموزش',
		'singular_name' => 'آموزش',
		'add_new' => 'افزودن مقاله(خبر)',
		'add_new_item' => 'افزودن مقاله(خبر) جدید',
		'edit_item' => 'ویرایش مقاله(خبر)',
		'new_item' => 'مقاله(خبر) جدید',
		'view_item' => 'نمایش مقاله(خبر)',
		'search_items' => 'جستجوی مقاله(خبر)',
		'not_found' => 'مقاله(خبر) مورد نظر یافت نشد',
		'not_found_in_trash' => 'مقاله(خبر) مورد نظر در زباله دان یافت نشد',
		'parent_item_colon' => 'مقاله(خبر)',
		'menu_name' => 'آموزش'
		);
	$args=array(
		'label' => 'آموزش',
		'labels' => $labels,
		'description' => 'در این قسمت می توان مقالات آموزشی یا اخبار جدید را قرار داد',
		'public' => true,
		'exclude_from_search' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'menu_position' => 25,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array('title','editor','excerpt','comments'),
		'rewrite' => array('slug' => 'learn'),
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,

		);
	register_post_type('learn', $args);
}
/*-----------Contact Post type----------*/
add_action('init','craet_contact_type');
function craet_contact_type(){
	$labels=array(
		'name' => 'اطلاعات تماس',
		'singular_name' => 'اطلاعات تماس',
		'edit_item' => 'ویرایش اطلاعات تماس',
		'view_item' => 'نمایش اطلاعات تماس',
		'menu_name' => 'اطلاعات تماس'
		);
	$args=array(
		'label' => 'اطلاعات تماس',
		'labels' => $labels,
		'description' => 'این قسمت فقط اطلاعات تماس خود را وارد نمایید',
		'public' => true,
		'exclude_from_search' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'menu_position' => 25,
		'capability_type' => 'page',
		'hierarchical' => false,
		'supports' => array('title','editor','thumbnail'),
		'rewrite' => array('slug' => 'contact'),
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,

		);
	register_post_type('contact',$args);
}
/*--------Contact Metaboxe---------*/
add_action('add_meta_boxes','add_cnt_meta');
add_action('save_post','save_cnt_meta');

function add_cnt_meta(){
	add_meta_box('my_meta', 'فرم ثبت اطلاعات تماس','cnt_inner_meta_box','contact','side','default');
}
function cnt_inner_meta_box($post){
	wp_nonce_field(plugin_basename(__FILE__), 'wpnonce');
	$post_id=$post->ID;
	$name=get_post_meta($post_id,'name',true);
	$phone=get_post_meta($post_id,'phone',true);
	$mobile=get_post_meta($post_id,'mobile',true);
	$email=get_post_meta($post_id,'email',true);
	$address=get_post_meta($post_id,'address',true);
	$massage=get_post_meta($post_id,'massage',true);
	?>
 	<label for="name_field">نام:</label></br><input type="text" name="name_field" id="name_field" value="<?php echo $name; ?>" size="40"/></br>
 	<label for="phone_field">تلفن ثابت:</label></br><input type="text" name="phone_field" id="phone_field" value="<?php echo $phone; ?>" size="40"/></br>
 	<label for="mobile_field">تلفن همراه:</label></br><input type="text" name="mobile_field" id="mobile_field" value="<?php echo $mobile; ?>" size="40"/></br>
 	<label for="email_field">ایمیل:</label></br><input type="text" name="email_field" id="email_field" value="<?php echo $email; ?>" size="40"/></br>
 	<label for="address_field">آدرس:</label></br><input type="text" name="address_field" id="address_field" value="<?php echo $address; ?>" size="40"/></br>
 	<label for="massage_field">متن پیام:</label></br><textarea  rows="5" cols="40" name="massage_field" id="massage_field"><?php echo $massage; ?></textarea>
	<?php
	
}
function save_cnt_meta($post_id){
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
      return;
	if(!wp_nonce_field(plugin_basename(__FILE__), 'wpnonce'))
		return;
	if('contact'==$_POST['post_type'])
	{
		if ( is_admin() ){
			$name=$_POST['name_field'];
			$phone=$_POST['phone_field'];
			$mobile=$_POST['mobile_field'];
			$email=$_POST['email_field'];
			$address=$_POST['address_field'];
			$massage=$_POST['massage_field'];
			update_post_meta($post_id,'name',$name);
			update_post_meta($post_id,'phone',$phone);
			update_post_meta($post_id,'mobile',$mobile);
			update_post_meta($post_id,'email',$email);
			update_post_meta($post_id,'address',$address);
			update_post_meta($post_id,'massage',$massage);
		}else return;
	}
	else
        return;
}


add_shortcode('contactus','contact_us');

function contact_us(){
	return file_get_contents( get_template_directory() . '/form.html');
}