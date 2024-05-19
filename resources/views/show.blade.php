<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Сообщение">
    <meta name="author" content="Пользователь">
    <meta name="robots" content="index, follow">
    <title>Отображение сообщения</title>
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
        .message-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 100px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            height: 300px;
            position: relative;
        }
        .message-content {
            font-size: 16px;
            line-height: 1.6;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            word-wrap: break-word;
            overflow-wrap: break-word;
            overflow-y: auto;
            max-height: 200px;
            margin-top: -20px;
        }
        .message-link {
            color: #007bff;
            margin-top: -10px;
        }

        .create-message-button {
            position: absolute;
            top: 10px;
            left: 10px;
            padding: 8px 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="message-container">
    <a href="{{ url('create') }}" class="create-message-button">Создать сообщение</a> <h1 style="margin-top: -20px;"> Сообщение: </h1>
    <br>
    <p class="message-content">{{ $message->content }}</p>
    <br>
    <p class="message-link">Ссылка на это сообщение: <br>
        <a href="{{ url($message->slug) }}">{{ url($message->slug) }}</a></p>
</div>
</body>
</html>
