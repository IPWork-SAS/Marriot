<?php
    include_once('./controladores/validacion_controller.php');
    session_start();

    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $acceptLang = ['es', 'en']; 
    $lang = in_array($lang, $acceptLang) ? $lang : 'en';
    $_SESSION['i'] = $lang;
   
    $_SESSION['ip_ap'] = isset($_REQUEST['sip']) ? $_REQUEST['sip'] : "";
    $_SESSION['mac_ap'] = isset($_REQUEST['mac']) ? $_REQUEST['mac'] : "";
    $_SESSION['mac_cliente'] = isset($_REQUEST['client_mac']) ? $_REQUEST['client_mac'] : "";
    $_SESSION['ip_cliente'] = isset($_REQUEST['uip']) ? $_REQUEST['uip'] : "";
    $_SESSION['ssid'] = isset($_REQUEST['ssid']) ? $_REQUEST['ssid'] : "";

    $validacion = new Validacion();
    $url = $validacion->getUrlRedirection($_SESSION['mac_cliente']); 
  
    header($url);
?>  