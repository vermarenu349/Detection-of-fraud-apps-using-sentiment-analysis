<?php
require 'dbvar.php';
require 'db-var.php';
	$db = new PDO('mysql:host=localhost;dbname='.$db_name,$user_name,$pass_key);
	R::setup( $db);


function retrive_login($id){
	
	$page=R::findLast('upload','id=? ',array($id));
	if($page){
		return $page;
	}
	else{
	return 0;
	}
		
}

function get_ratingindex(){
	
	$page=R::findLast('ratingindex');
	if($page){
		return $page;
	}
	else{
	return 0;
	}
		
}
function input_ratingindex($plus,$minus){
	$s= R::dispense('rattingindex');
	$s->plus=$plus;
	$s->minus=$minus;
	$said = R::store($s);
		
}

?>
