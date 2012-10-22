<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
	<title>
		<?php
		wp_title('|', true,'right'); 
		$site_description=get_bloginfo('description','display');
		if($site_description&&(is_home()||is_front_page()))
			echo $site_description.'-';
		echo get_bloginfo('name');
		 ?>
	</title>
	<link type="text/css"rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/1styles.css"/>
	<link type="text/css"rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css"/>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/script/html5shiv.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/script/zepto.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/script/tile.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/script/fadeloop.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/script/heavy-box.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/script/arcbam.js"></script>
	
</head>
<body>
	<div class="container">