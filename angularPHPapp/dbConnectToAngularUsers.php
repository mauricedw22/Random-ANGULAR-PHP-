<?php    

//Define Database Connection constants

define("DATABASE_HOST","localhost");
define("DATABASE_USERNAME", "mdpower88");
define("DATABASE_PASSWORD", "artman88");
define("DATABASE_NAME", "angularTest");
	
	mysql_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD)
		or die("<p> Error connecting to database: ".mysql.error()."</p>");
		
	// echo "<p>Connected to MySQL! </p>" ;
	
	mysql_select_db(DATABASE_NAME)
		 or die("<p>Error selecting database: ".DATABASE_NAME.mysql_error()."</p>");
		
	// echo "<p>Connected to MySQL, using database: ".DATABASE_NAME."</p>";




?>