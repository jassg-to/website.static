<?
	$pagina_atual = 'index';
	$lingua = 'pt';
?>

<?
	require_once('includes/topo_alternative.php');
?>

	<section id="banner">
		<div class="background-banner">
			<div class="text-banner">
				<span class="t-banner">
					<?=$textos['title_1_banner']?>
				</span> 
				<?=$textos['title_2_banner']?> 
				<span class="t-banner">
					<?=$textos['title_3_banner']?>
				</span>
				<br>
				<?=$textos['title_4_banner']?>
				<span class="t-banner"><?=$textos['title_5_banner']?></span><?=$textos['title_6_banner']?>
				<br>
				<?=$textos['title_7_banner']?>
			</div>
		</div>
	</section>

	<section id="about">
		<div class="mt100 mb100">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="title-main-site"><?=$textos['title_about-us']?></div>
					</div>
				</div>
				<div class="row mt10">
					<div class="col-md-12 text-center">
						<div class="text-about"><?=$textos['text_about-us']?></div>
					</div>
				</div>
				<div class="row ai_center jc_center mt30">
					<a href="about.php">
						<div class="btn-default-site"><?=$textos['learn-more_about-us']?></div>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section id="spiritism" class="hidden-xs hidden-sm">
		<div class="d_flex">
			<div class="content-spiritism">
				<div class="text-spiritism">
					<div class="title-main-site-white"><?=$textos['spiritism']?></div>
					<div class="mt30"><?=$textos['text_spiritism']?></div>
					<div class="jc_center mt50">
						<a href="spiritism.php">
							<div class="btn-default-site-border"><?=$textos['read-more']?></div>
						</a>
					</div>
				</div>
			</div>
			<div class="img-spiritism"></div>
		</div>
	</section>

	<section id="spiritism-mob" class="hidden-md hidden-lg">
		<div class="d_flex fd_column">
			<div class="img-spiritism-mob"></div>
			<div class="content-spiritism">
				<div class="text-spiritism" style="padding: 40px 20px;">
					<div class="title-main-site-white"><?=$textos['spiritism']?></div>
					<div class="mt30"><?=$textos['text_spiritism']?></div>
					<div class="jc_center mt50">
						<a href="spiritism.php">
							<div class="btn-default-site-border"><?=$textos['read-more']?></div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="activities" class="hidden-xs hidden-sm">
		<div class="mt100 mb100">
			<div class="ai_center">
				<div class="f_1">
					<img src="images/activities_img.jpg" alt="" class="img-activities">
				</div>
				<div class="content-activities">
					<div class="text-activities">
						<div class="title-main-site"><?=$textos['activities']?></div>
						<div class="mt10" style="color: #434939"><?=$textos['text_activities']?></div>
						<div class="mt20">
							<a href="activities.php">
								<div class="btn-default-site"><?=$textos['se-all']?></div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="activities-mob" class="hidden-md hidden-lg">
		<div class="mt100 mb100">
			<div class="ai_center fd_column">
				<div class="f_1">
					<img src="images/activities_img.jpg" alt="" class="img-activities">
				</div>
				<div class="content-activities mt20">
					<div class="text-activities">
						<div class="title-main-site"><?=$textos['activities']?></div>
						<div class="mt10" style="color: #434939"><?=$textos['text_activities']?></div>
						<div class="mt20">
							<a href="activities.php" target="_blank" rel="noreferrer noopener">
								<div class="btn-default-site"><?=$textos['se-all']?></div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- <section id="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="title-main-site"><?=$textos['news']?></div> 
				</div>
			</div>
			<div class="row all_blog mt30">
				<?
					$sql = "SELECT * FROM publicacao ORDER BY id DESC LIMIT 3";
					$sql_pub = mysqli_query($link,$sql);
					$i = 0;

					while($pub = mysqli_fetch_array($sql_pub)) {
						echo '<div class="col-md-4 col-xs-12 div_feed text-center">';
							echo '<div class="box-card-blog mt10">';		
								echo '<a href="post.php?id='.$pub['id'].'">';
									echo '<div class="imagem_feed">';
										echo '<img class="img-blog" src="admin/uploads/publicacao/'.$pub['imagem'].'"/>';
									echo '</div>';
									echo '<div class="div-text">';
										echo '<div class="title-blog-index">'.$pub['titulo'].'</div>';
										echo '<p class="text-blog-index mt20">'.cortaString(urldecode($pub['descricao']), 130).'</p>';
									echo '</div>';
								echo '</a>';
							echo '</div>';
						echo '</div>';
						$i++;
					}
				?>
			</div>
			<div class="row mt50 mb100">
				<div class="more-blog">
					<a href="blog.php">
						<div class="ai_center">
							<div><i class="las la-plus-circle mr5"></i></div>
							<div><?=$textos['se-all-blog']?></div>
						</div>
					</a>
				</div>
			</div>
		</div> 
	</section> -->
		
<?
	require_once('includes/rodape.php');
?>