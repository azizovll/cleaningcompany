<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $agree = isset($_POST["agree"]) ? "Согласие получено" : "Согласие не получено";

    $to = "abdulborijazizov@gmail.com"; // Замените на ваш реальный адрес электронной почты
    $subject = "Новая заявка с формы";
    $message = "Имя: $name\nНомер телефона: $phone\n$agree";

    // Дополнительные заголовки
    $headers = "From: webmaster@example.com"; // Замените на ваш реальный адрес электронной почты
    $headers .= "\r\nReply-To: $name <$to>";

    // Отправка электронной почты
    mail($to, $subject, $message, $headers);
    
    // Можно также добавить код для перенаправления пользователя после отправки формы
    // header("Location: success_page.html");
}
?>
