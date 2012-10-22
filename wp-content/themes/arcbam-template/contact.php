<?php 
	include 'header.php';
	include 'sidebar.php';
	include 'bottom.php';
?>
<div class="content">
<table class="contact">
	<tr>
		<td  rowspan="5" class="picowner">
			<img src="images/picofowner.jpg">
		</td>
		
	</tr>
	<tr>
		<td class="owninfo1"><p>شماره ثابت:</p></td>
		<td class="owninfo2"><p>05116093979</p></td>
	</tr>
	<tr>
		<td class="owninfo1"><p>شماره همراه:</p></td>
		<td class="owninfo2"><p>09158203969</p></td>
	</tr>
	<tr>
		<td class="owninfo1"><p>ایمیل:</p></td>
		<td class="owninfo2"><p>ar_pahlavan@yahoo.com</p></td>
	</tr>
	<tr>
		<td class="owninfo1"><p>آدرس:</p></td>
		<td class="owninfo2"><p>مشهد ، خیابان سید رضی، بین سید رضی 42 و 44 ، پلاک 140، طبقه اول</p></td>
	</tr>
	<tr>
		<td colspan="3" class="peygham"><p>کاربر محترم درصورت تمایل به ارسال پیام و یا سفارش کار، لطفا فرم زیر را تکمیل و ارسال نمایید</p></td>
	</tr>
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
	include 'footer.php';
 ?>