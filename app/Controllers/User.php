<?php
// namespace App\Controllers;
/**
 * 
 */
class CL_User
{
	
	function __construct()
	{
		// $this->modal = new MD_App();
		// $this->modal = loadModal('app');
		// $this->md_app = loadModal('app', 'appmodal');
		//

		$this->view = loadLibrary('template');
		// _e($this->view);
		// _e(getModal('app')->index());
	}

	function index(){
		$this->view
		->page('header')
		->page('header')
		->page('header')
		->page('header')
		->page('index')
		->page('index')
		->page('index')
		->page('index')
		->page('index')
		->page('index')
		->page('index')
		->page('index')
		->page('footer')
		->page('footer')
		->page('footer')
		->page('footer')
		->page('footer')
		->init(array('title' => 'sadasdsa'));
		// $this->view->setHeader('header');
		// $this->view->setIndex('index');
		// $this->view->setFooter('footer');
		// $this->view->init(array('title' => 'sadasdsa'));
		_e('User');
	}

	function all(){
		_e('handle all the traffic');
	}

	
}