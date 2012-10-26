<?php 
	get_header();
	get_sidebar();
	get_template_part('bottom');
	
?>
<div class="content">
	<div class="marketting relative right">
	<?php 
	if ( is_post_type_archive() ) {
    	if ( have_posts() ) {
    		$counter=0;
    		while ( have_posts() ) {
    			the_post();
	    		$list_postid[$counter]=$post->ID;
				$list_logo[$counter]=wp_get_attachment_url( get_post_thumbnail_id($post->ID));
				$logo=get_post_meta($post->ID,'profile_picture',true);
				$list_fullimg[$counter]=$logo['url'];
				$list_title[$counter]=get_the_title($post->ID);
				$counter++;
				}//end while
		}else echo'هیچ تبلیغی وجود ندارد';
	}else echo 'مجموعه تبلیغات وجود ندارد';
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
				}//end forech
			
	?>
	</div>
</div>
<?php 
	get_footer();
 ?>