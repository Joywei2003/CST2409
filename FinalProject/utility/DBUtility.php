<?php
    class DBUtility
    {
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "finance";
        private $conn;
        

        function __construct()
        {
            // Create connection
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
            // Check connection
            if ($this->conn->connect_error) 
            {
                die("Connection failed: " . $this->conn->connect_error);
            }
        }
        function exacute($sql)
        {
            $result = $this->conn->query($sql);

            $rows = []; 

            if ($result->num_rows > 0)
            {
                // output data of each row
                while($row = $result->fetch_assoc()) 
                { 
                    $rows[] = $row;
                }
            } 
            else 
            {
                echo "0 results";
            }
            return $rows; 
        }
        function __destruct()
        {
            $this->conn->close();
        }
    } 
    //print_r($rows);
    //print_r($rows[0]["id"]);
    //echo " ";
    //print_r($rows[0]["company_name"]);
?>