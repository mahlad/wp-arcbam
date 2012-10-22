<?php 
	include 'header.php';
	include 'sidebar.php';
	include 'bottom.php';
?>
<div class="content">
	<div class="pages right">
		<section class='bigpart mlra relative overhidden'>
			<div class="bigpic absolute">
				<?php 
				$path='./images/projects';
				$img_arr=scandir($path);
				foreach ($img_arr as $img) {
					$img_type=explode('.',$img);
					$img_type=strtolower(end($img_type));
					if($img_type=='jpg')
					echo "<div class='right' style=\"background-image:url('$path/$img');\"></div>";

				}
				 ?>
			</div>
			<div class="bigtxt absolute">
				<span class="right">this is text1</span>
				<span class="right">this is text2</span>
				<span class="right">this is text3</span>
				<span class="right">this is text4</span>
				<span class="right">this is text5</span>
				<span class="right">this is text6</span>
				<span class="right">this is text7</span>
				<span class="right">this is text8</span>
				<span class="right">this is text9</span>
			</div>
			<div class="badboy"></div>
		</section>
		<section class="smallpart relative overhidden">
			<ul class="btn absolute">
				<?php 
				$small_path='./images/projects/small';
				$simg_arr=scandir($small_path);
				foreach ($simg_arr as $simg) {
					$simg_type=explode('.',$simg);
					$simg_type=strtolower(end($simg_type));
					if($simg_type=='jpg'){
						echo "<li class='right' style=\"background-image:url('$small_path/$simg');\"></li>";
					}
				}
				 ?>
			</ul>
			<div class="next butn absolute"></div>
			<div class="prev butn absolute"></div>	
		</section>
		
	</div>
</div>
<div class="badboy"></div>
<?php
	include 'footer.php';
 ?>