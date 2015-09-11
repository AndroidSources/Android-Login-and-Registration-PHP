<?php
error_reporting(E_ALL ^ E_DEPRECATED);

class DB_Connect
{
    public $con;

    // constructor
    function __construct()
    {

    }

    // destructor
    function __destruct()
    {
        // $this->close();
    }

    // Connecting to database
    public function connect()
    {
        require_once 'include/Config.php';
        // connecting to mysql
        $this->con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE) or die(mysqli_error($this->con));
        if (mysqli_connect_errno()) {
            die("Database connection failed");
        }

        // return database handler
        return $this->con;
    }

    // Closing database connection
    public function close()
    {
        mysqli_close($this->con);
    }

}

?>
