<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-3">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Please Register</h3>
        </div>
        <div class="panel-body">
          <form role="form" action="<?php echo URL; ?>/user/register" method="POST">
           <input name="check_register" type="hidden" value="1">
		   <fieldset>
              <div class="form-group">
                <input class="form-control" placeholder="E-mail" value="<?php echo htmlspecialchars($email,ENT_QUOTES); ?>" name="email" type="email" autofocus="">
              </div>
			  <div class="form-group">
                <input class="form-control" placeholder="Username" value="<?php echo htmlspecialchars($username,ENT_QUOTES); ?>" name="username" type="text" value="">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Password" name="password" type="password">
              </div>
			  <div class="form-group">
                <input class="form-control" placeholder="Password Repeat" name="passwordrepeat" type="password">
              </div>
              </div>
              <!-- Change this to a button or input when using this as a form -->
              <button class="btn btn-lg btn-success btn-block">Register</button>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>