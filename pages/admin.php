<?php if ($uri[2] == 'login'): ?>
	<?php if ($_POST['login']): ?>
	<?php endif; ?>
	<?php if ($_POST['create']): ?>
		<?php echo '<pre>' . print_r($_POST, true) . '</pre>'; ?>
	<?php endif; ?>
<?php endif; ?>

<div id="adminform">
	<form action="/admin/login" method="POST" id="login">
		<div id="email">
			Email:<br />
			<input type="text" name="email">
		</div>
		<div id="password">
			Password:<br />
			<input type="password" name="password">
		</div>
		<input type="submit" name="login" value="Log in"> <input type="submit" name="create" value="Create Account">
	</form>
	<div id='forgotpassword'>
		<a href="/forgot">Forgot Password?</a>
	</div>
</div>
