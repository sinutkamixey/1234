<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <header><h1>My Awesome Site</h1></header>
        <section role="main">
            <?= $this->yieldView(); ?>
        </section>
        <footer><small>Copyright © <?= date('Y') ?></small></footer>
    </body>
</html>
