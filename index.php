

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SE 266 - PHP and MySQL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </head>
  <body>
  


  
    <div class="container">
      <div class="page-header"><h1><span class="glyphicon glyphicon-home"></span>&nbsp;PHP and MySQL - Erik van Renselaar</h1></div>
			
      <div class="row">
				
        <div class="col-sm-8">
          <div class="panel panel-info">
            <div class="panel-heading">Welcome</div>
                <div class="panel-body">
                   Welcome to my PHP and MySQL page. You can find an overview of all my working PHP projects along with my code.
                </div>
           
            </div>
            <div class="panel panel-info">
            <div class="panel-heading">Assignment Overview</div>
           <div class="panel-body">
                  
                 <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Assignment Name</th>
                        <th>Zipped Solution</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td><a href="#" class="notyet">Solution Week 1</a></td>
                           <td><a href="#" class="notyet">Zip file Week 1</a></td>
                      </tr>
                      <tr>
                          <td><a href="#" class="notyet">Solution Week 2</a></td>
                           <td><a href="#" class="notyet">Zip file Week 2</a></td>
                      </tr>
                      <tr>
                          <td><a href="#" class="notyet">Solution Week 3</a></td>
                           <td><a href="#" class="notyet">Zip file Week 3</a></td>
                      </tr>
                      <tr>
                          <td><a href="#" class="notyet">Solution Week 4</a></td>
                           <td><a href="#" class="notyet">Zip file Week 4</a></td>
                      </tr>
                      <tr>
                          <td><a href="#" class="notyet">Solution Week 5</a></td>
                           <td><a href="#" class="notyet">Zip file Week 5</a></td>
                      </tr>
                      <tr>
                          <td><a href="#" class="notyet">Solution Week 6</a></td>
                           <td><a href="#" class="notyet">Zip file Week 6</a></td>
                      </tr>
                      <tr>
                          <td><a href="#" class="notyet">Solution Week 7</a></td>
                           <td><a href="#" class="notyet">Zip file Week 7</a></td>
                      </tr>
                      <tr>
                          <td><a href="#" class="notyet">Solution Week 8</a></td>
                           <td><a href="#" class="notyet">Zip file Week 8</a></td>
                      </tr>
                      <tr>
                          <td><a href="#" class="notyet">Solution Week 9</a></td>
                           <td><a href="#" class="notyet">Zip file Week 9</a></td>
                      </tr>
                      <tr>
                          <td><a href="#" class="notyet">Solution Week 10</a></td>
                           <td><a href="#" class="notyet">Zip file Week 10</a></td>
                      </tr>
                      
                    </tbody>
                  </table>
               
                </div>
            </div>
        </div>
        <div class="col-sm-4">
					
            <div class="panel panel-primary">
                <div class="panel-heading">Code</div>
                <div class="panel-body">
                    <ul>
                        <li><a href="https://github.com/evanrenselaar/se266Fall2018.git">My GitHub Repo</a></li>

                    </ul>
                </div>
            </div>
            <div class="panel panel-warning">
		<div class="panel-heading">Useful PHP Resources</div>
                <div class="panel-body">
                    <ul>
                          <li><a href=https://www.sitepoint.com/re-introducing-vagrant-right-way-start-php/">Sitepoint on Vagrant</li>
                          <li><a href=https://phpdelusions.net/pdo">(The only proper) PDO tutorial</li>
                          <li><a href=https://phptherightway.com/">PHP The right way</li>
                          
                     </ul>
                </div>
            </div>
             
            <div class="panel panel-danger">
		<div class="panel-heading">
                
                <?php
                    $file = "index.php";
                    $mod_date=date("F d Y h:i:s A", filemtime($file));

                    echo "Last update $mod_date";
                    ?>
                
                </div>
            </div>
			
		
			
	</div>
		
		
		
      </div>
    </div>
    <div id="footer">
      <div class="container"> 
        <div class="text-muted pull-left"><a href="http://www.getbootstrap.com"> This page uses Bootstrap&reg;</a></div>
        <div class="text-muted pull-right">&copy; Erik van Renselaar 2017</div>
      </div>
    </div>
  </body>
</html>

<script>
	$(document).ready(function(e) {
		$(".notyet").click (function (e) {
			e.preventDefault();
			alert ("In Progress. Check back later.");
		});
	});
</script>