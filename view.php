<!— MVC. Шаблон гостевой книги. —>
    <html>

    <head>
        <title>Гостевая книга</title>
    </head>

    <body>
        <h2>Добавьте свое сообщение:</h2>
        <form action="controller.php" method="post">
            Ваше имя: <input type=text name="new[name]"><br /> Комментарий:<br />
            <textarea name="new[text]" cols="60" rows="5"></textarea>
            <br /> <input type="submit" name="doAdd" value="Добавить!">
        </form>
        <h2>Гостевая книга:</h2>

        <?php
if (is_array($Book) && count($Book) > 0) {
    foreach ($Book as $id => $v) {?>
        Время: <?=date("d.m.Y H:i:s", $id)?><br />
        Имя: <?=$v['name']?><br />
        Комментарий:<br />
        <?=nl2br($v['text'])?>
        <hr />
        <?php }}
?>
    </body>

    </html>