<?php
    require_once 'function.php';
    $newstoday=new News;
    ?>
<?php

    if (!empty($_POST)) {
        $name = $_POST["name"];
        $text_comment = $_POST["text_comment"];
        file_put_contents('name.txt', $name."|",FILE_APPEND);
        file_put_contents('textcomment.txt', $text_comment."|",FILE_APPEND);
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>
<h2><?php $newstoday->getTitle();?></h2>
<img src='<?php $newstoday->getPicture();?>'>
<br>
<b><?php $newstoday->getData();?></b>
<p><textarea rows="10" cols="40"<?php $newstoday->getText();?></textarea></p>
<p><?php $newstoday->getComments();?></p>
<form name="comment" action="index.php" method="post">
    <p>
        <label>Имя:</label>
        <input type="text" name="name" />
    </p>
    <p>
        <label>Комментарий:</label>
        <br />
        <textarea name="text_comment" cols="30" rows="10"></textarea>
    </p>
    <p>
        <input type="submit" value="Отправить" />
    </p>
</form>
</body>

