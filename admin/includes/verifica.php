<?
  if($_SESSION['adminemail'] != "" or $_SESSION['adminsenha'] != ""){
    $email = mysqli_real_escape_string($link, $_SESSION['adminemail']);
    $senha = mysqli_real_escape_string($link, $_SESSION['adminsenha']);
    $busca = mysqli_query($link, "SELECT * FROM usuario WHERE email = '".$email."' AND senha = '".$senha."' LIMIT 1");
    if(count($busca) > 0){

    }else{
      header('Location: login.php');
      exit();
    }
  }else{
    header('Location: login.php');
    exit();
  }
?>