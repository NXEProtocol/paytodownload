<?php

class Dashboard extends Controller
{

    public function index()
    {
		session_start();
		$btc = $this->model->btcconnect();
		//generate wallet
	    //$this->model->btcwallet($btc);
		if(!$this->model->isloggedin() == true):
			header('LOCATION: '.URL.'user/login');
		endif;
		//get the user's filesize
		$user = $this->model->user();
		$userfiles = $this->model->userfiles($user->username);
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/dashboard/index.php';
        require APP . 'view/_templates/footer.php';
    }
	
	public function addfile()
	{
		session_start();
		if(!$this->model->isloggedin() == true):
			header('LOCATION: '.URL.'user/login');
		endif;
		$user = $this->model->user();
		$filetitle = isset($_POST['filename']) ? $_POST['filename'] : '';
		$filedescription = isset($_POST['filedescription']) ? $_POST['filedescription'] : '';
		$fileprice = isset($_POST['fileprice']) ? $_POST['fileprice'] : '';
		$token = isset($_POST['token']) ? $_POST['token'] : '';
		 if(empty($filetitle) || empty($filedescription) || empty($fileprice) 
		 || empty($_FILES['uploadedfile']['name'])): header('LOCATION: '.URL.'dashboard'); endif;
		if(isset($_POST) && isset($_POST['add_file'])):
		   if($token == $_SESSION['token']):
			//check for file with urldecode
			$fileurl = uniqid();
			if ($this->model->checkfile($fileurl) == false):
				//add file
				$target_path = "uploads/".$user->username."/";
				if(!file_exists($target_path)):
					mkdir($target_path,077,true);
				endif;
                $target_path = $target_path . basename($_FILES['uploadedfile']['name']); 
				if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)):
					$addfile = $this->db->prepare("INSERT INTO downloads
				    (user,filename,filedescription,file,price,furl) VALUES(?,?,?,?,?,?)");
				    $addfile->execute(array($user->username,$filetitle,$filedescription,$_FILES['uploadedfile']['name'],$fileprice,$fileurl));
					//new token crsf
					$_SESSION['token'] = $this->model->newtoken();
					header('LOCATION: '.URL.'dashboard');
				endif;
			endif;
		    endif;
			endif;
	}
	
	public function editfile()
	{
		session_start();
		if(!$this->model->isloggedin() == true):
			header('LOCATION: '.URL.'user/login');
		endif;
		$user = $this->model->user();
		$filename = isset($_GET['fileid']) ? $_GET['fileid'] : '';
		$filedescription = isset($_POST['filedescription']) ? $_POST['filedescription'] : '';
		$price = isset($_POST['fileprice']) ? $_POST['fileprice'] : '';
	    $fileurl = isset($_POST['fileid']) ? $_POST['fileid'] : '';
		$filesname = isset($_POST['filename']) ? $_POST['filename'] : '';
		$userfiles = $this->model->editfile($filename);
		$crsf = isset($_POST['token']) ? $_POST['token'] : '';
		if(isset($_POST) && isset($_POST['check_edit'])):
			if($crsf == $_SESSION['token']):
				if(isset($fileurl) && isset($filedescription) && isset($price) && isset($filename)):
					//new token crsf
					$_SESSION['token'] = $this->model->newtoken();
					$updatefile = $this->model->updatefile($fileurl,$filesname,$filedescription,$price,$user);
				    header('LOCATION: '.URL.'dashboard/editfile?fileid='.$fileurl);
				endif;
			endif;
		endif;
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/dashboard/editfile.php';
        require APP . 'view/_templates/footer.php';
	}
	
	public function withdraw()
    {
		session_start();
		if(!$this->model->isloggedin() == true):
			header('LOCATION: '.URL.'user/login');
		endif;
		$site = $this->model->site();
		//$btc = $this->model->btcconnect();
		//generate wallet
	    //$wallet = $this->model->btcwallet($btc);
		$btcamount = 1 ;//$btc->getreceivedbyaddress($wallet); 
		//$withfee =  $btcamount * ((100-$site->fees) / 100);
		require APP . 'view/_templates/header.php';
        require APP . 'view/dashboard/withdraw.php';
        require APP . 'view/_templates/footer.php';
	}

}
