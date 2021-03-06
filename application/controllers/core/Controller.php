<?php

abstract class Controller
{
	protected $controller_name;
	protected $action_name;
	protected $application;
	protected $request;
	protected $response;
	protected $session;
	protected $db_manager;
		
	public function __condtruct($application)
	{
		$this->controller_name = strtolower(substr(get_class($this),0,-10));
		
		$this->application = $application;
		$this->request     = $application->getRequest();
		$this->response    = $application->getResponse();
		$this->session     = $application->getSession();
		$this->db_manager  = $application->getDbManager(); 
	}
	
	public function run($action, $params = array())
	{
		$this->action_name = $action;
		
		$action_method = $action . 'Action';
		if(!method_exisits($this,$action_method)) {
			$this->forward404();
		}
		
		$content = $this->$action_method($params);
		
		return $content;
				
	}
	protected function render($variables = array(), $template = null, $layout = 'layout')
	{
		$defaults = array(
			'request' => $this->request,
			'base_url' => $this->request->getBaseUrl(),
		)
	}
}
