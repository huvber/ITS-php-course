<?php
	interface IList{
		public function add_task($title='', $content);
		public function delete_task($task_index);
		public function save_list();
	} 

	class SessionList implements IList{
		private $list;
		function __construct(){
			$this->list = array();
		}
		function add_task($title, $content){
			$this->list[] = array(
				'title' 	=> $title,
				'content'	=> $content
			);
		} 
	}
	//$list = new SessionList();
	$list = new DbList();
	if(!isset($_SESSION)) session_start();
	include_once('./todo_list_logic.php');
	if(!empty($_POST['new_task_title'])){
		$list->add_task($_POST['new_task_title'], $_POST['new_task_content']);
	}
	if(isset($_POST['del'])){
		$list->delete_task(intval($_POST['del']));
		
	}
	$list->save_list();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>TODO LIST</title>
		<style>
			li { list-style: none; }
			li article {
				display: block;
				border:1px solid #333;
				margin:10px;
				padding-left: 10px;
			}
			li form {
				width:100%;
			}
			li form input[type=submit]{
				float:right;
				margin-right: 3px;
			}
		</style>
	</head>
	<body>
		<h1>TODO List</h1>
		<ul>
			<?php foreach($list as $index => $task){
				include('./list_item.php');
			} ?>
		</ul>
		<form action="" method="post">
			<p>New Task:</p>
			<label>Title: <input type="text" name="new_task_title" /></label>
			 <br />
			<label>Content: <br />
				<textarea name="new_task_content"></textarea>
			</label>
			<input type="submit" value="Add" />
		</form>
	</body>
</html>
