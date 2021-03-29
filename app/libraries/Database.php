<?php

class Database
{
    private $dbHost = DB_HOST;
    private $dbUser = DB_USER;
    private $dbPass = DB_PASSWORD;
    private $dbName = DB_DBNAME;

    private $dbhandler;
    private $statement;
    private $error;

    public function __construct()
    {
        $conn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName;
        $options = array(
            //Stops the connection from timing out when trying to connect
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        //Connection to the DB if it doesn't work throw an exception and echo it
        try {
            $this->dbhandler = new PDO($conn, $this->dbUser, $this->dbPass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    //Write the query's
    public function query($sql)
    {
        $this->statement = $this->dbhandler->prepare($sql);
    }

    //Bind values
    public function bind($param, $value, $type = null)
    {
        //Check the type being inserted into the db
        switch (is_null($type)) {
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
        $this->statement->bindValue($param, $value, $type);
    }


    //Execute the prepared statement
    public function execute()
    {
        return $this->statement->execute();
    }

    //Return array
    public function resultSet()
    {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }

    //Return array as type of class
    public function resultSetToObj(string $class)
    {
        $this->statement->setFetchMode(PDO::FETCH_CLASS, $class);
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_CLASS, $class);
    }

    //Return a single row as an object
    public function singleRow()
    {
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_OBJ);
    }

    public function singleRowToObj(string $class)
    {
        $this->statement->setFetchMode(PDO::FETCH_CLASS, $class);
        $this->execute();
        return $this->statement->fetch();
    }

    //Get row count of rows changed or affected by a query
    public function rowCount()
    {
        return $this->statement->rowCount();
    }
}
