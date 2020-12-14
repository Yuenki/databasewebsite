      <?php
         $dbhost = 'localhost';
         $dbuser = 'dtran';
         $dbpass = 'Scejy^9cep';
		 $dbname = 'dtran';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
      
         if(mysqli_connect_errno()) {
			echo "failed to connect";
			exit();
		 }
         
		 echo 'Successful Connection';
         
      ?>
	  

	  