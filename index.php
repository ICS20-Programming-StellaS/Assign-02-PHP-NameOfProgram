<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Name of Program, PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Stella S">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favs/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favs/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favs/favicon-16x16.png">
    <link rel="manifest" href="./favs/site.webmanifest">
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Title -->
    <title>How Much Water Shoudld You Drink a Day</title>
  </head>
  
  
  <center><body>  

		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>How Many Liters Of Water Should You Drink a Day</h1>";
    ?>

    <img src="./image/drink_water.png" alt="water" width="40%" height="auto"/>
    
  <?php
			echo "<h3>Calculate Here</h3>";
		?>
    
    <!-- Values for calculating area and perimeter of trapezoid-->
    <form action="./results.php" method="post" target="results">  
      <label for=bodyWeight">Body Weight (Ilbs) :</label>
      <input type="text"  name="bodyWeight" id="bodyWeight" placeholder="Enter Your Body Weight..." name="bodyWeight"><br><br>

            <label for=SideB">Age (0-29):</label>
      <input type="text"  name="age" min="0" max="29" id="age" placeholder="Enter Your Age" name="age"><br><br>

      <input type="submit" value="Calculate">
    <!-- iframe for the results to show on the web page. -->
      <iframe id="results" name="results">	
      </iframe>
  </body></center>
</html>