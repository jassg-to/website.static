<?php
	require_once('conexao.php');
	for($i=0; $i<count($_POST["id_array"]); $i++)
	{
		$query = "
		UPDATE banner 
		SET ordem = '".$i."' 
		WHERE id = '".$_POST["id_array"][$i]."'";
		mysqli_query($link, $query);
	}
?>