<?php 

	require "db.php";

	$data = $_POST;
if( isset($data['do_signup']) )
{  
	$errors = array();
	if( trim($data['login']) == '')
	{
		$errors[] = 'Введите логин!';
	}
	 
	if( trim($data['email']) == '')
	{
		$errors[] = 'Введите Email!';
	}
	 
	if( $data['password'] == '')
	{
		$errors[] = 'Введите пароль!';
	}
	
	if( $data['password_2'] != $data['password'])
	{
		$errors[] = 'Повторный пароль введён неверно!';
	}
	
	if( R::count('users', "login = ?", array($data['login'])) > 0)
	{
		$errors[] = 'Пользователь с таким логином уже существует';
	}
	
	if( R::count('users', "email = ?", array($data['email'])) > 0)
	{
		$errors[] = 'Пользователь с таким email уже существует';
	}
	
	if( empty($errors) ) 
	{ 
		$user = R::dispense('users');
		
		$user->login = $data['login'];
		$user->email = $data['email'];
		$user->password = password_hash($data['password'], PASSWORD_DEFAULT);
		R::store($user);
		
		echo '<div style="color:green;">Вы  успешно зарегестрированны!<br><a href="login.php"> Авторизоваться!</a></div><hr>';
	} 
	else 
	{	
		echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';	
	}
}

?>

<heder> 
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</heder>
<br>
<p class="slovo">Регистрация</p>
<div style="border-top: 2px solid #cdcdcd;">
	<div class="form">
<form action="signup.php" method="POST">
	
	<p>
		<p><strong style="35px; font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", "serif";">Ваш логин</strong>:</p>
		<input type="text" name="login" value="<?php echo @$data['login'] ?>">
	</p>
	<p>
		<p><strong style="35px; font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", "serif";" >Ваш Email</strong>:</p>
		<input type="email" name="email"  value="<?php echo @$data['email'] ?>">
	</p>
	<p>
		<p><strong style="35px; font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", "serif";">Ваш пароль</strong>:</p>
		<input type="password" name="password"  value="<?php echo @$data['password'] ?>">
	</p>
	<p>
		<p><strong style="35px; font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", "serif";">Ваш пароль второй раз</strong>:</p>
		<input type="password" name="password_2"  value="<?php echo @$data['password_2'] ?>">
	</p>
	<button type="submit" name="do_signup" class="knopka2">Зарегестрироваться</button>
</form>
</div>
</div>