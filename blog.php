	<?
		$linguagem = 'pt';
		$pagina_atual = 'blog';
	?>

	<?
		require_once('includes/topo_alternative.php');
	?>
	
	<section id="banner-blog">
		<div class="background-banner-blog">
			<div class="text-banner-telas">
				<?=$textos['news']?>
			</div>
		</div>
	</section>

	<section id="blog">
		<div class="container">
			<div class="row blog-views">
				<?php

					if (isset($_GET['pageno'])) {
						$pageno = $_GET['pageno'];
					} else {
						$pageno = 1;
					}
					$no_of_records_per_page = 6;
					$offset = ($pageno-1) * $no_of_records_per_page;

					$total_pages_sql = "SELECT COUNT(*) FROM publicacao";
					$result = mysqli_query($link,$total_pages_sql);
					$total_rows = mysqli_fetch_array($result)[0] - 1;
					$total_pages = ceil($total_rows / $no_of_records_per_page);
					
					if ($offset == 0) $offset = 0;

					$sql = "SELECT * FROM publicacao ORDER BY id DESC LIMIT $offset, $no_of_records_per_page";
					$sql_pub = mysqli_query($link,$sql);
					$i = 0;

					while($pub = mysqli_fetch_array($sql_pub)){
						//echo '<a href="'.URL_BASE.'post/'.$pub['permalink'].'">';
						echo '<div class="col-md-4 col-xs-12 div_feed text-center" style="margin-bottom: 20px;">';
							if ($i%2 == 0) {
								echo '<div class="box-card-blog">';
							} else {
								echo '<div class="box-card-blog odd">';
							}
								echo '<a href="post.php?id='.$pub['id'].'">';
									echo '<div class="imagem_feed">';
										echo '<img class="img-blog" src="admin/uploads/publicacao/'.$pub['imagem'].'"/>';
									echo '</div>';
									echo '<div class="div-text">';
										echo '<div class="title-blog-index";>'.$pub['titulo'].'</div>';
										echo '<p class="text-blog-index mt20">'.cortaString(urldecode($pub['descricao']), 130).'</p>';
									echo '</div>';
								echo '</a>';
							echo '</div>';
						echo '</div>';
						$i++;
					}
				?>
			</div>
		</div>
		<div class="w100 text-center">
			<?php
				echo '<ul class="pagination">';
					if ($total_pages <= 6){
						$first = 1;
						$last = $total_pages;
					} else {
						$first = $pageno - 1;
						$last = $pageno + 4;
						if ($first < 1){
							$first = 1;
							$last = 6;
						}
						if ($last >= $total_pages){
							$first = $total_pages - 5;
							$last = $total_pages;
						}
					}
					if ($first > 1){
						echo '<li><a href="?pageno=1">...</a></li>';
					}
					for ($i=$first; $i <= $last; $i++) { 
						if ($pageno == $i) {
							echo '<li>';
								echo '<a class="pag-atual" href="?pageno='.$i.'">'.$i.'</a>';
							echo '</li>';
						} else {
							echo '<li>';
								echo '<a href="?pageno='.$i.'">'.$i.'</a>';
							echo '</li>';
						}
					}
					if ($last < $total_pages){
						echo '<li><a href="?pageno='.$total_pages.'">...</a></li>';
					}
				echo '</ul>';
			?>
		</div>
	</section>

	<?
		require_once('includes/rodape.php');
	?>
 