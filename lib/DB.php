<?php

// DB class responsible for connecting to the database
class DB
{
    private $dbName = DBNAME;
    private $host = HOST;
    private $user = USER;
    private $password = PASSWORD;

    private $dbHandler;
    private $error;
    private $stmt;

    public function __construct()
    {
        // setting dsn connection string holding host,db name
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        // setting optinos
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        //PDO instance
        try {
            $this->dbHandler = new PDO($dsn, $this->user, $this->password, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
        }
    }

    // Query method
    public function query($query)
    {
        $this->stmt = $this->dbHandler->prepare($query);
    }

    // bind method
    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    // execute method
    public function execute()
    {
        return $this->stmt->execute();
    }
    // fetching results from db
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Fetching single record
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
}
