<div id="adminform" class="container-fluid">
  <div class="page-header center-block row">
    <div class="col-sm-10 col-sm-offset-1 text-center">
      <h1>Admin Login</h1>
    </div>
  </div>
  <form action="/admin/login" method="POST" id="login">
    <div id="email" class="row">
      <div class="col-sm-4 col-sm-offset-4 well well-sm">
        <input type="email" class="form-control" name="email" placeholder="JohnDoe@gmail.com" required />
      </div>
    </div>
    <div id="password" class="row">
      <div class="col-sm-4 col-sm-offset-4 well well-sm">
        <input type="password" class="form-control" name="password" placeholder="Password1" required />
      </div>
    </div>
    <div id="password" class="row">
      <div class="col-sm-2 col-sm-offset-4 col-xs-6 well well-sm">
        <input type="submit" class="btn btn-primary btn-lg btn-block" name="login" value="Log in">
      </div>
      <div class="col-sm-2 col-xs-6 well well-sm">
        <input type="submit" class="btn btn-primary btn-lg btn-block" name="create" value="Create">
      </div>
    </div>
  </form>
  <div id='forgotpassword' class="row well well-sm">
    <div class="col-sm-4 col-sm-offset-4 text-center">
      <a href="/forgot">Forgot Password?</a>
    </div>
  </div>
</div>