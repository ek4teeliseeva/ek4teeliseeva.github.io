<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>Математика 19</title>
</head>
<body>
<header>
<div class="nameteacher">
    <p>Елисеева Екатерина Александровна - учитель математики. МБОУ СОШ № 19</p>
</div>
<div class="menu">
<nav role="navigation">
 <ul>
 <li><a href="#">Информация</a>
 <ul class="dropdown">
 <li class="tablinks" onclick="openCity(event, 'onteacher')"><a href="#">О учителе</a></li>
 <li class="tablinks" onclick="openCity(event, 'onlesson')"><a href="#">Об обучении</a></li>
 <li class="tablinks" onclick="openCity(event, 'document')"><a href="#">Документация</a></li>
 <li class="tablinks" onclick="openCity(event, 'itog')"><a href="#">Оценки</a></li>
 </ul>
 </li>
 <li><a href="#">Обучение</a>
 <ul class="dropdown">
 <li onclick="openCity(event, 'utheb')"><a href="#">Учебные материалы</a></li>
 <li onclick="openCity(event, 'control')"><a href="#">Контрольные задания</a></li>
 <li onclick="openCity(event, 'domash')"><a href="#">Домашнее задание</a></li>
 </ul>
 </li>
 <li onclick="openCity(event, 'phones')"><a href="#">Контакты</a>
 </li>
  <li onclick="openCity(event, 'news')"><a href="#">Новости</a>
 </li>
 </ul>
</nav>
</div>
</header>
<article>
	<div class="teath1" id="onteacher">
<div class="photo"></div>
<div class="teath">
	<p class="pteach">Екатерина Александровна</p>
	<p class="pttext">Учитель, который знает своё дело. В настоящее время работает в<br>
	МБОУ СОШ №19 преподаёт математику. Очень ценится способность поддерживать дисциплину,
	а также все задачи выполняет своевременно и очень трудолюбива! На этом сайте хранятся все задания для учеников,
	оценки и вся информация, как и чем пользоватся. Материалы выкладываются каждую неделю.
	Все материалы лично проверяет перед тем как выложить на сайт.
    </p>
</div>
    </div>
    <div class="teath1" id="onlesson">
<div class="teathtext">
	<p class="pteachp">Об обучении</p>
		<p class="pttext1">Обучение из себя представляет комплекс обычного в классе и домашнего.
			работы проверяются как в тетради, так и электронно. Оценка выставляется в журналы письменно и электронно.
			Если вы взяли урок или домашнее задание из сайта, то своевременно выполняйте по программе.
			Каждая тема расписана согласно календарю. Контрольные вопросы и задания отправляются на электронные адреса -
			почта или соцсети, а за тем ставится оценка и публикуется на этом сайте.
    </p>
</div>
    </div>


    <div class="teath1" id="document">
<div class="teathtext">
	<p class="pteachp">Документация</p>
	<div class="info">
<?php
  $dir = 'Документация/'; // Папка с изображениями
  $files = scandir($dir); // Берём всё содержимое директории
  echo "<link rel='stylesheet' type='text/css' href='style.css'>";
  echo "<center>";
  echo "<div class='procrutca'>"; // Начинаем блок прокрутки
  echo "<div class='divphp'>"; // Начинаем блок

  for ($i = 0; $i < count($files); $i++) { // Перебираем все файлы
    if (($files[$i] != ".") && ($files[$i] != "..")) { // Текущий каталог и родительский пропускаем
      $path = $dir.$files[$i]; // Получаем путь к ссылке
      echo "<a href='$path' class='a' target='_blank'>$path"; // Делаем ссылку на блок
         echo "<table>";
  echo "<td>";
  echo "<tr>";
        echo "</tr>";
  echo "</td>";
  echo "</table>";
      echo "</a>"; // Закрываем ссылку
    }
  }

  echo "</div>"; // Закрываем блок
  echo "</div>"; // Закрываем блок прокрутки
  echo "</center>";
?>
	</div>
</div>
    </div>


    <div class="teath1" id="itog">
<div class="teathtext">
	<p class="pteachp">Оценки</p>
	<div class="info">
<?php
  $dir = 'Оценка/'; // Папка с изображениями
  $files = scandir($dir); // Берём всё содержимое директории
  echo "<link rel='stylesheet' type='text/css' href='style.css'>";
  echo "<center>";
  echo "<div class='procrutca'>"; // Начинаем блок прокрутки
  echo "<div class='divphp'>"; // Начинаем блок

  for ($i = 0; $i < count($files); $i++) { // Перебираем все файлы
    if (($files[$i] != ".") && ($files[$i] != "..")) { // Текущий каталог и родительский пропускаем
      $path = $dir.$files[$i]; // Получаем путь к ссылке
      echo "<a href='$path' class='a' target='_blank'>$path"; // Делаем ссылку на блок
         echo "<table>";
  echo "<td>";
  echo "<tr>";
        echo "</tr>";
  echo "</td>";
  echo "</table>";
      echo "</a>"; // Закрываем ссылку
    }
  }

  echo "</div>"; // Закрываем блок
  echo "</div>"; // Закрываем блок прокрутки
  echo "</center>";
