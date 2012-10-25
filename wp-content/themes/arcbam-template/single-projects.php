<?php
/*
template name: پروژه ها
*/ 
	get_header();
	get_sidebar();
	get_template_part('bottom');
	$args=array(
			'orderby '=> 'menu_order', // This ensures images are in the order set in the page media manager  
	        'order'=> 'ASC',  
	        'post_mime_type' => 'image', // Make sure it doesn't pull other resources, like videos  
	        'post_parent' => $post->ID, // Important part - ensures the associated images are loaded 
	        'post_status' => null, 
	        'post_type' => 'attachment'
			);
	$images=get_children($args);
?>
<div class="content">
	<div class="pages right">
		<section class='bigpart mlra relative overhidden'>
			<div class="bigpic absolute">
				<?php 
				if($images){
					foreach ($images as $img) {
						$src_full=wp_get_attachment_image_src($img->ID,'full');
						echo "<div class='right' style=\"background-image:url('$src_full[0]');\"></div>";
					}
				}else
				echo 'not';
				 ?>
			</div>
			<div class="bigtxt absolute">
				<?php 
				if($images){
					foreach ($images as $img) {
					echo "<span class='right'>$img->post_content</span>";
					}
				}
				 ?>
			</div>
			<div class="badboy"></div>
		</section>
		<section class="smallpart relative overhidden">
			<ul class="btn absolute">
				<?php 
				if($images){
					foreach ($images as $img) {
						$src_thumb=wp_get_attachment_image_src($img->ID,'thumbnail');
						echo "<li class='right' style=\"background-image:url('$src_thumb[0]');\"></li>";
					}
				}else echo 'not';

				 ?>
			</ul>
			<div class="next butn absolute"></div>
			<div class="prev butn absolute"></div>	
		</section>
		
	</div>
</div>
<div class="badboy"></div>
<?php
	get_footer();
 ?>