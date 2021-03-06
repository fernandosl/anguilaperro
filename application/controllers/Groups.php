<?php

class Controllers_Groups
{

	public $content;
	public $request;
	
	public function __construct($request)
	{
		$this->request=$request;
	}
	
	public function indexAction($viewparams)
	{		
		$this->content=renderView($this->request,$viewparams);
	}
	
	public function __destruct()
	{
		$layoutparams=array('content'=>$this->content);
		echo renderLayout('backend', $layoutparams);
	}	
}