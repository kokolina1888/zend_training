<?php 

class PostGateway{
	protected $connection = null;

	public function __construct()
    {
        $this->connection = new PDO("mysql:host=localhost;dbname=development", 'developer', 'developer');
    }

     public function loadAll()
    {
        $sql = 'SELECT * FROM posts';
        $rows = $this->connection->query($sql);

        return $rows;
    }

    public function loadById($id)
    {
        $sql = 'SELECT * FROM posts WHERE id ' . (int) $id;
        $result = $this->connection->query($sql);

        return $result->fetch();
    }


}