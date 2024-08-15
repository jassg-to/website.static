<?
	session_start();
	$_SESSION['pagina'] = 'publicacoes';
    require_once('includes/topo.php');
    require_once('includes/imagem.php');
    require_once('includes/resize.php');

    function store_uploaded_image($html_element_name, $new_img_width, $folder) {
        $imagem         = $_FILES[$html_element_name]['name'];
        $imgtemp        = $_FILES[$html_element_name]['tmp_name'];
        
        $file_info = pathinfo($imagem);
        $novonome = md5($imagem . date('G:i:s')) .'.'. $file_info['extension'];
        $target_file = $folder.basename($novonome);

        $image = new SimpleImage();
        $image->load($_FILES[$html_element_name]['tmp_name']);
        $image->resizeToWidth($new_img_width);
        $image->save($target_file);
        return $novonome; //return name of saved file in case you want to store it in you database or show confirmation message to user
    }

    $acao   = ((isset($_REQUEST['acao']))?$_REQUEST['acao']:'');
    $id     = ((isset($_REQUEST['id']))?$_REQUEST['id']:'');

    if(isset($_POST['btn-adicionar'])){
        $titulo             = $_POST['txttitulo'];
        $descricao          = urlencode($_POST['txtdescricao']);
        $imagem             = ''; 
        $imagem             = store_uploaded_image('txtimagem', '1080', 'uploads/publicacao/');  
        $data_gerado        = date('Y-m-d H:i:s');

        $add = mysqli_query($link, 'INSERT INTO publicacao (titulo, descricao, imagem, data_gerado) VALUES ("'.$titulo.'", "'.$descricao.'", "'.$imagem.'", "'.$data_gerado.'")');

        if($add){
            header('Location: publicacoes.php?retorno=1');
            exit();
        }else{
            header('Location: publicacoes.php?retorno=0');
            exit();
        }
    }
    if(isset($_POST['btn-atualizar'])){
        $titulo             = $_POST['txttitulo'];
        $descricao          = urlencode($_POST['txtdescricao']);
        if($_FILES['txtimagem']['name'] != ''){
            $imagem         = ''; 
            $imagem         = store_uploaded_image('txtimagem', '1080', 'uploads/publicacao/'); 
            $att = mysqli_query($link, 'UPDATE publicacao SET titulo = "'.$titulo.'", descricao = "'.$descricao.'", imagem = "'.$imagem.'" WHERE id = "'.$id.'" LIMIT 1');
        }else{
            $att = mysqli_query($link, 'UPDATE publicacao SET titulo = "'.$titulo.'", descricao = "'.$descricao.'" WHERE id = "'.$id.'" LIMIT 1');
        }

        if($att){
            header('Location: publicacoes.php?retorno=1');
            exit();
        }else{
            header('Location: publicacoes.php?retorno=0');
            exit();
        }
    }
    if($acao == 'editar'){
        $edd = mysqli_query($link, 'SELECT * FROM publicacao WHERE id = "'.$id.'" LIMIT 1');
        
        if(mysqli_num_rows($edd) > 0){
            $editar = mysqli_fetch_array($edd);
        }else{
            header('Location: publicacoes.php?retorno=0');
            exit();   
        }
    }
    if($acao == 'deletar'){
        $del = mysqli_query($link, 'DELETE FROM publicacao WHERE id = "'.$id.'" LIMIT 1');

        if($del){
            header('Location: publicacoes.php?retorno=1');
            exit();  
        }else{
            header('Location: publicacoes.php?retorno=0');
            exit();   
        }
    }

if($acao == ''){
?>
    <h2><b>Publicações</b> <a href="publicacoes.php?acao=novo" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Adicionar</a></h2><hr>
    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Imagem</th>
                <th>Título</th>
            	<th style="width: 100px;">Opções</th>
            </tr>
        </thead>
        <tbody>
        	<?
        		$sql_publicacao = mysqli_query($link, 'SELECT * FROM publicacao');
        		while($publicacao = mysqli_fetch_array($sql_publicacao)){
        			echo '<tr>';
        			echo '<td>'.$publicacao['id'].'</td>';
                    echo '<td><img src="uploads/publicacao/'.$publicacao['imagem'].'" style="width: 150px;"></td>';
        			echo '<td>'.$publicacao['titulo'].'</td>';
        			echo '<td><a href="publicacoes.php?acao=editar&id='.$publicacao['id'].'" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a> <a href="publicacoes.php?acao=deletar&id='.$publicacao['id'].'" class="btn btn-danger btn-xs btnremover"><i class="fa fa-trash"></i></a></td>';
                    echo '</tr>';
        		}
        	?>
        </tbody>
    </table>
    <!-- modal delete -->
    <div class="modal fade confirmaexclusao" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content text-center" style="padding:15px;">
                <h2 class="text-danger">Deseja realmente remover?</h2>
                <a href="javascript: void();" class="btn btn-default btn-lg" data-dismiss="modal">Cancelar</a>
                <a href="#" class="btn btn-danger btn-lg" id="btnconexclusao">Confirmar</a>
            </div>
        </div>
    </div>

    <? if($_GET['retorno'] == '0') { ?>
        <!-- modal erro -->
        <div class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content text-center" style="padding:15px;">
                    <h2 class="text-danger">Ocorreu um erro ao incluir a publicaçāo.</h2>
                    <a href="javascript: void();" class="btn btn-default btn-lg" data-dismiss="modal">OK</a>
                </div>
            </div>
        </div>
<? 
        } 
}
if($acao == 'editar' or $acao == 'novo'){
?>
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header pt">    
                <b><?=(($acao == 'novo')?'Nova publicacao':$editar['titulo'])?></b>
            </h2>
        </div>
        <br/>
    </div>
    <!-- /.row -->

    <form method="POST" action="" enctype="multipart/form-data">
        <br/>
        <div class="row">
            <div class="col-md-4 pt">
                <label>Título</label>
                <input type="text" class="form-control" name="txttitulo" placeholder="Digite o título." value="<?=(($acao == 'editar')?$editar['titulo']:'')?>" required>
            </div>

            <div class="col-md-4">
                <label>Imagem<small>(1920x1080px)</small></label>
                <input <?=(($acao == 'novo')?'required':'')?> type="file" class="form-control" name="txtimagem" onchange="openFile(event)">
            </div>
            <div class="col-md-12">
                <?php if(isset($editar['imagem']) <> NULL) : ?>
                <img src="uploads/publicacao/<?= $editar['imagem'] ?>" id="image_post" style="width: 100%; height: 100%; object-fit: cover; margin-top: 15px;" />
                <?php endif; ?>
                <img id="preview" style="display: none; width: 100%; height: 100%; object-fit: cover; margin-top: 15px;" />     
            </div>
            

            <div class="col-md-12 conteudo pt">
                <label>Conteúdo da Publicação</label>
                <textarea name="txtdescricao" id="summernote" class="form-control"><?=(($acao == 'editar')?urldecode($editar['descricao']):'')?></textarea>
            </div>      

        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <input type="submit" class="btn btn-success pull-right" name="<?=(($acao == 'novo')?'btn-adicionar':'btn-atualizar')?>" value="<?=(($acao == 'novo')?'Adicionar':'Salvar')?>">
            </div>
        </div>
        <!-- /.row -->
    </form>
<?
}
require_once('includes/rodape.php');
?>    
    