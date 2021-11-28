<HTML> 
<HEAD> <TITLE></TITLE> </HEAD>  
<BODY> 
<FORM  method="post" action="<?php print $PHP_SELF ?>"> 
  Анкета "Ваш характер" <BR>
  <BR>
  Введите ваше имя <BR>
  <INPUT type="text" name="z" size="15"> <BR>
  <BR>
  Ответьте да или нет на следующие вопросы: <BR> 
  <BR>
  1. Считаете ли вы, что у многих ваших знакомых хороший характер <BR>
  <INPUT type="radio" name="a" value="da" CHECKED>Да <INPUT type="radio" name="a" value="net">Нет  <BR>
  <BR>
  2. Раздражают ли вас мелкие повседневные обязанности? <BR>
  <INPUT type="radio" name="b" value="da" CHECKED>Да <INPUT type="radio" name="b" value="net">Нет  <BR>
  <BR>
  3. Верите ли вы, что ваши друзья преданы вам?<BR>
  <INPUT type="radio" name="c" value="da" CHECKED>Да <INPUT type="radio" name="c" value="net">Нет  <BR>
  <BR>
  4. Неприятно ли вам, когда незнакомы человек делает вам замечанее<BR>
  <INPUT type="radio" name="d" value="da" CHECKED>Да <INPUT type="radio" name="d" value="net">Нет  <BR>
  <BR>
  5. Способны ли вы ударить собаку или кошку?(OH MY GOD)<BR>
  <INPUT type="radio" name="e" value="da" CHECKED>Да <INPUT type="radio" name="e" value="net">Нет  <BR>
  <BR>
  6. Часто ли Вы принимаете лекарства? (OH MY GOD)<BR>
  <INPUT type="radio" name="f" value="da" CHECKED>Да <INPUT type="radio" name="f" value="net">Нет  <BR>
  <BR>
  7. Часто ли Вы меняете магазин, в который ходите за продуктами?<BR>
  <INPUT type="radio" name="g" value="da" CHECKED>Да <INPUT type="radio" name="g" value="net">Нет  <BR>
  <BR>
  8. Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?<BR>
  <INPUT type="radio" name="h" value="da" CHECKED>Да <INPUT type="radio" name="h" value="net">Нет  <BR>
  <BR>
  9. Тяготят ли Вас общественные обязанности?<BR>
  <INPUT type="radio" name="i" value="da" CHECKED>Да <INPUT type="radio" name="i" value="net">Нет  <BR>
  <BR>
  10. Способны ли Вы ждать более 5 минут, не проявляя беспокойства?  <BR>
  <INPUT type="radio" name="j" value="da" CHECKED>Да <INPUT type="radio" name="j" value="net">Нет  <BR>
  <BR>
  11. Часто ли Вам приходят в голову мысли о Вашей невезучести? <BR>
  <INPUT type="radio" name="k" value="da" CHECKED>Да <INPUT type="radio" name="k" value="net">Нет  <BR>
  <BR>
  12.Сохранилась ли у Вас фигура по сравнению с прошлым?  <BR>
  <INPUT type="radio" name="l" value="da" CHECKED>Да <INPUT type="radio" name="l" value="net">Нет  <BR>
  <BR>
  13. Можете ли Вы с улыбкой воспринимать подтрунивание друзей?<BR>
  <INPUT type="radio" name="m" value="da" CHECKED>Да <INPUT type="radio" name="m" value="net">Нет  <BR>
  <BR>
  14. Нравится ли Вам семейная жизнь?  <BR>
  <INPUT type="radio" name="n" value="da" CHECKED>Да <INPUT type="radio" name="n" value="net">Нет  <BR>
  <BR>
  15. Злопамятны ли Вы? <BR>
  <INPUT type="radio" name="o" value="da" CHECKED>Да <INPUT type="radio" name="o" value="net">Нет  <BR>
  <BR>
  16. Находите ли Вы, что стоит погода, типичная для данного времени года? <BR>
  <INPUT type="radio" name="p" value="da" CHECKED>Да <INPUT type="radio" name="p" value="net">Нет  <BR>
  <BR>
  17. Случается ли Вам с утра быть в плохом настроении? <BR>
  <INPUT type="radio" name="q" value="da" CHECKED>Да <INPUT type="radio" name="q" value="net">Нет  <BR>
  <BR>
  18. Раздражает ли Вас современная живопись? <BR>
  <INPUT type="radio" name="r" value="da" CHECKED>Да <INPUT type="radio" name="r" value="net">Нет  <BR>
  <BR>
  19. Надоедает ли Вам присутствие чужих детей в доме более одного часа? <BR>
  <INPUT type="radio" name="s" value="da" CHECKED>Да <INPUT type="radio" name="s" value="net">Нет  <BR>
  <BR>
  20. Надоедает ли Вам делать лабораторные по PHP?<BR>
  <INPUT type="radio" name="t" value="da" CHECKED>Да <INPUT type="radio" name="t" value="net">Нет  <BR>
  <BR>
  <P> <INPUT type="submit" name="obr" value="Результаты теста"> 
</FORM> 
<?php
if (isset($_POST["obr"])) { 
 if ($_POST["c"]=="da")  
  	$k+=1;
 if ($_POST["i"]=="da")  
  	$k+=1;
  if ($_POST["j"]=="da")  
  	$k+=1;
 if ($_POST["m"]=="da")  
  	$k+=1;
  if ($_POST["n"]=="da")  
  	$k+=1;
 if ($_POST["s"]=="da")  
  	$k+=1;	
   if ($_POST["a"]=="net")  
  	$k+=1;
 if ($_POST["b"]=="net")  
  	$k+=1;
  if ($_POST["d"]=="net")  
  	$k+=1;
 if ($_POST["e"]=="net")  
  	$k+=1;
  if ($_POST["f"]=="net")  
  	$k+=1;
 if ($_POST["g"]=="net")  
  	$k+=1;
   if ($_POST["h"]=="net")  
  	$k+=1;
 if ($_POST["k"]=="net")  
  	$k+=1;
  if ($_POST["l"]=="net")  
  	$k+=1;
 if ($_POST["o"]=="net")  
  	$k+=1;
  if ($_POST["p"]=="net")  
  	$k+=1;
 if ($_POST["q"]=="net")  
  	$k+=1;
  if ($_POST["r"]=="net")  
  	$k+=1;
 if ($_POST["t"]=="net")  
  	$k+=1;
  echo $_POST["z"]."<br>";		
  if ($k>15)
  echo "У вас покладистый характер.";
  if ($k>=8 && $k<=15)
  echo "У вас покладистый характер.";
  if ($k<8)
  echo "Вашим друзьям можно посочувствовать";
 }
?>  
</BODY> 
</HTML>