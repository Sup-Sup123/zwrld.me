<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $pageTitle ?></title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact-form">Contact</a></li>
             <li><a href="/tour">Tour</a></li>
             <li><a href="/songs">Songs</a></li>
             <li><a href="/comingsoon">Login</a></li>
        </ul>
    </nav>
</header>

<main>
    <?= $content ?>
</main>

<footer>
   ZWrld &copy; 2020-2021
</footer>
</body>
</html>
