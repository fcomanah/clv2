<?php 
    $login_errors = array();

    // Validate the email address:
    if (!empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	    $e = mysqli_real_escape_string ($dbc, $_POST['email']);
    } else {
	    $login_errors['email'] = 'Digite o seu endereço de e-mail.';
    }

    // Validate the password:
    if (!empty($_POST['pass'])) {
	    $p = mysqli_real_escape_string ($dbc, $_POST['pass']);
    } else {
    	$login_errors['pass'] = 'Digite o sua senha.';
    }
	
    if (empty($login_errors)) {
	    $q = "SELECT emailadministrador, nomeadministrador FROM administrador WHERE (emailadministrador='$e' AND senhaadministrador='".get_password_hash($p)."')";		
	    $r = mysqli_query ($dbc, $q);
	
	    if (mysqli_num_rows($r) == 1) { 
		    $row = mysqli_fetch_array ($r, MYSQLI_NUM); 

		    // Store the data in a session:
		    $_SESSION['email'] = $row[0];
		    $_SESSION['nome'] = $row[1];
		    
		    $_GET['hgm'] = 'Login efetuado com sucesso!';
	    } 
	    else 
	    {
		    $login_errors['login'] = 'Email incorreto ou senha incorreta.';
	    }
    } 
