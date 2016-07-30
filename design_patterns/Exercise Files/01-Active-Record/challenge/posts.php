<?php 
class Post{
	protected $connection = null;

   static function create($param){
    	try {
    $conn = new PDO("mysql:host=localhost;dbname=development", 'root', '');
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("INSERT INTO posts (title, body, create_date) VALUES (:title, :body, :create_date)");
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':body', $body);
    $stmt->bindParam(':create_date', $create_date);
    // use exec() because no results are returned
    foreach ($param as $key => $value) {
    	$$key = $value;
    }
    $stmt->execute();
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
}
    	
    	
}
// $sql = "INSERT INTO posts (id, title, body, create_date) VALUES ($param['id'], $param['title'], $param['body'], $param['create_date'])";