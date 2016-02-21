
<html> 
<body> 

<h2>Удалить публикацию</h2> 
<form id="editarticles" name="editarticles" method="post" > 
<label for="title">Заголовок статьи</label> </br>
<input type="text" name="title" id="title" 
 value = "<?php echo $delete_articles['title'];?>" /></br></hr>
 <label for="article">Аннотация </label> </br>
<input type="text" name=" article" id=" article" 
 value = "<?php echo $delete_articles['article'];?>" /> </br></hr>
  <label for="link"> Выберете файл </label> </br>
<input type = "file" name = "link" id="link" 
 value = "<?php echo $delete_articles['link'];?>" /> </br></hr>
<input type="hidden" name = "articles" id = "articles" 
 value="<?php echo $delete_articles['id']?>" /> 
<input type="hidden" name = "MM_update" value="editnote" /> 
<input type="submit" name="submit" id="submit" value="Удалить" /> 
</form> 

</form>


<?php 
$submit = $_POST['submit']; 
if ($submit) 
 { 
 $delete_query = "SELECT * FROM articles WHERE id = $articles_id"; 
 $delete_result = mysqli_query ($link, $delete_query); 
 } 
?> 




	<h2>Добавить публикацию</h2>
	
		<form method = "POST">
			Title:<input type = "text" name = "title"><br>
			<textarea name = "article" cols = "55" rows = "10"></textarea>
			 <p>Загрузите файл на сервер</p>
   <p><input type="file" name="file" multiple accept="">
			<input type = "hidden" name = "created" value = "<?php echo date("Y-m-d");?>">
			<input type = "submit" name = "submit" value = "go!">
		</form>
	</body>
</html>





<?php
  require_once("connections/FuxDB.php");
mysqli_select_db($link, $db);


$title = $_POST['title'];
$article = $_POST['article'];
$link = $_POST['link'];
$created = $_POST['created'];
$query = "INSERT INTO notes (id, created, title, article, link)
	           VALUES (NULL, '$created', '$title', '$article','$link')";
			   
if (($title)&& ($article) && ($created)&& ($link))
{
	$result = mysqli_query($link, $query);
	

	echo "your note send";
}
else 
		{
			echo "your note didn't sent";
	}



?> 



</body> 
</html> 

