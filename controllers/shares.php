<?php
class Shares extends Controller{
	protected function Index(){
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->Index(), true);
	}

	protected function add(){
		// Checking if the user is logged in or not.
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'shares');
		}
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->add(), true);
	}

	// protected function update(){
	// 	// Checking if the user is logged in or not.
	// 	if(!isset($_SESSION['is_logged_in'])){
	// 		header('Location: '.ROOT_URL.'shares');
	// 	}
	// 	$viewmodel = new ShareModel();
	// 	$this->returnView($viewmodel->update(), true);
	// }

}