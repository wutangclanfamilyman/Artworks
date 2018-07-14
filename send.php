<?php
        $name = $_POST['name'];
        $thm = "Нове повідомлення:";
        $phone = $_POST['phone'];
        $question = $_POST['question'];
        $what = $_POST['what'];
        $msg = "Имя: ".htmlspecialchars($name).".<br/> Телефон: ".htmlspecialchars($phone).".<br/>
        Причина: ".htmlspecialchars($what).".<br/> Вопрос: ".htmlspecialchars($question);
        $mail_to = "poshta@ukr.net";
        // Отправляем почтовое сообщение
        mail($mail_to, $thm, $msg);
        header('Location: thanks.html');
?>
