<div class="edit_page">
	<h4>Редактирование профиля</h4>
	<form action="/users/edit/?id=<?=$data[0]['id']?>" method="POST">
		<input type="text" name="login" value="<?=$data[0]['login']?>"> Логин <br />
		<input type="password" name="pass" value=""> Пароль (оставьте пустым чтобы не менять)<br />
		<input type="text" name="fio" value="<?=$data[0]['fio']?>"> ФИО<br />
		<input type="text" name="email" value="<?=$data[0]['email']?>"> Email<br />
		<input type="number" style="width:169px" min="0" max="1" name="role" value="<?=$data[0]['role']?>"> Роль (0 - пользователь, 1 - администратор)<br />
		<input type="submit" value="Сохранить"><br />
	</form>
</div>