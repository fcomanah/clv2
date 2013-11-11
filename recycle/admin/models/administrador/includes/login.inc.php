	    $q = "SELECT id_, nme, type, IF(date_expires >= NOW(), true, false) FROM usr WHERE (email='$e' AND pass='".get_password_hash($p)."')";		
	    $r = mysqli_query ($dbc, $q);
	
	    if (mysqli_num_rows($r) == 1) { // A match was made.
		    // Get the data:
		    $row = mysqli_fetch_array ($r, MYSQLI_NUM); 

		    // Store the data in a session:
		    $_SESSION['id'] = $row[0];
		    $_SESSION['nme'] = $row[1];
		    
		    $_GET['hgm'] = 'Login efetuado com sucesso!';
	    }
