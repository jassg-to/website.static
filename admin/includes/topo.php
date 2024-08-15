<?
    ob_start();
    $pagina = ((isset($_SESSION['pagina']))?$_SESSION['pagina']:'');
    require_once('includes/conexao.php');
    require_once('includes/verifica.php');
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Painel Administrativo</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.bootstrap.min.css">  
    <link rel="stylesheet" href="css/summernote-bs4.css">
    <link rel="stylesheet" href="css/summernote-lite.css">   
    <link rel="stylesheet" href="css/summernote.css">   

    <!-- include summernote css/js -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">

    <script>
      function countChar(val) {
        var len = val.value.length;
        if (len >= 1000) {
          val.value = val.value.substring(0, 1000);
          $('#charNum').text('Caracteres restantes: 0');
        } else {
          $('#charNum').text('Caracteres restantes: '+(1000 - len));
        }
      };
    </script>
</head>

<body>

<div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <nav class="navbar-default navbar-static-side" role="navigation">
                    <div class="sidebar-collapse">
                        <ul class="nav metismenu" id="side-menu">
                            <li class="nav-header">
                                <div class="dropdown profile-element">
                                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold" style="color: #fff;"><?=$_SESSION['adminnome']?></strong>
                                </div>
                                <div class="logo-element">
                                    PA
                                </div>
                            </li>
                            <li <?=(($pagina == 'dash')?'class="active"':'')?>><a href="dash.php"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span></a></li>
                            <li <?=(($pagina == 'publicacoes')?'class="active"':'')?>><a href="publicacoes.php"><i class="fa fa-pencil"></i> <span class="nav-label">Publicações</span></a></li>
                            <li <?=(($pagina == 'usuarios')?'class="active"':'')?>><a href="usuarios.php"><i class="fa fa-user"></i> <span class="nav-label">Usuários</span></a></li>
                        </ul>

                    </div>
                </nav>
            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="logout.php">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight" style="background-color: #fff; margin-top: 15px; padding: 20px;">