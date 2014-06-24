<?php

class Router
{
	
	protected $routes;
	
	public function __counstruct($difinitions)
	{
		$this-> routes = $this->compileroutes($definition);
	}
	
	public function compileRoutes($definitions)
	{
		$routes = array();

		foreach ($definitions as $url => $params){
			$tokens = explode('/',ltrim($url,'/'));
			foreach ($tokens as $i => $token) {
				if(0 === strpos($token, ':')) {
					$name = substr($token,1);
					$token = '(?P<' . $name . '>[^/]+;)';
					
				}
				$token[$i] = token;
			}
			
			$pattern= 'ソ'　. implode('/',$tokens);
			$routes[$pattern] = $parmas;
		}
	
			return $routes;
	}
	
	public function resolve($path_info)
	{
		if ('/' !== substr($path_info,0,1))	{
			$path_info ='/' . $path_info;
		}
		
		foreach ($this->routes as $pattern => $params) {
			if (preg_match('#^' . $pattern , '$#', $path_info,$matches)) {
				$params = array_merge($params,$matches);
				
				return $parmas;
			}
		}
		
		return false;

	}
}