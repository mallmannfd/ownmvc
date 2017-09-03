<html>
    <head>
        <link rel="stylesheet" href="<?=BASE_URL?>assets/css/style.css">
        <title>Meu site</title>
    </head>
    <body>
        <h1>Este é o topo</h1>
        <a href="<?=BASE_URL?>";>Home</a>
        <a href="<?=BASE_URL?>galeria";>Galeria</a>
    <hr/>


    <?php $this->loadView($viewName, $viewData) ?>
    </body>
</html>