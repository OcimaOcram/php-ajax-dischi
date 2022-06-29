<?php

    include __DIR__ . '/data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    foreach($cd as $cds) { ?>
        <div>
            <div><img src="<?= $cds['poster'] ?>"/></div>
            <div><?= $cds['title'] ?></div>
            <div><?= $cds['author'] ?></div>
            <div><?= $cds['year'] ?></div>
        </div>
        <?
    } ?>
</body>
</html>