<div id="adminform">
  <form action="/admin/login" method="POST" id="login">
    <div id="email">
      Email:<br />
      <input type="email" name="email" placeholder="JohnDoe@gmail.com" required />
    </div>
    <div id="password">
      Password:<br />
      <input type="password" name="password" placeholder="Password1" required />
    </div>
    <input type="submit" name="login" value="Log in"> <input type="submit" name="create" value="Create Account">
  </form>
  <div id='forgotpassword'>
    <a href="/forgot">Forgot Password?</a>
  </div>
</div>