<?php

if(isset($_SESSION['user'])){

	include('core/models/class.Blog.php');

	$blog = new Blog();

	if($_POST){
		$blog->getDatos();
		exit;
	}
	else{
		$template = new Smarty();
		$template->display('panel/blog.tpl');
	}

}
else{
	header('location: admin');
}

?>