<?php 
	get_header();
	//get_sidebar();
	get_template_part('bottom');
	$args = array( 'post_type' => 'marketting', 'posts_per_page' => 5 );
	$list_postid=array();
	$counter=0;
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
		$list_postid[$counter]=$post->ID;
		$counter++;
	endwhile;
	//print_r($list_postid);
?>
<div class="content">
	<div class="marketting relative right">
		<div class="firstrow absolute">
			<div class="parentli right">
				<div class="pic">
					<?php 
					$profile_picture =  get_post_meta( $post->ID, 'profile_picture', true );
					if($profile_picture['url']){
						$img = $profile_picture['url'];
						echo '<div id="profile_picture"><a href="'.$img.'" target="_blank"><img src="'.$img.'"></a>
						</div>
						<br />';
					}
					?>
				</div>
				<div class="text"><a href="images/marketting/mrkt.jpg" title=""><?php echo $list_postid[0]; ?>برای آشنایی بیشتر با شرکت ...کلیک کنید</a></div>
			</div>
			<div class="parentli right">
				<div class="pic">
					<a href="images/marketting/mrkt.jpg" title=""><?php 
						$profile_picture =  get_post_meta( $list_postid[0], 'profile_picture', true );
					if($profile_picture['url']){
						$img = $profile_picture['url'];
						echo '<div id="profile_picture"><a href="'.$img.'" target="_blank"><img src="'.$img.'"></a>
						</div>
						<br />';
					}
					 ?></a>
				</div>
				<div class="text"><a href="images/marketting/mrkt.jpg" title=""><?php echo $list_postid[1]; ?>برای آشنایی بیشتر با شرکت2 ...کلیک کنید</a></div>
			</div>
			<div class="cover"></div>
		</div>
		<div class="cover"></div>
		<div class="secondrow absolute">
			<div class="parentli right">
				<div class="pic">
					<a href="images/marketting/mrkt.jpg" title=""><?php 
						$profile_picture =  get_post_meta( $list_postid[1], 'profile_picture', true );
					if($profile_picture['url']){
						$img = $profile_picture['url'];
						echo '<div id="profile_picture"><a href="'.$img.'" target="_blank"><img src="'.$img.'"></a>
						</div>
						<br />';
					}
					 ?></a>
				</div>
				<div class="text"><a href="images/marketting/mrkt.jpg" title="">برای آشنایی بیشتر با شرکت ...کلیک کنید</a></div>
			</div>
			<div class="parentli right">
				<div class="pic">
					<a href="images/marketting/mrkt.jpg" title=""><img src="images/marketting/small/logos-icon.jpg" alt=""></a>
				</div>
				<div class="text"><a href="images/marketting/mrkt.jpg" title="">برای آشنایی بیشتر با شرکت ...کلیک کنید</a></div>
			</div>
			<div class="cover"></div>
		</div>
		<div class="cover"></div>
		<div class="thirdrow absolute">
			<div class="parentli right">
				<div class="pic">
					<a href="images/marketting/mrkt.jpg" title=""><img src="images/marketting/small/logos-icon.jpg" alt=""></a>
				</div>
				<div class="text"><a href="images/marketting/mrkt.jpg" title="">برای آشنایی بیشتر با شرکت ...کلیک کنید</a></div>
			</div>
			<div class="parentli right">
				<div class="pic">
					<a href="images/marketting/mrkt.jpg" title=""><img src="images/marketting/small/logos-icon.jpg" alt=""></a>
				</div>
				<div class="text"><a href="images/marketting/mrkt.jpg" title="">برای آشنایی بیشتر با شرکت ...کلیک کنید</a></div>
			</div>
			<div class="parentli right">
				<div class="pic">
					<a href="images/marketting/mrkt.jpg" title=""><img src="images/marketting/small/logos-icon.jpg" alt=""></a>
				</div>
				<div class="text"><a href="images/marketting/mrkt.jpg" title="">برای آشنایی بیشتر با شرکت ...کلیک کنید</a></div>
			</div>
			<div class="cover"></div>
		</div>
		<div class="cover"></div>
		<div class="fourthrow absolute">
			<div class="parentli right">
				<div class="pic">
					<a href="images/marketting/mrkt.jpg" title=""><img src="images/marketting/small/logos-icon.jpg" alt=""></a>
				</div>
				<div class="text"><a href="images/marketting/mrkt.jpg" title="">برای آشنایی بیشتر با شرکت ...کلیک کنید</a></div>
			</div>
			<div class="parentli right">
				<div class="pic">
					<a href="images/marketting/mrkt.jpg" title=""><img src="images/marketting/small/logos-icon.jpg" alt=""></a>
				</div>
				<div class="text"><a href="images/marketting/mrkt.jpg" title="">برای آشنایی بیشتر با شرکت ...کلیک کنید</a></div>
			</div>
			<div class="cover"></div>
		</div>
		<div class="cover"></div>
		
	</div>

</div>
<?php 
	get_footer();
 ?>