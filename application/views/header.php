<html>
<head>
    <link rel="shortcut icon" href="../../favicon.ico">


    <link rel="stylesheet" type="text/css" href="/../assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/../assets/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="/../assets/css/carousel.css">
    <link rel="stylesheet" type="text/css" href="/../assets/css/style.css">
</head>

<body class="back">

<!--<div class="navbar-wrapper">-->
    <div class="container">
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
                        <li onclick="getActionMenu(this)"><a href="/">Главная</a></li>
                        <li onclick="getActionMenu(this)"><a href="/notice">Заметки</a></li>
                        <li onclick="getActionMenu(this)"><a href="#">Телефонная книга</a></li>
                    </ul>

                    <form class="navbar-form navbar-right" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Строка поиска">
                            <span class="input-group-btn">
                                 <button type="submit" class="btn btn-default">Найти</button>
                            </span>
                        </div>

                    </form>

                    <ul class="nav navbar-nav navbar-right">
                        <h3><span class="label label-default" id="doc_time"></span></h3>
                    </ul>


                </div>
        </nav>
    </div>
<!--</div>-->

