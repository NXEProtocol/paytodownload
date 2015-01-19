<?php

class Help extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
		$guides = $this->model->helpguides();
        require APP . 'view/help/guide.php';
        require APP . 'view/_templates/footer.php';
    }

    public function faq()
    {
        // load views
        require APP . 'view/_templates/header.php';
		$faqs = $this->model->faqs();
        require APP . 'view/help/faq.php';
        require APP . 'view/_templates/footer.php';
    }

    public function tickets()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/tickets.php';
        require APP . 'view/_templates/footer.php';
    }
	
		public function guide()
		{
        require APP . 'view/_templates/header.php';
		$guides = $this->model->helpguides();
        require APP . 'view/help/guide.php';
        require APP . 'view/_templates/footer.php';
		}
		
	    public function viewguides()
       {
	    $url = $_GET['url'];
		$viewguide = $this->model->viewguide($url);
        require APP . 'view/help/viewguides.php';
       }
    
	
}
