<?php

require_once('Vote.class.php');

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    
    $vote = new Vote();
    
    if($_POST['vote'] == 'insane')
    {
        $vote->addInsaneVote();
        echo 'Vote added';
    }
    elseif ($_POST['vote'] == 'sane') 
    {
        $vote->addSaneVote();
        echo 'Vote added';
    }
    
}