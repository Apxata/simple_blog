<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Мой блог</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="//cdn.jsdelivr.net/editor/0.1.0/editor.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="container">
                    <div class="row col-md-offset-1">
                    <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" >
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.php">Блог Архата</a>
                    </div>
                       <!-- navbar header  -->
                       <div class="collapse navbar-collapse" id="collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="index.php">Главная</a></li>
                                <li><a href="#">Обо мне</a></li>
                                <li><a href="#">Контакты</a></li>
                                <?php
                                  if($session->is_logged_in()) {
                                    echo '<li><a href="logout.php">Выйти</a></li>';
                                  }
                                  else {
                                    echo '<li><a href="logout.php">Войти</a></li>';
                                  }

                                ;?>

                            </ul>
                                <form class="navbar-form navbar-left">
                                        <div class="form-group">
                                          <input type="text" class="form-control" placeholder="Поиск">
                                        </div>
                                        <button type="submit" class="btn btn-default">Найти</button>
                                </form>
                       </div>
                       <!-- collapse navbar-collapse -->
                    </div> 
                </div> 
                <!-- menu container                 -->
            </nav>
        </header>