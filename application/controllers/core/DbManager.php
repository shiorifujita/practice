class DbManager
{
	protected $connections = array();
	
	public function connect($name,$params)
	{
		$params = array_marge(array(
			'dsn'		=>null,
			'user'		=>'',
			'password'	=>'',
			'options'	=>array(),
		),$params);
		
		$con = new PDO(
			$params['dsn'],
			$params['user'],
			$params['password'],
			$params['options']
		);
		
		$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		
		$this->connection($name = null)
		{
			if(is_null($name)) {
			
			return current($this->connection);
		}
		
		return $this->connections[$name];
	}
}

				