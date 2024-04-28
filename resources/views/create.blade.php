<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Создание сообщения">
    <meta name="author" content="Пользователь">
    <meta name="robots" content="index, follow">
    <title>Создание сообщения</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .message-form {
            width: 80%;
            max-width: 600px;
            padding: 100px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .message-input {
            width: 100%;
            height: 150px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: none;
        }
        .message-button {
            display: block;
            width: 50%;
            margin: 0 auto;
            padding: 10px;
            font-size: 16px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="message-form">
    <h1> Отправить сообщение:</h1>
    <form method="POST" action="{{ route('store') }}">
        @csrf
        <textarea class="message-input" name="content" placeholder="Введите сообщение"></textarea>
        <br>
        <br><button class="message-button" type="submit">Отправить</button>
    </form>
</div>
</body>
</html>
