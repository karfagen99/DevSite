<?php require('data/db.php');

// require('data/db.php');

class Model {

    public static function insert($task,$desc){
        $pdo = DB::getInstant();
		$sql = "INSERT INTO news (id, title, description, datePublic) VALUES (NULL, :title, :desc, CURRENT_DATE())";
		$stmt = $pdo->prepare($sql);
		$stmt->bindParam(':title',$task);
		$stmt->bindParam(':desc',$desc);
		$stmt->execute();
	}
}