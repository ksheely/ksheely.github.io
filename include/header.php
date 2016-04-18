<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php echo $page_title; ?></title>


<!--Using Bootstrap for framework as it is simple, cool, and has many templates ready to go that can be used to save time -->

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


<!--Include Font Awesome because its also fun -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

<!--Customized CSS -->
<link href="extraCss.css" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          <?php
		  	if($page_title == "Home")
			{
            	echo '<li class="active"><a href="home.php">Home</a></li>';				
			}
			else
			{
            	echo '<li><a href="home.php">Home</a></li>';				
			}
			if($page_title == "Insert Album")
			{
            	echo '<li class="active"><a href="insert.php">Insert Album</a></li>';				
			}
			else
			{
            	echo '<li><a href="insert.php">Insert Album</a></li>';				
			}	
			if($page_title == "View My Album Collection")
			{
            	echo '<li class="active"><a href="view.php">View My Records</a></li>';				
			}
			else
			{
            	echo '<li><a href="view.php">View My Records</a></li>';				
			}					  
		  ?>
            <li><a href="">Log Off</a></li>            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>