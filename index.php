<!doctype html>
<html lang="en">
<head>
    <title>ЕГЭ по информатике</title>
    
    <meta charset="UTF-8">
    <meta name="Keywords" content="информатика, егэ, 2015">
    <meta name="Author" content="atnartur">
        
    <!--<link rel="stylesheet" href="http://static.clienddev.ru/clienddev_bootstrap/3.1.1/bootstrap.min.css">-->
    <!--<link rel="stylesheet" href="http://static.clienddev.ru/font-awesome/4.3.0/font-awesome.min.css">-->
    <link rel="stylesheet" href="https://yastatic.net/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://yastatic.net/highlightjs/8.2/styles/default.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    
    <nav class="navbar navbar-cliend-top navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#home">ЕГЭ 2015 по информатике</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="header_menu"><a href="#home"><i class="fa fa-home"></i> Главная</a></li>
                    <li class="header_menu"><a href="#tasks"><i class="fa fa-tasks"></i> Разбор заданий</a></li>
                    <li class="header_menu"><a href="#test"><i class="fa fa-edit"></i> Тест</a></li>
                    <li class="header_menu"><a href="#about"><i class="fa fa-info"></i> О сайте</a></li>
                </ul>
                <ul class="nav navbar-nav pull-right">
                    <li><a href="https://github.com/atnartur/inform_homework_site" target="_blank"><i class="fa fa-github"></i> Исходный код</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    
    <div class="container">
        <div id="content">
            <div data-page="home" class="page">
                <h1>Об экзамене</h1>
                <p>Первая часть теста включает 13 заданий (А1–А13). <b>К каждому из них даны четыре варианта ответа, из которых нужно выбрать один правильный.</b></p>
                <p>Вторая часть теста состоит из 15 заданий. Ответы к этим заданиям вы должны сформулировать самостоятельно.</p>
                <p>Дата сдачи ЕГЭ по информатике в 2015 году - <b>15 июня</b>.</p>
            </div>
            <div data-page="tasks" class="page">
                <h1>Разбор заданий</h1>
                <?php include 'parts/tasks.php'; ?>
            </div>
            <div data-page="test" class="page">
                <h1>Тест</h1>
                <?php include 'parts/test.php'; ?>
            </div>
            <div data-page="about" class="page">
                <h1>О сайте</h1>
                <h2>Автор сайта</h2>
                <div class="row">
                    <img src="content/about/atnartur.jpg" class="col-md-2">
                    <div class="col-md-10">
                        <h3>Атнагулов Артур</h3>
                        <h1>
                            <a href="http://vk.com/atnartur" target="_blank"><i class="fa fa-vk"></i></a>
                            <a href="http://twitter.com/atnartur" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="http://instagram.com/atnartur" target="_blank"><i class="fa fa-instagram"></i></a>
                        </h1>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <h2>При создании сайта использовались</h2>
                        <ul>
                            <li><a href="http://getbootstrap.com" target="_blank">Bootstrap - дизайн</a></li>
                            <li><a href="http://jquery.com" target="_blank">JQuery - JavaScript-библиотека</a></li>
                            <li><a href="http://fontawesome.io/" target="_blank">Font Awesome - иконки</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h2>Информация</h2>
                        <ul>
                            <li><a href="http://ege.yandex.ru" target="_blank">Яндекс.ЕГЭ</a></li>
                        </ul>
                    </div>
                </div>
                <h2>Хостинг</h2>
                <ul>
                    <li><a href="http://yandex.st" target="_blank">Яндекс - хостинг библиотек</a></li>
                    <li><a href="http://clienddev.ru" target="_blank">ClienDDev - хостинг сайта</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <script src="http://yastatic.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://yastatic.net/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://yastatic.net/highlightjs/8.2/highlight.min.js"></script>
    <script src="js/pages.js"></script>
    <script src="js/test.js"></script>
    <script src="js/run.js"></script>
</body>
</html>