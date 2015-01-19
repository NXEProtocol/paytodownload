<?php


class Pages extends Controller
{
    
    public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';		
		$id = !empty($_GET['id']) ? $_GET['id'] : 'default';
		$page = $this->model->viewpage($id);
		if($page){
        require APP . 'view/pages/index.php';
		}else{
		require APP . 'view/error/index.php';
		}
        require APP . 'view/_templates/footer.php';
    }
}
