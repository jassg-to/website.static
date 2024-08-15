<?
	require_once('includes/topo_alternative.php');

	$sql_pub = mysqli_query($link, "SELECT titulo, imagem, DATE_FORMAT(data_gerado, '%d/%m-%Y') as data, descricao FROM publicacao WHERE id='".$_GET['id']."' LIMIT 1");
	$pub = mysqli_fetch_array($sql_pub);
	$permalink = (isset($_GET['permalink'])?$_GET['permalink']:''); 
	$id = (isset($_GET['id'])?$_GET['id']:''); 
	
?>		

	<div class="individual-post">
		<img src="admin/uploads/publicacao/<?=$pub['imagem']?>"/>
		<div class="container">
			<div class="container-post">
				<?
					echo '<div class="col-md-12">';
						echo '<div class="titulo-post text-center mt50">';
							echo $pub['titulo'];
						echo '</div>';
					echo '</div>';
					echo '<div class="col-md-12">';
						echo '<div class="desc-post mt30">';
							echo /*nl2br(*/str_replace('<a href', '<a target=“_blank” href', urldecode($pub['descricao']))/*)*/;
						echo '</div>';
					echo '</div>';
		    	?>
	    	</div>
		</div>
	</div>

	<div class="container">
		<div style="display: flex; justify-content: center; align-items: center;" class="box-mosaico-desk">
			<div style="flex: 2;">
				<a href="images/galeria_img.jpg" target="_blank" data-lightbox="post" data-title="1 de 5">
					<img src="images/galeria_img.jpg" style="width: 100%;  object-fit: cover; max-height: 387px; min-height: 387px;"> 
				</a>
			</div>
			<div class="padding_lateral_mosaico"></div>
			<div style="flex: 1;">
				<div>
					<a href="images/galeria_1_img.jpg" target="_blank" data-lightbox="post" data-title="2 de 5">
						<img src="images/galeria_1_img.jpg" style="width: 100%; height: 188px;"> 
					</a>
				</div>
				<div class="padding_superior_mosaico"></div>
				<div>
					<a href="images/galeria_1_img.jpg" target="_blank" data-lightbox="post" data-title="3 de 5">
						<img src="images/galeria_1_img.jpg" style="width: 100%; height: 188px;"> 
					</a>
				</div> 
			</div>
			<div class="padding_lateral_mosaico"></div>
			<div style="flex: 1;">
				<a href="images/galeria_2_img.jpg" target="_blank" data-lightbox="post" data-title="4 de 5">
					<img src="images/galeria_2_img.jpg" style="width: 100%; height: 387px; object-fit: cover;"> 
				</a>
			</div>
			<div class="padding_lateral_mosaico"></div>
			<div style="flex: 1;">
				<div>
					<div>
						<a href="images/galeria_1_img.jpg" target="_blank" data-lightbox="post" data-title="5 de 5">
							<img src="images/galeria_1_img.jpg" style="width: 100%; height: 188px;">
						</a> 
					</div>
					<div class="padding_superior_mosaico"></div>
					<a href="images/galeria_img.jpg" target="_blank" data-lightbox="post" data-title="1 de 5">
						<div style="background-color: #728CB5; height: 188px; display: flex; justify-content: center; align-items: center;">
							<i class="las la-plus" style="color: #fff; font-size: 50px; font-weight: bold;"></i>
						</div>
					</a>
				</div>
			</div>
		</div>

		<div style="display: flex; justify-content: center; align-items: center; flex-direction: column;" class="box-mosaico-mobile">
			<div style="flex: 1; display: flex;">
				<div style="flex: 1;">
					<a href="images/galeria_img.jpg" target="_blank" data-lightbox="post" data-title="1 de 5">
						<img src="images/galeria_img.jpg" style="width: 100%;  object-fit: cover;"> 
					</a>
				</div>
				<div style="flex: 1;">
					<a href="images/galeria_1_img.jpg" target="_blank" data-lightbox="post" data-title="2 de 5">
						<img src="images/galeria_1_img.jpg" style="width: 100%; height: 188px;"> 
					</a>
				</div>
			</div>
			<div style="flex: 1; display: flex;">
				<div style="flex: 1;">
					<a href="images/galeria_1_img.jpg" target="_blank" data-lightbox="post" data-title="3 de 5">
						<img src="images/galeria_1_img.jpg" style="width: 100%; height: 188px;"> 
					</a>
				</div> 
				<div style="flex: 1;">
					<a href="images/galeria_2_img.jpg" target="_blank" data-lightbox="post" data-title="4 de 5">
						<img src="images/galeria_2_img.jpg" style="width: 100%; height: 387px; object-fit: cover;"> 
					</a>
				</div>
			</div>
			<div style="flex: 1; display: flex;">
				<div style="flex: 1;">
					<a href="images/galeria_1_img.jpg" target="_blank" data-lightbox="post" data-title="5 de 5">
						<img src="images/galeria_1_img.jpg" style="width: 100%; height: 188px;">
					</a> 
				</div>
				<div style="flex: 1;">
					<a href="images/galeria_img.jpg" target="_blank" data-lightbox="post" data-title="1 de 5">
						<div style="background-color: #728CB5; height: 170px; display: flex; justify-content: center; align-items: center;">
							<i class="las la-plus" style="color: #fff; font-size: 50px; font-weight: bold;"></i>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row mt50 mb70">				 			
			<div class="col-md-6 col-sm-6 col-xs-6 text-right arrow-right">					
				<?$sql_pub_before = mysqli_query($link, 'SELECT * FROM publicacao  where id < "'.$id.'" order by id desc Limit 1 ');
						if(mysqli_num_rows($sql_pub_before) > 0) {		
					$pub_before = mysqli_fetch_array($sql_pub_before);	
				?>
					<a  class="align-left-arrow" href="<?=URL_BASE?>post.php?id=<?=$pub_before['id']?>">
					<i class="las la-arrow-left mr5"></i>
					<span class="fontdatapost">
						Anterior
					</span>
					</a>
				<?}?>						
			</div>
			<div class="col-md-6 col-sm-6 col-xs-6 text-left arrow-right">
				<? $sql_pub_after = mysqli_query($link, 'SELECT * FROM publicacao  where id > "'.$id.'" order by id asc Limit 1 ');
					if(mysqli_num_rows($sql_pub_after) > 0) {		
							$pub_after = mysqli_fetch_array($sql_pub_after);	
				?> 
					<a class="align-right-arrow" href="<?=URL_BASE?>post.php?id=<?=$pub_after['id']?>">
					<span class="fontdatapost">
						Próxima						
					</span>
					<i class="las la-arrow-right ml5"></i>
					</a>
				<?}?> 											
			</div>				
		</div>
	</div>
			
<?
	require_once('includes/rodape.php');
?> 