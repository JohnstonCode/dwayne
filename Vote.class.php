<?php


class Vote
{
    private $conn;
    
    public function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'dwayne');
    }
    
    public function addInsaneVote()
    {
        
        $query = 'UPDATE votes SET number_of_votes = number_of_votes + 1 WHERE type_of_vote = "insane"';
        
        $result = $this->conn->query($query);
        
        if (!$result) 
        {
            die('Invalid query: ' . $this->conn->error);
        }
        
        mysqli_close($this->conn);
        
    }
    
    public function addSaneVote()
    {
        
        $query = 'UPDATE votes SET number_of_votes = number_of_votes + 1 WHERE type_of_vote = "sane"';
        
        $result = $this->conn->query($query);
        
        if (!$result) 
        {
            die('Invalid query: ' . $this->conn->error);
        }
        
        mysqli_close($this->conn);
        
    }
    
}

?>
