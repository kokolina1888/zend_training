<?php 

interface Logger{
	public function log($data);
}

class LogToFile implements Logger{
	public function log($data){
		var_dump('log the data to a file');
	}

}

class LogToDatabase implements Logger{
public function log($data){
		var_dump('log the data to a db');
	}

}

class LogToXWebServices implements Logger{

public function log($data){
		var_dump('log the data to a webservice');
	}

}


class App {
	public function log($data, Logger $logger=null){	
	$logger = $logger?: new LogToFile;	
		$logger->log($data);			
	}
}


$app = new App;
$app->log('some info');