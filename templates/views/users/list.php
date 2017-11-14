<div class="">
	<?php if($_SESSION['is_admin'] == '1'):?>
		<div>
			<a href="users/add">Создать нового пользователя</a>
		</div>
	<?php endif;?>
	<table border>
	<tr>
		<td>Логин</td>
		<td>ФИО</td>
		<td>Email</td>
		<td>Роль</td>
		<?php if($_SESSION['is_admin'] == '1'):?>
			<td></td>
		<?php endif;?>

	</tr>
		<?php foreach($data as $user):?>
			<tr> 
				<td><a href="/users/edit/?id=<?=$user['id']?>"><?=$user['login']?></a></td>
				<td><?=$user['fio']?></td>
				<td><?=$user['email']?></td>
				<td><?=$user['role']?></td>
				<?php if($_SESSION['is_admin'] == '1'):?>
					<td><a href="/users/delete/?id=<?=$user['id']?>">Удалить</a></td>
				<?php endif;?>
			</tr>
		<?php endforeach;?>
	</ul>
</div>
