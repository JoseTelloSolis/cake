<?php

include('core/models/class.Usuarios.php');
include('core/models/class.Categorias.php');
require_once 'styles/librerias/facebook_sdk/src/fbConfig.php';

$usuarios = new Usuarios();
$categorias = new Categorias();

if(isset($_POST['tipo']) and $_POST['tipo'] == 'ingresar'){
	$usuarios->login();
}
elseif(isset($_POST['tipo']) and $_POST['tipo'] == 'registrarse'){
	$usuarios->registro();
}
else{
	$loginURL = '';

	if(isset($accessToken)){
	    if(isset($_SESSION['facebook_access_token'])){
	        $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
	    }else{
	        // Token de acceso de corta duración en sesión
	        $_SESSION['facebook_access_token'] = (string) $accessToken;
	        
	          // Controlador de cliente OAuth 2.0 ayuda a administrar tokens de acceso
	        $oAuth2Client = $fb->getOAuth2Client();
	        
	        // Intercambia una ficha de acceso de corta duración para una persona de larga vida
	        $longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
	        $_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
	        
	        // Establecer token de acceso predeterminado para ser utilizado en el script
	        $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
	    }
	    
	    // Redirigir el usuario de nuevo a la misma página si url tiene "code" parámetro en la cadena de consulta
	    if(isset($_GET['code'])){
	        header('Location: ./');
	    }
	    
	    // Obtener información sobre el perfil de usuario facebook
	    try {
	        $profileRequest = $fb->get('/me?fields=name,first_name,last_name,email,link,gender,locale,picture');
	        $fbUserProfile = $profileRequest->getGraphNode()->asArray();
	    } catch(FacebookResponseException $e) {
	        echo 'Graph returned an error: ' . $e->getMessage();
	        session_destroy();
	        // Redirigir usuario a la página de inicio de sesión de la aplicación
	        header("Location: ./");
	        exit;
	    } catch(FacebookSDKException $e) {
	        echo 'Facebook SDK returned an error: ' . $e->getMessage();
	        exit;
	    }
	    	    
	    // datos de usuario que iran a  la base de datos
	    $fbUserData = array(
	        'oauth_provider'=> 'facebook',
	        'oauth_uid'     => $fbUserProfile['id'],
	        'first_name'    => $fbUserProfile['first_name'],
	        'last_name'     => $fbUserProfile['last_name'],
	        'email'         => $fbUserProfile['email'],
	        'gender'        => $fbUserProfile['gender'],
	        'locale'        => $fbUserProfile['locale'],
	        'picture'       => $fbUserProfile['picture']['url'],
	        'link'          => $fbUserProfile['link']
	    );

	    $id = $usuarios->checkUser($fbUserData);
	    
	    // imprimir datos de usuario
	    if(!empty($userData)){

	    	$_SESSION['user_web']['id'] = $id;
			$_SESSION['user_web']['user'] = $userData['email'];
			$_SESSION['user_web']['nombre'] = $userData['first_name'];
			$_SESSION['user_web']['telefono'] = '';
	    }
	    
	}else{
	    // Obtener la liga de inicio de sesión
	    $loginURL = $helper->getLoginUrl($redirectURL, $fbPermissions);
	}
	
	$menu = $categorias->getMenu();

	$template = new Smarty();
	$template->assign('menu', $menu);
	$template->assign('loginURL', htmlspecialchars($loginURL));
	$template->display('web/login.tpl');
}

?>