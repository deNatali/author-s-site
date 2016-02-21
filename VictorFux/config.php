<?
 ############################################################################
 # WFSearch Engine by jID     Version 0.8 (PHP4) (09 jan 2003)              #
 # Copyright (C) jID, 2002-2003                                             #
 #               Jean-Charles Meyrignac 2003                                #
 #                                                                          #
 # Configuration file :: Файл конфигурации                                  #
 ############################################################################

 # Allowed files (if thoose strings are founded then allowed to search)
 # Разрешенные файлы (если такая строка есть, то разрешено)
 $allowed_names=Array(".htm",".txt",".php",".html",".phtml",".asp");

 # Disallowed files (if thoose strings are founded then disallowed to search)
 # Запрещенные файлы (если такая строка есть, то запрещено)
 $disallowed_names=Array("config.php","search.php",".htaccess","language");

 # Selection of result description
 # Выделение краткого описания
 $desc_header="<font size=-1>";
 $desc_footer="</font>";

 # Page separator
 # Разделитель страниц
 $search_separator=" :: ";

 # Style of numbers. This is "1)" style.
 # Стиль чисел. Этот, например - "1)".
 $interface_all="<b><font color=black>%1)</b></font> ";

 # Table colors
 # Цвета вывода разноцветной таблички
 $color0="#E4EBEF";
 $color1="#F0F0F0";
 $color2="#D0D0D0";

 # This is unique string used for tags cleaning...
 # С помощью этой строки производится некоторая очистка от тэгов...
 # так что, если в ваших файлах может иметься такая строчка, то лучше
 # замените здесь значение переменной на что-нибудб другое (уникальное)
 $explodestring="**^!separate!^**";

 # Location of start directory "" - root
 # Расположение каталога начала поиска "" - корневой
 $start_search="/wfsearch.08";

 # Results per page
 # Кол-во результатов на страницу
 $pages=10;

 # Inderface language file (\language\ directory)
 # Языковой файл интерфейса (каталог \language\)
 $languagefile = "russian.php";

 # maximum number of occurrences
 # максимальное кол-во абзацев в предварительном просмотре
 $maxoccurrences=3;

# ****************************> HEADER <*********************************
function place_header()
{
  global $query,
         $lang_search,
         $lang_pagetitle,
         $lang_noquery,
         $lang_usingand,
         $lang_usingor;
?>
<!DOCTYPE HTML PUBLIC >
<html><head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<META NAME="Author" CONTENT="jID LAbs, Jean-Charles Meyrignac">
<META NAME="description" CONTENT="Tiny search engine">
<META NAME="robots" CONTENT="index,nofollow">

<title><?if (isset($query)) echo str_replace("%1", $query, $lang_pagetitle);else echo $lang_noquery;?></title></head>
<body bgcolor=#C0DED>
  <form name=search method=post action=<?echo @$PHP_SELF;?>>
  <input name=query length=40<?if (isset($query)) echo(" value=\"".htmlspecialchars($query)."\"");?>><input type=submit value='<?echo $lang_search;?>'><br>
  <input type=radio checked=true name=m value=and><?echo $lang_usingand;?><br>
  <input type=radio name=m value=or><?echo $lang_usingor;?>
  </input>
  </form>
  <hr>
<?
}


function place_footer()
{

?>

</body>
</html>
<?
}
?>