<?php 
class Pages extends Controller{
	public function __construct(){

	}

	public function index(){
		if(isLoggedIn()){
			redirect('posts');
		}

		$data = [
			'title' => 'SharePosts',
			'description' => 'Simple social netword buit on the MVC PHP framework'			
		];
		$this->view('pages/index', $data);
	}

	public function about(){
		$data = [
			'title' => 'About Us',
			'description' => 'App to share posts with other user'
		];
		$this->view('pages/about', $data);
	}
}


?>