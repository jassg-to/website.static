<?
function SobeImagem($nomeimg, $nomeimg_temp, $pasta){
	$imagem 		= $nomeimg; 		//$_FILES['txtimagem']['name'];
	$imgtemp 		= $nomeimg_temp; 	//$_FILES['txtimagem']['tmp_name'];
	
	$file_info = pathinfo($imagem);
	$novonome = md5($imagem . date('G:i:s')) .'.'. $file_info['extension'];
	$destino = $pasta . $novonome;

	// Converte a extensão para minúsculo
    $extensao = strtolower ( $file_info['extension'] );

	if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
		if(move_uploaded_file($imgtemp, $destino)){
			return $novonome;
		}else{
			return null;
		}
	}else{
		if($extensao == ''){
			return null;
		}else{
			header('Location: logout.php');
			exit();
		}
	}
	
}

function RemoveImagem($imagem, $pasta){
	if(file_exists($pasta.$imagem)){
		$remove = unlink($pasta.$imagem);
		if($remove>0){
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
}


?>