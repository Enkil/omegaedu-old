<?

mail("tia@net-simple.ru", "Клиент (ЕГЭ, 8 месяцев, /s1)", "Вам пришла заявка.<br><br>Имя: ".$_POST['name']."<br>Телефон: ".$_POST['tel']."<br><br>Источник: ".$_POST['source']."<br>Форма: ".$_POST['form']."<br>Email: ".$_POST['mail']."", "Content-type: text/html; charset=utf-8\r\nFrom:Омега <no-reply@omegaedu.ru>");

?>
