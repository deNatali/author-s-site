<!DOCTYPE HTML>
<html>
	<head>
		<title>search</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Виктор Робертович Фукс" />

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		
			
		
		
			<link rel="stylesheet" href="css/style.css" />
		
	</head>
	<body>
				<div id="header">
				<div class="container"> 
					
					
					<div id="logo">
						<h1><a href="#">Фукс Виктор Робертович</a></h1>
						<p class="text-typing"><span>Из океана в космос и обратно…
(мемуары, воспоминания, итоги)
</span></p>
					</div>
					
					
								<div id="for"><ul class="top-level">
  <li><a href="index.php">ГЛАВНАЯ </a></li>
  
  <li><a href="javascript:;">Основные публикации</a>
    <ul class="second-level">
   <li>
				<a href="blog_mon.php">Монографии</a>
			</li>
			<li>
				<a href="blog_atlas.php">Атласы</a>
			</li>
			<li>
				<a href="blog_scien.php">Научные статьи</a>
			</li>
			<li>
				<a href="blog_sc_popular.php">Научно-популярные работы</a>
			</li>
			<li>
				<a href="blog_biogr_memories.php">Биографические очерки и воспоминания</a>
			</li>
			
    </ul>
  </li>
  <li><a href="javascript:;">Научные интересы</a>
    <ul class="second-level">
   <li>
				<a href="inside_wave.php">Внутреннее-приливные волны</a>
			</li>
			<li>
				<a href="tidal_effects.php">Нелинейные приливные эффекты</a>
			</li>
			<li>
				<a href="ros_wave.php">Баротропные и бароклинные волны Россби</a>
			</li>
			<li>
				<a href="nonlinear_effects.php">Нелинейные эффекты в крупномасштабных волновых процессах. Синергетика океана. Отрицательная вязкость</a>
			</li>
			<li>
				<a href="fishery_oceanography.php">Промысловая океанография</a>
			</li>
			<li>
				<a href="front_wave.php">Дивергенция и конвергенция потоков моря. Фронтальные волны</a>
			</li>
    </ul>
  </li>
  
  <li><a href="javascript:;">Контакты</a></li>
</ul>
</div>

						
					</nav>
				</div>
			</div>
			
<?php
require_once ("Connections/FuxDB.php");
mysqli_select_db($link, $db);
?>

<?php

function getmicrotime(){ 
    list($usec, $sec) = explode(" ",microtime()); 
    return ((float)$usec + (float)$sec); 
    } 


//	на входе link_id, directory, searching file
//	      соединение, директория, искомый файл
//
//	на выходе $filename это содержимое всего фтп
//	$sFname - имя найденного
//	$sFinfo - описалово найденного, можете по своему усмотрению добавить какую-либо инфу

function scan_ftp($link, $dir, $searchFile) {

	GLOBAL $filename;
	GLOBAL $sFname;
	GLOBAL $sFinfo;

	// Получаем все файлы корневого каталога

	$file_list = ftp_rawlist($link, $dir);
	$f = ftp_rawlist($link, $dir."/".$searchFile);


/// if empty do nothing
	if(!empty($file_list)){

	$co = count($f);

	if($co > 0) {

		foreach($f as $fi) {
			list($inf, $bloks, $group, $user, $size, $month, $day, $year, $file) = preg_split("/[\s]+/", $fi);
			if(substr($file, 0, 1) == '.') continue;

				if(substr($inf, 0, 1) == 'd') {
					$sFname[] = $dir.$file;
					$sFinfo[] = "dir";
				}
	
				if(substr($inf, 0, 1) == '-') {
					$sFname[] = $dir.$file;
					$sFinfo[] = "file, size: ".$size." bytes";
				}
		}


	}


	foreach($file_list as $file) {

		list($inf, $bloks, $group, $user, $size, $month, $day, $year, $file) = preg_split("/[\s]+/", $file);


		if(substr($file, 0, 1) == '.') continue;

		// директориея?

			if(substr($inf, 0, 1) == 'd') {
				// Работаем с поддиректорией
				scan_ftp($link, $dir.$file."/" , $searchFile);
			}

		// файл?
		if(substr($inf, 0, 1) == '-') {
			$filename[] = $file." - ".$dir.$file." size: ".$size;
		}
	}

/// end empty
	}
}

function echoerror($msg) {
	echo "<center><p>$msg</p>";
	exit();
}



function drawInput() {
echo "<form name='search' method='post' action='index.php'>";
echo   "<div align='left'><font size='5'>";
echo   "<input name='searchValue' type='text' size='90'>";
echo   "<input type='submit' name='Submit' value='Search'>";
echo "</form>";
}
?>
</body>
</html>