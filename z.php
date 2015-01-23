<?

mail("viktor.dovzhik@gmail.com", "Клиент (ЕГЭ, 8 месяцев, /s1)", "Вам пришла заявка.<br><br>Имя: ".$_POST['name']."<br>Телефон: ".$_POST['tel']."<br><br>Источник: ".$_POST['source']."<br>Форма: ".$_POST['form']."<br><br>© Dovzhik Lab | www.dovzhiklab.ru", "Content-type: text/html; charset=utf-8\r\nFrom:Омега <no-reply@omegaedu.ru>");

?>
