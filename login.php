<?php 
	require "db.php";

	$data = $_POST;

	if ( isset($data['do_login'])) 
	{
		$errors = array();
		$user = R::findOne('users', 'login = ?', array($data['login']));
		
		if ( $user ) 
		{	
			if ( password_verify($data['password'], $user->password) ) {
				$_SESSION['logged_user'] = $user;
				echo '<div style="font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", "serif";">Вы  успешно аторизованы! Можете перейти на <span class="avt"><a href="index.php">Главную</a></span> страницу</div><hr>';
			} else {
				$errors[] = 'Пользователь с таким паролем не найден';
			}
		} else 
		{
			$errors[] = 'Пользователь с таким логином не найден';
		}
		
		if( ! empty($errors) ) 
	{ 
		echo '<div style="color:rgba(223,129,130,1.00);top:90%">'.array_shift($errors).'</div><hr>';	
	}
		
	}
?><head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>

<br>
<p class="slovo">Авторизация</p>
<div style="border-top: 2px solid #cdcdcd;">
	<br>
	<br>
	<br>
	<br>
	<br>
<div class="form">
<form action="login.php" method="POST">

	<p>
		<p><strong class="strong">Логин</strong>:</p>
		<input type="text" name="login" value="<?php echo @$data['login'] ?>">
	</p>

	<p>
		<p><strong class="strong">Пароль</strong>:</p>
		<input type="password" name="password" value="<?php echo @$data['password'] ?>">
	</p>

	<button type="submit" name="do_login" class="knopka1">Войти</button>
</form>
</div>
</div>

