<?php 
	get_header();
	get_sidebar();
	get_template_part('bottom');
	$args = array( 'post_type' => 'contact', 'posts_per_page' =>1,'post_status' =>	'publish' );
	$loop=new WP_Query($args);
?>
<div class="content">
	<div class="picowner right">
		<?php the_post_thumbnail();?>
	</div>
	<table class="contact right">
		<?php 
		if($loop->have_posts()){
			$loop->the_post();
			$post_id=$post->ID;

		 ?>
		<tr>
			<td class="owninfo1"><p>نام و نام خانوادگی:</p></td>
			<td class="owninfo2"><p><?php echo get_post_meta($post_id, 'name',true); ?></p></td>
			<td class="owninfo1"><p>شماره ثابت:</p></td>
			<td class="owninfo2"><p><?php echo get_post_meta($post_id, 'phone',true); ?></p></td>
		</tr>
		<tr>
			<td class="owninfo1"><p>شماره همراه:</p></td>
			<td class="owninfo2"><p><?php echo get_post_meta($post_id, 'mobile',true); ?></p></td>
			<td class="owninfo1"><p>ایمیل:</p></td>
			<td class="owninfo2"><p><?php echo get_post_meta($post_id, 'email',true); ?></p></td>
		</tr>
		<tr>
			<td class="owninfo1"><p>آدرس:</p></td>
			<td class="owninfo2" colspan="3"><p><?php echo get_post_meta($post_id, 'address',true); ?></p></td>
		</tr>
	</table>
	<div class="cover"></div>
	<div class="peygham right">
		<p><?php echo get_post_meta($post_id, 'massage',true); ?></p>
	</div>
	<table class="sendmail right">
		<form action="#" method="post" name="user_information">
		<tr>
			<td class="cntinfo1"><label>نام و نام خانوادگی</label></td>
			<td colspan="2" class="cntinfo2"><input type="text" name="name"/></td>
		</tr>
		<tr>
			<td class="cntinfo1"><label>ایمیل</label></td>
			<td colspan="2" class="cntinfo2"><input type="text" name="email"/></td>
		</tr>
		<tr>
			<td class="cntinfo1"><label>موضوع</label></td>
			<td colspan="2" class="cntinfo2"><input type="text" name="subject"/></td>
		</tr>
		<tr>
			<td class="cntinfo1"><label>متن</label></td>
			<td colspan="2" class="cntinfo2"><textarea name="contect"></textarea></td>
		</tr>
		<tr>
			<td colspan="3" class="submit cntinfo1"><input type="submit" name="submit" value="ارسال"/></td>
		</tr>
	</form>
	</table>
</div>
<?php
} 
	get_footer();
 ?>