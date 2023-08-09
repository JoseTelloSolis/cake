<?php

if(isset($_SESSION['user'])){

	include('core/models/class.Blog.php');

	$blog = new Blog();

	if($_POST){
		$blog->crear();
		exit;
	}
	else{
		$template = new Smarty();
		$template->display('panel/blogcrear.tpl');
	}

}
else{
	header('location: admin');
}

?>