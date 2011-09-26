<?php

		include dirname(__FILE__)."/include/main.php";
	

	$TITLE = 'Comments';

	$TABLE = 'ava_comments';

	$DEP = array(
		'comment' => 'Comment'
		);
	$IND = array(
		'link_id' => 'Link ID'
    );

	$HIDDEN = array(
		'user' => 1
		);
		
	$TYPE = array(
		'link_id' => 'text',
		'comment' => 'text'
		);
	

	$ACTION = $_GET['action'];//'INSERT';
	//TINYMCE

	
		include A_HOME.'/add_smth.php'
	
	
	
?>