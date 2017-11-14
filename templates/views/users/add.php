
<h1>Создание пользователя</h1>
<form action="/users/add" method="POST">
	<input type="text" name="login" value=""> Логин <br />
	<input type="password" name="pass" value=""> Пароль (оставьте пустым чтобы не менять)<br />
	<input type="text" name="fio" value=""> ФИО<br />
	<input type="text" name="email" value=""> Email<br />
	<input type="text" name="role" value="0"> Роль (0 - пользователь, 1 - администратор)<br />


	<input type="submit" value="Сохранить"><br />
</form>