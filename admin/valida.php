<?
	require_once('includes/conexao.php');
	
	if($_POST['txtloginemail'] == "" or $_POST['txtloginsenha'] == ""){
		header('Location: login.php');
		exit();
	}else{
		if(isset($_POST['g-recaptcha-response'])){
	      	$captcha = $_POST['g-recaptcha-response'];
	    }
	    if(!$captcha){
	      	header('Location: login.php');
			exit();
	    }
	    $secretKey = "6Lc6yEIdAAAAAJOAsBthWnuY9EV6Gbtk1C_cg8bP";
	    $ip = $_SERVER['REMOTE_ADDR'];
	    $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
	    $responseKeys = json_decode($response,true);

	    if(intval($responseKeys["success"]) !== 1) {

	    } else {
	    	$email = mysqli_real_escape_string($link, $_POST['txtloginemail']);
			$senha = md5(mysqli_real_escape_string($link, $_POST['txtloginsenha']));
			$recebe = mysqli_query($link, "SELECT * FROM usuario WHERE email = '".$email."' AND senha = '".$senha."' LIMIT 1");
			$busca = mysqli_fetch_array($recebe);
			if(count($recebe) > 0){
				session_start();
				$_SESSION['adminid'] 			= $busca['id'];
				$_SESSION['adminnome'] 			= $busca['nome'];
				$_SESSION['adminemail'] 		= $busca['email'];
				$_SESSION['adminsenha'] 		= $busca['senha'];

				header('Location: dash.php');
				exit();
			}else{
				header('Location: login.php?erro=1&email='.$email);
				exit();
			}
	    }
	}	
		
?>