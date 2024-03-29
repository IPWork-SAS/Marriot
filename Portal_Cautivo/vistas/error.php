<?php
    session_start();
   
    if (isset($_REQUEST['i'])) {
        $_SESSION['i'] = $_REQUEST['i'];
        $lang = $_REQUEST['i'];
    } else {
        $lang = $_SESSION["i"]; 
    }  

    include_once("../lang/{$lang}.php"); 
    
    if (isset($_REQUEST['e'])) {
        switch ($_REQUEST['e']) {          
            case 'error_licencia':
                $error_message = $lang['error_licencia'];
                break;
            
            default:
                $error_message = $lang['error_url'];
                break;
        }
    } else {
        $error_message = $lang['error_url'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$lang['titulo_website']?></title>   
    <link rel="stylesheet" href="../vendor/flag-icon/flag-icon.css"> 
    <link rel="stylesheet" href="../vendor/flag-icon/flag-icon.min.css"> 
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/error.css">
</head>
<body>
    <div class="selector-idioma">
        <?php if ($lang['lang'] == 'es'){ ?>
            <div class="icono-idioma">
                <a href="../vistas/error.php?i=en"><img src="../vendor/flag-icon/flags/4x3/us.svg" alt=""></a>
                <span>EN</span>
            </div>
        <?php } else { ?>
            <div class="icono-idioma">
                <a href="../vistas/error.php?i=es"><img src="../vendor/flag-icon/flags/4x3/es.svg" alt=""></a>
                <span>ES</span>
            </div>
        <?php } ?>       
    </div>
    <div class="container">
        <div class="row h-100">
            <div class="col-sm-12 my-auto">
                <div class="card"> 
                    <div class="logo">
                        <img src="../img/logo_1.png" alt="">
                        <p><?=$error_message?></p>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    
    
 
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>    
</body>
</html>