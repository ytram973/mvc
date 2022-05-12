<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $seo['title'] ?>">
    <title>mon site <?= $seo['title'] ?> </title>
</head>
<body>
    <?php include './views/partials/_header.php'  ?>
    <main>
        <?php require './views/pages/' . $template . '.php'; ?>
    </main>
    <?php include './views/partials/_footer.php'  ?>
    
</body>
</html>