
<!DOCTYPE HTML>
<html>
	<head>
		<title>comments</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Виктор Робертович Фукс" />

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<style type="text/css" media="all">
				@import url("css/style.css");
		        @import url("css/form.css");
		</style>
		<script language="JavaScript" type="text/JavaScript">
function open_win1(){var myWin=window.open("http://localhost/Main2/04_11_13/929_955.html","Window","scrollbars=yes, resizable=yes,width=1360, height=655")}
</script>
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
				<a href="Внутреннее-приливные волны.html">Внутреннее-приливные волны</a>
			</li>
			<li>
				<a href="Нелинейные приливные эффекты.html">Нелинейные приливные эффекты</a>
			</li>
			<li>
				<a href="Баротропные и бароклинные.html">Баротропные и бароклинные волны Россби</a>
			</li>
			<li>
				<a href="Нелинейные эффекты.html">Нелинейные эффекты в крупномасштабных волновых процессах. Синергетика океана. Отрицательная вязкость</a>
			</li>
			<li>
				<a href="Промысловая океанография.html">Промысловая океанография</a>
			</li>
			<li>
				<a href="Фронтальные волны.html">Дивергенция и конвергенция потоков моря. Фронтальные волны</a>
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
						<div class="9u skel-cell-important">
				<div id="main" class="blogpost">
						
					<?php 
						   require_once("connections/FuxDB.php");
						   $select=mysqli_select_db($link, $db); 
						   $note_id=$_GET['note'];
						   $query=("SELECT title, article, link FROM articles WHERE id=$note_id");
                           $select_note=mysqli_query($link, $query);
						   while ($note=mysqli_fetch_array($select_note)){
							   echo "<h3>", $note['title'], "</h3>";
							   echo "<p class='post_meta'><a href='#'></a>, <a href='#'></a></p>";
							   echo "<p>", $note['article'], "</p>"; ?>
							   <a href='<?php echo $note['link'];?>'  onclick='open_win1'>Читать</a>
                        <?php
						   }
						?>
						
						
						
						
						
						<div class="cmntshead">
							
							<a href="#" class=""><h3>Комментарии</h3></a>
                            <?php
							 
				             
                             $query_comment="SELECT * FROM comments WHERE comm_id=$note_id";
                             $select_comment=mysqli_query($link, $query_comment);
                            
							 while ($comment=mysqli_fetch_array($select_comment)){
                               	echo  "<p style='color:#F0FFFF;width: 595px; margin-top:10px; font-size:18px;padding-left: 22px;padding-top: 10px;padding-bottom: 10px; 
								border-left: solid 3px #008080;box-shadow: 2px 2px 10px -1px;-moz-box-shadow: 2px 2px 10px -1px;
                                -webkit-box-shadow: 2px 2px 10px -1px;background: rgba(0, 24, 122, 0.1);-moz-border-radius:20px;
	                     -webkit-border-radius:20px;
	                      border-radius:20px;'>
								<span style='color:#AFEEEE'>Автор:&nbsp</span>", $comment['author'], "</hr><br></br>";
                            	echo "<span >",$comment['comment'], "</span></p></br></br>";
				
                             }
		
							 ?>
							 
							 
							 
							 
							 
							 
							 
						</div>
						
						
						
						
						
						<div id="post_comments">
						
							<div class="comment">
								<div class="cmnt_meta"> <strong><a href="#"></a></strong> <br /><span></span></div>
								<div class="cmnt_message"></div>
							</div>
								
							</section>
						</div>
					</div>

				</div>	
					<!-- Footer -->
			<div id="footer">
					<hr><div class="container">
					<div class="row">
						<div class="12u">
							<section id="content" >
								
			
			<div class="cover">
   </br><h2 class="contact">Написать комментарий</h2>
	<form action="" method="post" id="comment_form">
        <p class="contact"><label for="name">Имя</label></p> 
        <input id="name" name="author" placeholder="Ваше имя" required="" tabindex="1" type="text"> 
 
        <p class="contact"><label for="email">Email</label></p> 
        <input id="email" class="text" name="email" placeholder="example@sitehere.ru" required="" tabindex="2" type="text"> 
  <input type = "hidden" name = "created" value = "<?php echo date("Y-m-d");?>">
        <p class="contact"><label for="comment">Сообщение</label></p> 
        <textarea name="comment" id="comment" tabindex="4"></textarea> <br>
        <input name="submit" id="submit" tabindex="5" value="Отправить" type="submit"> 	 
    </form> 
	
	
		
	
	

		<?php
		
            		$note_id = $_GET['note'];
                  require_once("connections/FuxDB.php");
                 $select_db = mysqli_select_db ($link, $db);
		
                            @$author = $_POST['author'];
                            @$comment = $_POST['comment'];
                            @$created = $_POST['created'];
							@$email = $_POST['email'];

                            if (($author)&& ($comment) && ($created))
                                {
	                             $query = "INSERT INTO comments (id, created, author, email, comment, comm_id)
	                             VALUES (NULL, '$created', '$author', '$email', '$comment', '$note_id')";
	                             $result = mysqli_query($link, $query);
	
								echo "Коментарий добавлен.";
                                }
                                else echo "Заполните, пожалуйста, все поля формы.";

                         ?>
						 

						 
</div>
			
			
							</section>
						</div>
					</div>

				</div>	
			</div>
			
			</div>
	
			
		</div>
			<div id="copyright">
				<div class="container">
					Copyright ©, Все права защищены. 
				</div>
			</div>
	</body>
</html>