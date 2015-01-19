<?php

class Model
{
    /**
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }
	
	public function site()
	{
		$site = $this->db->prepare("SELECT * FROM system");
		$site->execute();
		return $site->fetch();
	}
	
		public function checkuser($username)
	{
	    $checkuser = $this->db->prepare("SELECT * FROM users WHERE username=?");
		$checkuser->execute(array($username));
		$registered = $checkuser->fetch();
			if($registered):
				return true;
			endif;
	}
	
	public function isloggedin()
	{
		if(isset($_SESSION['user'])):
			return true;
		endif;
	}
	
	public function isadmin()
    {
        $sql = $this->db->prepare("SELECT admin FROM users WHERE username=?");
        $sql->execute(array($_SESSION['user']));
        $checkadmin = $sql->fetch();
        if ($checkadmin->admin == '1'):
            return true;
        endif;
    }
	
	public function user()
	{
		$user = $this->db->prepare("SELECT * FROM users WHERE username=?");
		$user->execute(array($_SESSION['user']));
		return $user->fetch();
	}
	
	public function newtoken()
	{
	    return md5(uniqid(rand(), true));
	}
	
	//bitcoin
	public function btcconnect()
	{
	  require APP . 'libs/jsonRPCClient.php';
      return $bitcoin = new jsonRPCClient('')
	  }
	
	public function btcwallet($btc)
	{
		$checkwallet = $this->db->prepare("SELECT wallet FROM users WHERE username=?");
		$checkwallet->execute(array($_SESSION['user']));
		$wallet = $checkwallet->fetch();
		$btcwallet = $btc->getnewaddress();
		if(!$wallet->wallet)
		{
			$addwallet = $this->db->prepare("UPDATE users SET wallet=? WHERE username=?");
			$addwallet->execute(array($btcwallet,$_SESSION['user']));
			return $btcwallet;
			
		}else{
			return $wallet->wallet;
		}
	}
	
	//fetch the users files
	public function userfiles($user)
	{
		$userfiles = $this->db->prepare("SELECT * FROM downloads WHERE user=?");
		$userfiles->execute(array($user));
		return $userfiles->fetchAll();
	}
	
	public function checkfile($fileurl)
	{
		$checkfile = $this->db->prepare("SELECT * FROM downloads WHERE furl=?");
		$checkfile->execute(array($fileurl));
		$checkfiles = $checkfile->fetch();
		if($checkfiles):
			return false;
		endif;
	}
	
		public function editfile($fileurl)
	{
		$checkfile = $this->db->prepare("SELECT * FROM downloads WHERE furl=? AND user=?");
		$checkfile->execute(array($fileurl,$_SESSION['user']));
		return $checkfile->fetch();
	}
	
	public function updatefile($filename,$filesname,$filedescription,$price,$user)
	{
		$updatefile = $this->db->prepare("UPDATE downloads SET filename=?, filedescription=?,price=? WHERE furl=? AND user=?");
		$updatefile->execute(array($filesname,$filedescription,$price,$filename,$user->username));
	}

	public function userregistercheck($email,$username)
	{
		$checkuser = $this->db->prepare("SELECT * FROM users WHERE email=? OR username=?");
		$checkuser->execute(array($email,$username));
		$registered = $checkuser->fetch();
			if($registered):
				return true;
			endif;
	}

	public function viewpage($id)
    {
        $getpage = $this->db->prepare("SELECT body,title FROM pages WHERE url=?");
        $getpage->execute(array($id));
        if ($getpage !== false):
			return $getpage->fetch();
        endif;
    }
}
