<?php 
	$file = 'textdata';
	$data = file_get_contents($file);
	$arr = unserialize($data);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言面板</title>
	<style>
		*{
			padding: 0;
			margin: 0;
		}
		html,body{
			width: 100%;
			height: 100%;
		}
		body{
			width: 100%;
			height: 100%;
			background-image: url('http://r3.ykimg.com/05410408524788EF6A0A4B63A5665D45');
			background-repeat: no-repeat;
			background-size: 100% 100%;
			background-position: 0 0;
		}
		.head{
			width: 100%;
			min-width: 1200px;
			height: 100px;
			background: rgba(247,106,114,0.3);
			font-size: 50px;
			text-indent: 100px;
			line-height: 100px;
			color: #635;
		}
		table{
			margin: 20px 100px;
		}
		table tr:first-child{
			background: #9af;
			height: 30px;
		}
		table td{
			text-align: center;
		}
		table tr:hover{
			background: #579;
		}
		.caozuo span:hover{
			cursor: pointer;
			color: red;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<div class="head">
		<p>微险的留言面板</p>
	</div>
	<table border="1">
		<tr >
			<td style="width: 40px;">编号</td>
			<td style="width: 60px">姓名</td>
			<td style="width: 80px">标题</td>
			<td style="width: 400px">内容</td>
			<td style="width: 100px">时间</td>
			<td style="width: 100px">操作</td>
		</tr>
		<?php foreach($arr as $key=>$value){?>
			<tr>
				<td><?php echo $key+1 ?></td>
				<td><?php echo $value['name'] ?></td>
				<td><?php echo $value['title'] ?></td>
				<td><?php echo $value['content'] ?></td>
				<td><?php echo $value['time'] ?></td>
				<td class='caozuo'><span>删除</span> | <span>修改</span></td>
			</tr>
		<?php };?>
	</table>
	<div style="margin-left: 100px"><a href="message.php">我要留言</a></div>
</body>
</html>