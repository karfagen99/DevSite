<?php


class DB
{
	private $pdo;
	private static $instant;
	
	
	private static $DB_HOST = 'localhost';
	private static $DB_NAME = 'devsite';
	private static $DB_USER = 'root';
	private static $DB_PASS = '';

	private function __construct () {
		
		$this->pdo = new PDO(
			'mysql:host=' . self::$DB_HOST . ';dbname=' . self::$DB_NAME,
	    	self::$DB_USER,
	    	self::$DB_PASS,
	    	[PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]
	    );

	}

	public static function getInstant()
    {
        if (self::$instant == null) {
            self::$instant = new self();
        }
        return self::$instant;
	}
	

}

	


// $sql2 = 'SELECT * FROM news';
// $stml = $pdo->query($sql2);
// $data = $stml->fetchAll(PDO::FETCH_ASSOC);
// var_dump($data);

// $stmt = $pdo->query($sql);
// // $test = $stmt->fetchAll(PDO::FETCH_ASSOC);
// var_dump($test);