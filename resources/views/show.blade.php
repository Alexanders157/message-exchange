<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Отображение сообщения">
    <meta name="author" content="Пользователь">
    <meta name="robots" content="index, follow">
    <title>Отображение сообщения</title>
</head>
<body>
<p>{{ $message->content }}</p>
<p>Ссылка на это сообщение: {{ url($message->slug) }}</p>
</body>
</html>
