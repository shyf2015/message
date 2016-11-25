<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言板</title>
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
		.container1{
			width: 100%;
			min-width: 1200px;
		}
		table{
			margin: 40px 100px;
		}
		.input{
			background: rgba(0, 0, 0, 0);
		}
		sub{
			color: red;
		}
	</style>
</head>
<body>
	<div class="head">
		<p>欢迎来到微险的留言板</p>
	</div>

	<div class="container">
	<form action="active.php">
		<table>
			<tr>
				<td>昵称</td>
				<td><input type="text" name="name" class="input" required="required"><sub>*</sub></td>
			</tr>
			<tr>
				<td>标题</td>
				<td><input type="text" name="title" class="input" required="required"><sub>*</sub></td>
			</tr>
			<tr>
				<td>内容</td>
				<td><textarea name="content" id="" cols="30" rows="10" class="input" required="required"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" value="提交留言"></td>
				<td><button>查看留言</button></td>
			</tr>
		</table>
	</form>
	</div>
</body>
</html>