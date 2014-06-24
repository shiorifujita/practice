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
			