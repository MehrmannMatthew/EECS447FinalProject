<?php
$conn = mysql_connect('mysql.eecs.ku.edu', 'm813m329', 'qfv_fhy@ejd7UNT4ehb')
    		or die('Could not connect: ' . mysql_error());
	mysql_select_db('m813m329') or die('Could not select database');
?>
<!DOCTYPE html>
<html>
<head>
<title>KU Park</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-black.css">
</head>
<body>
<!-- Header -->
<header class="w3-container w3-padding w3-black" id="myHeader">
  <!-- <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i>  -->
  <div class="w3-center w3-title">
  <h4>Jayhawker Parking</h4>
  <h1 class="w3-xxxlarge w3-animate-bottom">Homepage</h1>
  </div>
</header>
<!-- Body -->

<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
      <header class="w3-container w3-theme-l1"> 
        <span onclick="document.getElementById('id01').style.display='none'"
        class="w3-button w3-display-topright">×</span>
        <article>
        <?php
        // Send SQL query
            $query = 'SELECT * FROM CRUISE';
            $result = mysql_query($query) or die('Query failed: ' . mysql_error());
        // Print results in HTML
            echo'<table class="w3-table">';
            while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
                    echo "<tr>";
                    foreach ($line as $col_value) {
                        echo "<td>$col_value</td>";
                    }
                    echo "</tr>";
            }
            echo "</table>";

            echo "Number of fields: ".mysql_num_fields($result)."<br>";
            echo "Number of records: ".mysql_num_rows($result)."<br>";
        // Free resultset
            mysql_free_result($result);?> 
        </article>
      <footer class="w3-container w3-theme-l1">
        <p>Modal footer</p>
      </footer>
    </div>
</div>

<div class="w3-row w3-border">
  <div class="w3-half w3-container w3-border">
    <h3 class="w3-center">Tickets</h3>
      <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-center">
      <div class="w3-card-4 w3-center">
        <div class="w3-container">
        <p>Add a Ticket</p>
      </div>
    </div>
</button>
    <br>
    <div class="w3-card-4 w3-center">
      <div class="w3-container">
      <p>Search for a Ticket</p>
      </div>
    </div>
    <br>
  </div>
  <div class="w3-half w3-container w3-border">
    <h3 class="w3-center">Permits</h3>
    <div class="w3-card-4 w3-center">
      <div class="w3-container">
      <p>Add a Permit</p>
      </div>
    </div>
    <br>
    <div class="w3-card-4 w3-center">
      <div class="w3-container">
      <p>Search for a Permit</p>
      </div>
    </div>
    <br>
  </div>
</div>
<br>
<hr>


<!-- Footer -->
<footer class="w3-container w3-theme-dark w3-padding-16">
  <h3>Footer</h3>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  <div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">
    <span class="w3-text w3-theme-light w3-padding">Go To Top</span>    
    <a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
  <p>Remember to check out our  <a href="w3css_references.asp" class="w3-btn w3-theme-light" target="_blank">W3.CSS Reference</a></p>
</footer>

<!-- Script for Sidebar, Tabs, Accordions, Progress bars and slideshows -->

</body>
</html>
<?php mysql_close($link); ?>
