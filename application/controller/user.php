<?php

class User extends Controller
{

    public function login()
    {
	    session_start();
		if($this->model->isloggedin() == true):
			header('LOCATION: '.URL.'dashboard');
		endif;
		$username = isset($_POST['username']) ? $_POST['username'] : '';
	    $password = isset($_POST['password']) ? $_POST['password'] : '';
	    if(isset($_POST) && isset($_POST['check_login']))
		{
		   //check if the username exists
		   if($this->model->checkuser($username) == true):
				//user exists, check pass
				$userdetails = $this->db->prepare("SELECT password,salt FROM users WHERE username=?");
				$userdetails->execute(array($username));
				$details = $userdetails->fetch();
				$site_salt = "generateandstoreindb";
				//got their information, hash the code, compare hashes.
				$salted_pass = hash('sha256', $password . $site_salt . $details->salt);
				//use hash compare to stop leaked information
				if($salted_pass == $details->password):
					//information seems correct.
					$_SESSION['user'] = $username;
					$_SESSION['token'] = md5(uniqid(rand(), true));
					header('LOCATION: '.URL.'dashboard');
				else: {/**/} endif;
		   endif;
		}
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/user/login.php';
        require APP . 'view/_templates/footer.php';
    }
	
	public function register()
	{
	    session_start();
	    if($this->model->isloggedin() == true):
			header('LOCATION: '.URL.'dashboard');
		endif;
	    $email = isset($_POST['email']) ? $_POST['email'] : '';
		$username = isset($_POST['username']) ? $_POST['username'] : '';
		$password = isset($_POST['password']) ? $_POST['password'] : '';
		
		if(isset($_POST) && isset($_POST['check_register'])):
		    if($this->model->userregistercheck($email,$username) == false):
				$salt = uniqid();
				$site_salt = "generateandstoreindb";
				$salted_pass = hash('sha256', $password . $site_salt . $salt);
				$registeruser = $this->db->prepare("INSERT INTO users
				(email,username,password,salt) VALUES(?,?,?,?)");
				echo $password . '</br>';
				$registeruser->execute(array($email,$username,$salted_pass,$salt));
			if($registeruser){ /*success*/}
		   endif;
		endif;
	    require APP . 'view/_templates/header.php';
        require APP . 'view/user/register.php';
        require APP . 'view/_templates/footer.php';
	}
	
	public function logout()
	{
		//stop cross-site forgery 
		if($_SESSION['token'] == $_GET['token'] ):
			session_start();
			$_SESSION = array();
			session_destroy();
			header('LOCATION: '.URL);
		endif;	
	}
	
		public function twofactor()
	{
		require APP . 'view/_templates/header.php';
		$user = $this->model->user();
		if(!$this->model->isloggedin() == true):
			header('LOCATION: '.URL.'user/login');
		endif;
		require APP . 'libs/GoogleAuthenticator.php';
		$ga = new PHPGangsta_GoogleAuthenticator();
		$secret = $this->model->twofackey($user->username);
		$userkey = isset($_POST['2key']) ? $_POST['2key'] : '';
		$usercode = isset($_POST['2code']) ? $_POST['2code'] : '';
		$oneCode = $ga->getCode($secret);
		if($user->twofactor == 1):
		    header('location: ' . URL . 'dashboard');
			exit();
		endif;
        require APP . 'views/user/twofactor.php';
		if(isset($userkey) && isset($usercode)):
			if($usercode == $oneCode && $userkey == $secret):
				$checkResult = $ga->verifyCode($secret, $oneCode, 2);
				if ($checkResult) :
					$updateuser = $this->db->prepare("UPDATE user SET twofactor=? WHERE username=?");
				echo '
				      <div class="row row-centered">
                      <div class="col-sm-6 col-sm-offset-3">
					  <div class="alert alert-success">
					  <strong>Well done</strong> Two Factor Authentication Complete
					  </div>
					  </div>
					  </div>';
				else: 
					echo 'FAILED';
				endif;				
			endif;
		endif;
	}

}
