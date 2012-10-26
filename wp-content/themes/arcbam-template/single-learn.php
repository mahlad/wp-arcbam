<?php 
	get_header();
	the_post();
	get_sidebar();
	get_template_part('bottom');
	$args=array('post_type'=>'learn','post_status' =>'publish');
	$loop=new Wp_Query($args);
?>
<div class="content">
	<div class="learning right">
		<?php 
		while($loop->have_posts()):$loop->the_post();
		if($counter%2==0)
			$clas='right';
		else
			$clas='left';
		echo "
		<section class='part $clas'>
			<div class='line'>
				<div class='pic right'>";
				the_title('<h1>','</h1>');
				echo"</div>
				<div class='cover'></div>
				<div class='context right overhidden txj'>";
				the_excerpt();
				$url=get_post_meta($post->ID,'profile_picture','true');
				echo"</div>
				<a href='{$url['url']}' class='download left'>دریافت متن کامل</a>
			</div>
		</section>";
		$counter++;
		endwhile;
		 ?>
		
	</div>	

</div>

<?php 
	include 'footer.php';
 ?>