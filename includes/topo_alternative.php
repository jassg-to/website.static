<?
    @ob_start();
    require_once('admin/includes/conexao.php');
    @session_start();

    if(isset($_GET['idioma'])){
        if($_GET['idioma'] == 'pt'){
          $_SESSION['idioma'] = 'pt';
          $textos = include_once('traducao/pt.php');
        }
        if($_GET['idioma'] == 'en'){
          $_SESSION['idioma'] = 'en';
          $textos = include_once('traducao/en.php');
        }
      }else{
        if(isset($_SESSION['idioma']) && $_SESSION['idioma'] == 'pt'){
            $_SESSION['idioma'] = 'pt';
            $textos = include_once('traducao/pt.php');
        }else if(isset($_SESSION['idioma']) && $_SESSION['idioma'] == 'en'){
            $_SESSION['idioma'] = 'en';
            $textos = include_once('traducao/en.php');
        }else{
            $_SESSION['idioma'] = 'en';
            $textos = include_once('traducao/en.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <title>Joanna de Ângelis</title>
        <link rel="shortcut icon" href="images/favicon_img.png">

        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/template.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/responsive.css"/>

        <link rel="preconnect" href="https://fonts.gstatic.com"> <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> <!-- Open Sans -->
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"> <!-- Line Awesome -->
    
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>

    <body>
        <header>
            <nav class="navbar st-navbar navbar-fixed-top">
                <div class="second-top">
                    <div class="container">
                        <div class="ai_center jc_between">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" onclick="openNav()">
                                    <i class="las la-bars" id="barra_menu"></i>
                                </button>
                                <a href="index.php">
                                    <img class="logo" src="images/logotipo_joanna_img.png">
                                </a>
                            </div>
                            <div class="collapse navbar-collapse" id="st-navbar-collapse">
                                <ul class="nav navbar-nav navbar-right itens-menu" style="display: flex; align-items: center;">
                                    <li><a href="about.php" class="links_topo"><?=$textos['menu_about-us']?></a></li>
                                    <li class="dropdown">
                                        <a href="spiritism.php" class=" links_topo dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=$textos['menu_spiritism']?></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="spiritism.php" class="item-dropdown"><?=$textos['submenu_1']?></a></li>
                                            <li><a href="movement.php" class="item-dropdown"><?=$textos['submenu_2']?></a></li>
                                            <li><a href="groups.php" class="item-dropdown"><?=$textos['submenu_3']?></a></li>								
                                            <li><a href="federations.php" class="item-dropdown"><?=$textos['submenu_4']?></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="activities.php" class=" links_topo"><?=$textos['menu_activities']?></a></li>
                                    <!-- <li><a href="bookstore.php" class="links_topo"><?=$textos['menu_bookstore']?></a></li> -->
                                    <!-- <li><a href="library.php" class="links_topo"><?=$textos['menu_library']?></a></li> -->
                                    <!-- <li><a href="blog.php" class="links_topo"><?=$textos['menu_news']?></a></li> -->
                                    <li><a href="contact.php" class="links_topo"><?=$textos['menu_contact-us']?></a></li>
                                    <li id="" class="hidden-xs hidden-sm">
                                        <div class="bandeiraativa">
                                            <img class="currently_idiom" src="<?=(($_SESSION['idioma'] == 'pt')?'images/bandeira_brasil.png':'images/bandeira_usa.png')?>" style="width: 30px; height: 30px;">
                                            <div class="bandeiradois" style="z-index: 999;">
                                                <a onclick="<?=(($_SESSION['idioma'] == 'pt')?'changeEn()' : 'changePt()')?>">
                                                    <img class="option_idiom" src="<?=(($_SESSION['idioma'] == 'pt')?'images/bandeira_usa.png' : 'images/bandeira_brasil.png')?>" style="width: 30px; height: 30px; margin-left: 9px; margin-top: 0px;"> 
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div id="myNav" class="overlay">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="las la-times"></i></a>
                    <div class="overlay-content">
                        <ul class="list_overlay">
                            <li><a href="about.php" class="links_topo topic-mob" onclick="closeNav()"><?=$textos['menu_about-us']?></a></li>
                            <li>
                                <div><a href="spiritism.php" class=" links_topo topic-mob" onclick="closeNav()" style="padding: 25px 0;"><?=$textos['menu_spiritism']?></a></div>
                                <div><a href="spiritism.php" class="item-dropdown-mob"><?=$textos['submenu_1']?></a></div>
                                <div><a href="movement.php" class="item-dropdown-mob"><?=$textos['submenu_2']?></a></div>
                                <div><a href="groups.php" class="item-dropdown-mob"><?=$textos['submenu_3']?></a></div>
                                <div><a href="federations.php" class="item-dropdown-mob"><?=$textos['submenu_4']?></a></div>
                            </li>
                            <li><a href="activities.php" class=" links_topo topic-mob" onclick="closeNav()"><?=$textos['menu_activities']?></a></li>
                            <!-- <li><a href="bookstore.php" class="links_topo topic-mob" onclick="closeNav()"><?=$textos['menu_bookstore']?></a></li> -->
                            <!-- <li><a href="library.php" class="links_topo topic-mob" onclick="closeNav()"><?=$textos['menu_library']?></a></li> -->
                            <!-- <li><a href="blog.php" class="links_topo topic-mob" onclick="closeNav()"><?=$textos['menu_news']?></a></li> -->
                            <li><a href="contact.php" class="links_topo topic-mob" onclick="closeNav()"><?=$textos['menu_contact-us']?></a></li>
                            <li>
                                <div style="display:flex;align-items:center;justify-content:center;gap:20px;padding:15px;">
                                    <a onclick="changeEn()">
                                        <img src="<?=(($_SESSION['idioma'] == 'pt')?'images/bandeira_brasil.png':'images/bandeira_usa.png')?>" style="width: 30px; height: 30px;">
                                    </a>
                                    <a onclick="changePt()">
                                        <img src="<?=(($_SESSION['idioma'] == 'pt')?'images/bandeira_usa.png' : 'images/bandeira_brasil.png')?>" style="margin-left: 10px; width: 30px; height: 30px;"> 
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>						
                </div>
                
            </nav>
        </header>