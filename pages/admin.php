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
		<input type="submit" value="Log in"> <input type="submit" value="Create Account">
	</form>
	<div id='forgotpassword'>
		<a href="/forgot">Forgot Password?</a>
	</div>
</div>