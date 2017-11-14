<?php
class DB 
{

    private $mysqli; 

    public function __construct()
    {
        $this->mysqli = new mysqli("localhost", "root", "", "test");
    }

    public function query($query) 
    {
        $result = $this->mysqli->query($query);
        if ($result) 
        {
            if(is_bool($result))
                return $result;
            return $this->as_array($result);
        }
        else return false;
    }

    public function as_array($result) 
    {
        $array = array();
        while (($row = $result->fetch_assoc()) != false) 
        {
            $array[] = $row;
        }
        return $array;
    }
}
?>