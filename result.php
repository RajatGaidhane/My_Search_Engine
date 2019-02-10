<!DOCTYPE html>

<html>
   
    <head>
	  <title>Result found</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	</head>
     <body>
	    
	   <div class="container-fluid">
	      <form action="result.php" method="get">
		     <div class="row">
			    <div class="col-sm-1">
				  <a href="search.php" > <img src="images/search.jfif" height="60px"></a>
	            </div>  
	        <div class="col-sm-6">
		     <div class="input-group">
			   <input type="text" class="form-control" name="search">
			
			    <input class="btn btn-secondry" type="submit" name="search_button" value="Go" >
	               		 
			 </div>
		  </div>
		 </div>
	   </form>
      </div>
         <div class="result" style="margin-left:200px"  >  
		    
			
			
			
			<?php

              $connection= mysqli_connect("localhost","root","26011998");
			  mysqli_select_db($connection,"search");
                
              if(isset($_GET['search_button']))
			  {
			     $search = $_GET['search'];   
                  
				  if($search=="")
				  {
					echo "<center> <b> Please write something in search box! </b> </center>";
					exit();
				  }
				  
			  }
			  
			   $sql = "select * from website where site_key like '%$search%'";
			   $rs = mysqli_query($connection,$sql);
			     
				  while($row=mysqli_fetch_array($rs,MYSQLI_NUM))
				  {
					  
					  echo "<a href='$row[2]'><font size='4' color='blue'><b> $row[1]</b></font></a><br>";
		             echo "<font size='3' color='green'>$row[2]</font><br>"; 		  
                      echo "<font size='3' color='black'>$row[4]</font><br><br>";				  
				  }	  
                ?>
		     
		  </div>
     
	      <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>	 
	     
	 </body>
	 </html>