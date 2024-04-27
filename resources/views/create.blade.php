<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Создание сообщения">
    <meta name="author" content="Пользователь">
    <meta name="robots" content="index, follow">
    <title>Создание сообщения</title>
</head>
<body>
<form method="POST" action="{{ route('store') }}">
    @csrf
    <textarea name="content"></textarea>
    <button type="submit">Отправить</button>
</form>
</body>
</html>
