<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "user1");

class DB_con
{
    public $dbcon;
    function __construct()
    {
        $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        $this->dbcon = $conn;
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MYSQL : " . mysqli_connect_error();
        }
    }
    public function insert($UserID, $Name, $Surname, $Username, $Password, $Status)
    {
        $result = mysqli_query($this->dbcon, "INSERT INTO tbluser(UserID,Name,Surname,Username,Password,Status)
         VALUES('$UserID','$Name','$Surname','$Username','$Password','$Status')");
        return $result;
    }

    public function fetchdata()
    {
        $result = mysqli_query($this->dbcon, "SELECT * FROM tbluser");
        return $result;
    }

    public function fetchonerecord($updateid)
    {
        $result = mysqli_query($this->dbcon, "SELECT * FROM tbluser WHERE UserID = ' $updateid'");
        return $result;
    }

    public function update($UserID, $Name, $Surname, $Username, $Password, $Status)
    {
        $result = mysqli_query($this->dbcon, "UPDATE tbluser SET 
        UserID = '$UserID',
        Name = '$Name',
        Surname = '$Surname',
        Username = '$Username',
        Password = '$Password',
        Status = '$Status'
        WHERE UserID = ' $UserID'
        ");
        return $result;
    }

    public function delete($UserID)
    {
        $deleterecord = mysqli_query($this->dbcon, "DELETE FROM tbluser WHERE UserID = '$UserID'");
        return $deleterecord;
    }
}