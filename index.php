<?php

include('connect.php');

$query = 'SELECT * FROM votes';

$result = $conn->query($query);

$votes = [];

while($row = $result->fetch_array(MYSQLI_ASSOC))
{
    $votes[] = $row;
}

?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Dwayne</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.css">
        <link href="https://bootswatch.com/paper/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id="page-wrapper">
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Dwayne</a>
                </div>
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
            <div class="jumbotron row" style="text-align: center;">
                <h1>Is Dwayne insane?</h1>
                <div class="panel panel-default col-md-3 insane-counter col-md-offset-1 ">
                  <div class="panel-body">
                    <?php echo $votes[0]['number_of_votes']; ?>
                  </div>
                  <div class="panel-footer">Insane Votes</div>
                </div>
                <img class="col-md-4" id="vote-image" src="images/dwayne-01.jpg"></img><br />
                <div class="panel panel-default col-md-3 sane-counter">
                  <div class="panel-body">
                    <?php echo $votes[1]['number_of_votes']; ?>
                  </div>
                  <div class="panel-footer">Sane Votes</div>
                </div>
                <div class="panel panel-primary col-md-6 col-md-offset-3" id="main-vote">
                    <div class="panel-heading col-md-12">
                        <h3 class="panel-title">Vote Now!</h3>
                    </div>
                    <div class="panel-body" id="vote-buttons">
                        <button type="button" class="btn btn-danger vote-button" id="insane-vote" value="insane">Insane</button>
                        <button type="button" class="btn btn-success vote-button" id="sane-vote" value="sane">Sane</button>  
                    </div>
                </div>
            </div>
        </div><!-- END of page wrapper -->
        <footer>
              <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/insane_dwayne" data-widget-id="711656204691443714">Tweets by @insane_dwayne</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </footer>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        
    </body>
</html>