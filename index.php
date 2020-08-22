<?php
	require "db.php";

?>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
	<link rel="stylesheet" href="style.css">
</head>

<body id="bo">
	<div id="closee"></div>
	<!-- Кнопка прокрутки -->
		<button type="button" class="up" style="background: none;"><img src="images/up.png"></button>
	<!-- Конец кнопки прокрутки -->
	<!-- это верхнее меню -->
	<div class="top"> <div id="closeee"></div>
		<button id="button"><img src="images/Без имени-1.png" class="n" alt="меню"></button>
		<button id="open"><img src="images/set.png" class="n" alt="меню"></button>
		<button id="loginn"><img src="images/computer-icons-clip-art-google-account-user-account-avatar.png" class="nr" alt="Получать рассылку"></button>

		<div id="settings" class="settings">
		<div class="color-filters">

          <span class="span"><label>Цвет текста:
            <select class="filter select color-setting" name="font-color">
              <option class="select" value="inherit" selected>По умолчанию</option>
              <option class="select" value="black">Чёрный</option>
              <option class="select" value="white">Белый</option>
              <option class="select" value="ghostwhite">Светло-серый</option>
              <option class="select" value="pink">Розовый</option>
              <option class="select" value="darkred">Тёмно-красный</option>
              <option class="select" value="darkorange">Оранжевый</option>
              <option class="select" value="saddlebrown">Коричневый</option>
              <option class="select" value="gold">Золотой</option>
              <option class="select" value="greenyellow">Салатовый</option>
              <option class="select" value="forestgreen">Зелёный</option>
              <option class="select" value="aquamarine">Аквамарин</option>
              <option class="select" value="lightskyblue">Небесно-голубой</option>
              <option class="select" value="lightsteelblue">Серо-голубой</option>
              <option class="select" value="darkblue">Тёмно-синий</option>
              <option class="select" value="indigo">Индиго</option>
              <option class="select" value="mediumpurple">Фиолетовый</option>
              <option class="select"  value="purple">Пурпурный</option>
            </select>
          </label>
			</span>
			<br>
			<span class="span">
          <label>Цвет фона:  &nbsp;
            <select class="filter background-setting select" name="background-color">
              <option class="select" value="inherit" selected>По умолчанию</option>
              <option class="select" value="black">Чёрный</option>
              <option class="select" value="white">Белый</option>
              <option class="select" value="ghostwhite">Светло-серый</option>
              <option class="select" value="pink">Розовый</option>
              <option class="select" value="darkred">Тёмно-красный</option>
              <option class="select" value="darkorange">Оранжевый</option>
              <option class="select" value="saddlebrown">Коричневый</option>
              <option class="select" value="gold">Золотой</option>
              <option class="select" value="greenyellow">Салатовый</option>
              <option class="select" value="forestgreen">Зелёный</option>
              <option class="select" value="aquamarine">Аквамарин</option>
              <option class="select" value="lightskyblue">Небесно-голубой</option>
              <option class="select" value="lightsteelblue">Серо-голубой</option>
              <option class="select" value="darkblue">Тёмно-синий</option>
              <option class="select" value="indigo">Индиго</option>
              <option class="select" value="mediumpurple">Фиолетовый</option>
              <option class="select" value="purple">Пурпурный</option>
            </select>
          </label>
		  
				</span>
				</div>
			<span class="span">
        <label>Размер текста (<span class="pixels">25</span>px)
						<br>
						<br>
          <input class="size-setting range" type="range" min="10" max="68" step="1" value="25">
        </label>
				</span>
	</div>
	</div>
	<!-- конец верхнего меню -->
	<!-- начало бокового меню -->
<div id="close"><div class="bb"><img src="images/Без имени-3.png" alt="закрыть" class="pas" style="height: 9%;"></div></div>
<div id="box">
	<footer class="footerMenu">
			<a href="https://plus.google.com/share?url=YOUR-URL"><img src="images/googlePlus.png" class="to" alt="Поделиться в google plus"></a>
			<a href="https://vk.com/share.php?url=vk.com&title=vk.com&description=YOUR-DESCRIPTION&image=vk.com&noparse=true"><img src="images/vk.png" class="to" alt="Поделиться ВКонтакте"></a>
			<a href="https://twitter.com/intent/tweet?text=YOUR-TITLE&url=YOUR-URL&via=TWITTER-HANDLE"><img src="images/twit.png" class="to" alt="Поделиться в twitter"></a>
			<a href="https://www.facebook.com/sharer/sharer.php?u=facebook.com"><img src="images/facebook.png" class="to"s alt="Поделиться facebook"></a>
			<A href="https://pinterest.com/pin/create/button/?url=YOUR-URL&description=YOUR-DESCRIPTION&media=YOUR-IMAGE-SRC"><img src="images/pint.png" class="to" alt="поделиться а Pinterest"></a>
	</footer>
<!-- Не трогать -->
	</div> <!-- Не трогать -->
	<!-- конец бокового меню -->
<br>
<br>
<br>
		<div id="ff" class="ff">
			<div class="ee">
	<?php if( isset($_SESSION['logged_user']) ) : ?>
<br>
<br>
<br>
		Здравствуйте, <?php echo $_SESSION['logged_user']->login; ?>!
		Вы успешно авторизированны! <br>
		Рассылка будет автоматически присылать информацию вам на email!
	<hr>
		<span class="avt"><a href="/">Вернуться на главную</a></span> <br>
		<span class="avt"><a href="logout.php">Выйти </a></span>
	<?php else : ?>
<br>
<br>
	Для получения рассылки с информацией  необходимо <br> <span class="avt"><a href="/login.php">Авторизоваться</a></span> <br> <br>
	Если у вас ещё нет учётной записи, необходимо <br> <span class="avt"><a href="/signup.php">Зарегестрироваться</a></span>
<br>
<br>
	Просьба указать настоящий Email, чтобы <br> до вас дохатили все новости
	<?php endif; ?>
			</div>
		</div>
<br>
<br>
		<div class="tooltip">
      <span class="tooltip-text"></span>
      <button class="button close-button" type="button"><span>Закрыть</span></button>
    </div>
<article class="longread">
	<p>sdfjsdkfhjmcnvjxkhfnmsdnfnljvcvlxdgfdskglj</p>
	<p><button type="button" class="tooltip-button" data-tooltip-text="семейство кошачьих">Львы</button> живут в сахаре</p>
</article>
  	</label><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<script type="text/javascript" src="script.js"></script>
</body>
