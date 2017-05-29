<?php
	if(!isset($_SESSION)) session_start();

	$list = isset($_SESSION['list']) ? $_SESSION['list'] : array();

	function add_task($title='', $content=''){
		global $list;
		$list[] = array(
			'title' 	=> $title,
			'content'	=> $content
		);
	}

	function delete_task($index){
		var_dump($index);
		global $list;
		if($index >= 0 && $index <= (count($list) -1))
			$list = array_splice($list,$index,1);
	}

	function save_list(){
		global $list;
		$_SESSION['list'] = $list;
	}
?>