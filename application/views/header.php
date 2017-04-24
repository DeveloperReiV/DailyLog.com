<html>
<head>
    <link rel="shortcut icon" href="../../favicon.ico">


    <link rel="stylesheet" type="text/css" href="/../assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/../assets/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="/../assets/css/carousel.css">
    <link rel="stylesheet" type="text/css" href="/../assets/css/style.css">
</head>

<?php if(!empty($_COOKIE['backIMG'])):?>
<body style="background: url(<?=SITE_HOST . '/application/upload/background/' . $_COOKIE['backIMG']?>); background-size: 100%">
<?php else: ?>
<body>
<?php endif; ?>
<div class="container-fluid">
    <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Ежедневник</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" id="menu">
                    <li id="m1" <?php if(getNameController() == '') echo "class='active'" ?>><a href="/">Главная</a></li>
                    <li id="m2" <?php if(getNameController() == 'notice') echo "class='active'" ?>><a href="/notice">Заметки</a></li>
                    <li id="m3" <?php if(getNameController() == 'teldir') echo "class='active'" ?>><a href="/teldir">Телефонная книга</a></li>
                    <li id="m4" <?php if(getNameController() == 'user') echo "class='active'" ?>><a href="/user">Личные данные</a></li>
                    <li id="m4" <?php if(getNameController() == 'setting') echo "class='active'" ?>><a href="/setting">Настройки</a></li>
                </ul>

                <?php if(!empty($_SESSION['user'])): ?>
                <form class="navbar-form navbar-right" action="notice" role="search" method="post">
                    <div class="input-group">
                        <input type="text" name="search_text" class="form-control" placeholder="Строка поиска">
                        <span class="input-group-btn">
                             <button type="submit" class="btn btn-default">Найти</button>
                        </span>
                    </div>
                </form>
                <?php endif; ?>



            </div>
    </nav>

    <?php if(!empty($_SESSION['user'])): ?>
    <div class="panel panel-default opacity">
        <div class="panel-heading">
            <h4><b>
                    <span id="doc_time"></span>
                    <span style="float: right;">Привет, Пушистик!!!&nbsp;&nbsp;&nbsp;   <a href="user/exit">выход</a></span>
            </b></h4>
        </div>
    </div>
    <?php endif; ?>

</div>
