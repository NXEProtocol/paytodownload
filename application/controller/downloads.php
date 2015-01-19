<?php

class Downloads extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
		$file = isset($_GET['fileid']) ? $_GET['fileid'] : '';
		$getfile = $this->db->prepare("SELECT * FROM downloads WHERE furl=?");
		$getfile->execute(array($file));
		$filedetails = $getfile->fetch();
		$user = $this->db->prepare("SELECT wallet FROM users WHERE username=?");
		$user->execute(array($filedetails->user));
		$wallet = $user->fetch();
		if(!$filedetails):
		    header('LOCATION: '.URL);
		endif;
		//views -- will eventually add one per ip
		$views = $filedetails->views + 1;
		$insertviews = $this->db->prepare("UPDATE downloads SET views=? WHERE furl=?");
        $insertviews->execute(array($views,$file));
		require APP . 'view/_templates/header.php';
        require APP . 'view/downloads/index.php';
        require APP . 'view/_templates/footer.php';
    }

}
