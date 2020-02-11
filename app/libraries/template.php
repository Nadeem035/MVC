<?php

/**
 * 
 */
class LB_Template
{

	// private
	// public
	// protected

	private $header;
	private $index;
	private $footer;
	private $pages;
	
	function __construct()
	{
		$this->header = '';
		$this->index = '';
		$this->footer = '';
	}

	function setHeader($page){
		$this->header = $page;
		return $this;
	}
	function setFooter($page){
		$this->footer = $page;
		return $this;
	}
	function setIndex($page){
		$this->index = $page;
		return $this;
	}

	function page($page){
		$this->pages[] = $page;
		// $this->pages[strtolower($page)] = $page;
		return $this;
	}


	function init($data){
		extract($data);
		foreach ($this->pages as $key => $value) {
			require_once(APP_PATH.'views/'.$value.'.php');
			// require(APP_PATH.'views/'.$value.'.php');
		}
		// require_once(APP_PATH.'views/'.$this->header.'.php');
		// require_once(APP_PATH.'views/'.$this->index.'.php');
		// require_once(APP_PATH.'views/'.$this->footer.'.php');
	}
}