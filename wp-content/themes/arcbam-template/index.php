<?php 
/*
	template name: صفحه اصلی
*/
	get_header();
	//get_sidebar();
	get_template_part('bottom');
	if(!isset($_GET['task']))
		get_template_part('home');
	else
	get_template_part('content','page');
	
?>

<?php
	get_footer();
 ?>