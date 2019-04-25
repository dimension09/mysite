<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Error</title>
</head>
<body>

    <h1>Виникла помилка:</h1>
    <p><b>Код помилки:</b><?=$errno ?></p>
    <p><b>Текст помилки:</b><?=$errstr ?></p>
    <p><b>Файл, в якому виникла помилка:</b><?=$errfile ?></p>
    <p><b>Строка, в якій виникла помилка:</b><?=$errline ?></p>

</body>
</html>