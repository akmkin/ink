<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-ru" lang="ru-ru" dir="ltr">
<head> 
	<link href="/templates/css/style.css" rel="stylesheet"> 
	<title>Users</title>
</head>
<body>
	<div class="login">
		<?php if($_SESSION['login'] == ''):?>
			<?= View::factory_content('login')?>
		<?php else :?>
			<a href="/login/logout">Выйти</a> (<?=$_SESSION['login']?>)
		<?php endif?>
	</div>

	<div class="header">
		<div class="top_line">
			<h1>Пользователи</h1>
		</div>
		<div class="que">
			логин админа - admin<br />
			пароль - DAda8878<br />
		</div>
	</div>

	<?php if($_SESSION['login'] != ''):?>
		<div class="left_menu">
			<ul>
				<li><a href="/users">Список пользователей</a></li>
			</ul>
		</div>
	<?php endif?>

	<div class="body">
		<?= View::factory_content($content, $data)?>
	</div>
	<div class="footer">
	</div>
</body>
</html>