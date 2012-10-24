<?php 
	get_header();
	the_post();
	//get_sidebar();
	get_template_part('bottom');
	$args=array('post_type'=>'learn','post_status' =>'publish');
	$loop= new WP_Query($args);
	//$args = array( 'post_type' => 'marketting', 'posts_per_page' => 9,'post_status' =>	'publish' );
	$list_postid=array();
	$list_logo=array();
	$list_fullimg=array();
	$list_title=array();
	$counter=0;
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
		$list_postid[$counter]=$post->ID;
		//$list_logo[$counter]=wp_get_attachment_url( get_post_thumbnail_id($post->ID));
		//$logo=get_post_meta($post->ID,'profile_picture',true);
		//$list_fullimg[$counter]=$logo['url'];
		$list_title[$counter]=get_the_title($post->ID);
		$counter++;

	endwhile;
?>
<div class="content">
	<div class="learning right">
		<?php 
		$counter=0;
		if($loop) echo 'yes';
		else echo 'not';

		while($loop->have_posts()):$loop->the_post();
		the_title();
			if($counter%2==0)
				$clas='right';
			else
				$clas='left';
			echo "
			<section class='part $clas'>
				<div class='line'>
					<div class='pic right'>
						the_title('<h1>','</h1>')
					</div>
				</div>
			</div>";
			$counter++;
		endwhile;
		 ?>
		
	</div>	

</div>

<?php 
	include 'footer.php';
 ?>