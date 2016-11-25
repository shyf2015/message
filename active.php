<meta charset="utf-8">
<?php
	$shyffile = 'shyf';

	$file = 'textdata';
	$data = file_get_contents($file);
	$arr = unserialize($data); 
	$arr[] = array(
		'name'=>$_GET['name'],
		'title'=>$_GET['title'],
		'content'=>$_GET['content'],
		'time'=>date('Y-m-d h:i:s')
	);
	$arr = serialize($arr);
	file_put_contents($file, $arr);

	file_put_contents($shyffile, $arr);
 ?>
 <p>添加留言成功</p>
 <a href="message.php">继续添加留言</a> | <a href="board.php">查看留言面板</a>