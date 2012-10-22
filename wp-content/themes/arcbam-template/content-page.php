<div class="homecontent overhidden relative">
	<?php 
		$path='./images/fadeloop';
		$img_arr=scandir($path);
		foreach ($img_arr as $imag) {
			$img_type=explode('.',$imag);
			$img_type=strtolower(end($img_type));
			if($img_type=='jpg'){
			echo "<div class='fade absolute'><img src='$path/$imag' alt='$imag'></div>";
			}
		}
	 ?>
	
</div>