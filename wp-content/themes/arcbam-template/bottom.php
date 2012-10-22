<div class="bottom">
	<div class="logo left">
		<img src="images/logo.png" alt="">
	</div>
	<nav class="right">
		<ul>
			<?php 
			$args=array(
				'public' => true,
				'_builtin' =>false
				);
			$post_types=get_post_types($args,'names','and');
			echo '<li class="home left"><a href="./" title="">صفحه اصلی</a> </li>';
			foreach ($post_types as $ptype) {
				echo '<li class="left"><a href="?task=link" title="">صفحه اصلی</a>'.$ptype.' </li>';
			}
			 ?>
			
		</ul>
	</nav>

</div>