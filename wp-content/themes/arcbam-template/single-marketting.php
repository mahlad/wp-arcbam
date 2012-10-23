<?php 
	get_header();
	//get_sidebar();
	get_template_part('bottom');
	$args = array( 'post_type' => 'marketting', 'posts_per_page' => 9,'post_status' =>	'publish', );
	$list_postid=array();
	$list_logo=array();
	$list_fullimg=array();
	$list_title=array();
	$counter=0;
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
		$list_postid[$counter]=$post->ID;
		$list_logo[$counter]=wp_get_attachment_url( get_post_thumbnail_id($post->ID));
		$logo=get_post_meta($post->ID,'profile_picture',true);
		$list_fullimg[$counter]=$logo['url'];
		$list_title[$counter]=get_the_title($post->ID);
		$counter++;

	endwhile;
	//echo $list_fullimg[0];
	
?>
<div class="content">
	<div class="marketting relative right">
		<?php 
		$classes=array('firstrow','secondrow','thirdrow','fourthrow');
		$cnt=0;
		$ent=1;
		$rnt=0;
		foreach ($classes as $class) {
			echo "<div class='$class absolute'>
				<div class='parentli right'>
					<div class='pic'><img src='{$list_logo[$cnt]}' alt=''></div>
					<div class='text'><a href='{$list_fullimg[$cnt]}' title=''>{$list_title[$cnt]}
					</a></div>
				</div>
				<div class='parentli right'>
					<div class='pic'><img src='{$list_logo[$ent]}' alt=''></div>
					<div class='text'><a href='{$list_fullimg[$ent]}' title=''>{$list_title[$ent]}
					</a></div>
				</div>";
			if($class=='thirdrow'){
				if($cnt%4==0){$rnt=$cnt+=2;}
				echo "
				<div class='parentli right'>
					<div class='pic'><img src='{$list_logo[$rnt]}' alt=''></div>
					<div class='text'><a href='{$list_fullimg[$rnt]}' title=''>{$list_title[$rnt]}
				</a></div>
			</div>";
			}
			echo "</div>";
			$cnt+=2;
			$ent+=2;
		}
		
		 ?>
		
	</div>

</div>
<?php 
	get_footer();
 ?>