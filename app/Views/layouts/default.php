<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title><?= $this->renderSection("title") ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php if (session()->has("message")) : ?>
        <div class="alert alert-success w-50 text-center" role="alert">
            <?= session("message") ?>
        </div>
    <?php endif; ?>

    <?= $this->renderSection("content") ?>
</body>

</html>