?>
	</div>
</div>
    </div>

    <div class="teath1" id="utheb">
<div class="teathtext">
	<p class="pteachp">Учебные материалы</p>
	<div class="info">
<?php
  $dir = 'Учебные/'; // Папка с изображениями
  $files = scandir($dir); // Берём всё содержимое директории
  echo "<link rel='stylesheet' type='text/css' href='style.css'>";
  echo "<center>";
  echo "<div class='procrutca'>"; // Начинаем блок прокрутки
  echo "<div class='divphp'>"; // Начинаем блок

  for ($i = 0; $i < count($files); $i++) { // Перебираем все файлы
    if (($files[$i] != ".") && ($files[$i] != "..")) { // Текущий каталог и родительский пропускаем
      $path = $dir.$files[$i]; // Получаем путь к ссылке
      echo "<a href='$path' class='a' target='_blank'>$path"; // Делаем ссылку на блок
         echo "<table>";
  echo "<td>";
  echo "<tr>";
        echo "</tr>";
  echo "</td>";
  echo "</table>";
      echo "</a>"; // Закрываем ссылку
    }
  }

  echo "</div>"; // Закрываем блок
  echo "</div>"; // Закрываем блок прокрутки
  echo "</center>";
?>
	</div>
</div>
    </div>


    <div class="teath1" id="control">
<div class="teathtext">
	<p class="pteachp">Контрольные задания</p>
	<div class="info">
<?php
  $dir = 'Контрольные/'; // Папка с изображениями
  $files = scandir($dir); // Берём всё содержимое директории
  echo "<link rel='stylesheet' type='text/css' href='style.css'>";
  echo "<center>";
  echo "<div class='procrutca'>"; // Начинаем блок прокрутки
  echo "<div class='divphp'>"; // Начинаем блок

  for ($i = 0; $i < count($files); $i++) { // Перебираем все файлы
    if (($files[$i] != ".") && ($files[$i] != "..")) { // Текущий каталог и родительский пропускаем
      $path = $dir.$files[$i]; // Получаем путь к ссылке
      echo "<a href='$path' class='a' target='_blank'>$path"; // Делаем ссылку на блок
         echo "<table>";
  echo "<td>";
  echo "<tr>";
        echo "</tr>";
  echo "</td>";
  echo "</table>";
      echo "</a>"; // Закрываем ссылку
    }
  }

  echo "</div>"; // Закрываем блок
  echo "</div>"; // Закрываем блок прокрутки
  echo "</center>";
?>
	</div>
</div>
    </div>


    <div class="teath1" id="domash">
<div class="teathtext">
	<p class="pteachp">Домашнее задание</p>
	<div class="info">
<?php
  $dir = 'Домашние/'; // Папка с изображениями
  $files = scandir($dir); // Берём всё содержимое директории
  echo "<link rel='stylesheet' type='text/css' href='style.css'>";
  echo "<center>";
  echo "<div class='procrutca'>"; // Начинаем блок прокрутки
  echo "<div class='divphp'>"; // Начинаем блок

  for ($i = 0; $i < count($files); $i++) { // Перебираем все файлы
    if (($files[$i] != ".") && ($files[$i] != "..")) { // Текущий каталог и родительский пропускаем
      $path = $dir.$files[$i]; // Получаем путь к ссылке
      echo "<a href='$path' class='a' target='_blank'>$path"; // Делаем ссылку на блок
         echo "<table>";
  echo "<td>";
  echo "<tr>";
        echo "</tr>";
  echo "</td>";
  echo "</table>";
      echo "</a>"; // Закрываем ссылку
    }
  }

  echo "</div>"; // Закрываем блок
  echo "</div>"; // Закрываем блок прокрутки
  echo "</center>";
?>
	</div>
</div>
    </div>

    <div class="teath1" id="phones">
<div class="phonetext">
	<p class="pteachp">Телефон и EMAIL почта</p>
	<div class="phone">
    <p class="pphone">Телефон 8(890)123-12-12</p>
    <p class="pphone">Почта Skolniy_trolling@mail.ru</p>
	</div>
</div>
    </div>

    <div class="teath1" id="news">
<div class="newtext">
	<p class="pteachp">Новости</p>
	<div class="infonew">
<div class="procrutca">
<center>
<p class="newstitle">Создан сайт 12.01.2021</p>
<hr class="hrglav" noshade size="2">
</center>
<p class="newstext">
Всем привет! Это первая радостная новость! Все статьи появляются тут! Также просим вас заметить, что
сайт обновляется каждую неделю. Новости появляются, как данный текст, так и в формате просмотра в PDF.
Сайт обслуживает лично Екатерина Александровна! Это первая версия сайта, но в будущем он будет улучшатся!
Чтож, да будет сайт сказал админ и перерезал провода!
</p>
<center>
<img src="images/open.jpg" class="newspage">
</center>
<center>
<hr class="hrglav" noshade size="2">
</center>
</div>
	</div>
</div>
    </div>

</article>
<footer>
<p class="pteachp">Сайт был создан компанией "LODCOCRAFT"
</p>
</footer>
<script type="text/javascript" src="script.js"></script>
</body>
</html>