<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php 
wp_title( '|', true, 'right' );
// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo "$site_description | ";
		echo get_bloginfo("name");
 ?></title>
 
<link href="<?php bloginfo("stylesheet_url") ?>" type="text/css" rel="stylesheet" />
</head>

<body>
<?php

if(have_posts()){
	while(have_posts()){
		the_post();
		
		echo '<a href="'.get_permalink().'">'.get_the_title().'</a>';
		echo "<br>";
		the_content("");
		echo '<a href="'.get_permalink().'"><img src="'.get_bloginfo('template_directory')."/images/77.jpg".'"></a>';
		echo "<br><hr>";
	}
}

?>

</body>
</html>
