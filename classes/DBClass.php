<?php 
	/**
	 * 
	 */
	class Database
	{
		
		function __construct($dbname)
		{
			# code...
			self::connect($dbname);
		}

		public static function connect($dbname)
		{
			# code...
			$conn = mysqli_connect("localhost", "root", "", $dbname);
			// var_dump($conn);
			if ($conn) {
				# code...
				// echo "connected to ".strtoupper($dbname);
				printf("connected to '%s'.", strtolower($dbname));
			}else{
				die($conn["connect_error"]);
			}
		}
	}

	$db = new Database("go_social");
?>