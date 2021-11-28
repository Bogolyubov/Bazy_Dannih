<HTML> 
<HEAD> <TITLE> Логин </TITLE> </HEAD>  
<BODY> 
<FORM  method="post" action="<?php print $PHP_SELF ?>"> 
  Введите логин: 
  <INPUT type="text" name="a" size="15"> 
  <INPUT type="hidden" name="h" value="Боголюбов"> 
  <INPUT type="hidden" name="h" value="Максим"> 
  <INPUT type="hidden" name="h" value="Алексей">
  <INPUT type="hidden" name="h" value="Snezhinka"> 
  <P> <INPUT type="submit" name="obr" value="Проверить"> 
</FORM> 
<?php
if (isset($_POST["obr"])) { 
 if (($_POST["a"]=="Боголюбов")||($_POST["a"]=="Максим")||($_POST["a"]=="Алексей")||($_POST["a"]=="Snezhinka")) { echo("Здравствуйте, " . $_POST["a"]); 
  } else { 
  	echo "Вы не зарегистрированный пользователь";
    }
    }
?>  
</BODY> 
</HTML>