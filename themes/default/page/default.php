<!DOCTYPE html>
<html lang="<?=core()->getLang()?>" dir="<?=core()->getLang('dir')?>">
<head>
<?php
    $this->data['title'] = 'Главная страница';
    $this->data['metaTags'][] = '<meta charset="UTF-8">';
?>
<?=$this->head()?>
</head>
<body>
    <h1>Сайт</h1>
    <p>Главная страница сайта</p>
    <?=module('test')?>
    <?=$this->scripts()?>
</body>
</html>