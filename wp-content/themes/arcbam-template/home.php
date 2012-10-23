<div class="homecontent overhidden relative">
	<?php 
	echo $post->ID;
		$args=array(
			'post_mime_type' => 'image',
			'post_parent' => $post->ID,
			'post_type' => 'attachment'
			);
		$images=get_children($args);
		if($images){
			foreach ($images as $img) {
				$full_imag=wp_get_attachment_image($img->ID,'full',$img->post_title);
				echo "<div class='fade absolute'>$full_imag</div>";
			}
		}
	 ?>
	
</div>