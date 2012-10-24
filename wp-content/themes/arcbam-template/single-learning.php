<?php 
	get_header();
	get_sidebar();
	get_template_part('bottom');
	$args=array('post_type'=>'learn','post_status' =>	'publish');
	$loop= new WP_Query($args);
?>
<div class="content">
	<div class="learning right">
		<?php 
		$counter=0;
		while($loop->have_posts()):$loop->the_post();
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