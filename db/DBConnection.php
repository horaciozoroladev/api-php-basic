<?php
class DBConnection {
    private $conn = "";
	private $host = "localhost";
	private $user = "root";
	private $password = "1234";
	private $database = "dbtraining";
	private $port = "3307";

	function __construct() {
		if(!empty($conn)) {
			$this->conn = $conn;			
		}
	}

	function connect_db() {
		$conn = mysqli_connect($this->host, $this->user, $this->password, $this->database, $this->port);
		 /* check connection */
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        } else {
            // printf("Connect success");
            $this->conn = $conn;
        }
        return $this->conn;
	}    
}
?>