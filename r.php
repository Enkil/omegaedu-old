<?

mail("omegaedu@gmail.com,tia@net-simple.ru", "Клиент (ЕГЭ, 8 месяцев, /s1)", "Вам пришла заявка.<br><hr><br>Имя: ".$_POST['name']."<br>Телефон: ".$_POST['tel']."<br>Email: ".$_POST['mail']."<br><hr><br>Источник: ".$_POST['source']."<br>Форма: ".$_POST['form']."", "Content-type: text/html; charset=utf-8\r\nFrom:Омега <no-reply@omegaedu.ru>");

?>
