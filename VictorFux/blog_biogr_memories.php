﻿<!DOCTYPE HTML>
<html>
	<head>
		<title>memories</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Виктор Робертович Фукс" />

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		
			
		
		
			<link rel="stylesheet" href="css/style.css" />
		
	</head>
	<body>
		<div id="wrapper">
			
			
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
		
			
				<div id="page">
				<div class="container">
					<div class="row">
								<div class="3u">
							<section id="sidebard2">
								<header>
									<h3>Другие публикации</h3>
								</header>
								<ul class="style1">
									
<section id="box3">
 <ul class="cssmenu">
											
			</li>
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
									
									
									
								</ul>

  
							</section>
								</ul>
								
							</section>
						</div>
						<div class="9u skel-cell-important">
							
						<header>
									<h2>Биографические очерки и воспоминания</h2>
								</header>
					
						<?php 
						   require_once("connections/FuxDB.php");
						   $select=mysqli_select_db($link, $db); 
						   $query=("SELECT * FROM articles WHERE (tag = 'biogr_memor') ORDER BY id DESC");
                           $select_note=mysqli_query($link, $query);
						    while ($note=mysqli_fetch_array($select_note)){
							   echo "<div class='post_short alt'>";?>
							   <h3><a href='comments.php?note=<?php echo $note['id'];?>'>
                               <?php
							   echo $note['title'], "</a></h3>";
							   echo "<p>", $note['article'], "</p>";
			    			   echo "<p class='post_meta'> <a href='#'></a>, <a href='#'></a></p>";
						   }
						
						?>
		
						</div>
			<a href="deletearticles.php">Страница редактирования статей</a>
					</div>

				</div>	
				<div id="copyright">
				<div class="container">
					Copyright ©, Все права защищены. 
				</div>
			</div>
			</div>

			
		</div>
	</body>
</html>