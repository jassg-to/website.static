<?
	session_start();
	$_SESSION['pagina'] = 'dash';
    require_once('includes/topo.php');
?>
    <h2><b>Dashboard</b></h2><hr>
    <div class="row">
        <div class="col-md-2 text-center">
            <a href="publicacoes.php" style="color: #2F4050;">
                <i class="fa fa-pencil" style="font-size: 4em;"></i>
                <h3 style="font-weight: bold;">Publicações</h3>
            </a>
        </div>
    	<div class="col-md-2 text-center">
    		<a href="usuarios.php" style="color: #2F4050;">
    			<i class="fa fa-user" style="font-size: 4em;"></i>
    			<h3 style="font-weight: bold;">Usuários</h3>
    		</a>
    	</div>
    </div>
<?
    require_once('includes/rodape.php');
?>      
    