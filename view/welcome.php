<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>test</title>

    <script src="static/js/jquery-3.2.1.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="static/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/welcome.css">
</head>
<body>
<?php
require "navigation.html";
require "../controller/FilmController.php";

?>
<?php
$filmController = new FilmController();
$films = $filmController->getFilms();
?>

<div class="container-fluid" style="margin: 0;">
    <div class="row">
        <div class=" col-md-2">
            Events
        </div>

        <div class=" col-md-10">
            <div>
                <h3>Фильмы в прокате</h3>
            </div>
            <?php foreach ($films as $film): ?>
                <div class="film">
                    <div class="panel panel-default col-md-5">
                        <div class="panel-heading"><?php echo $film['name'] ?></div>
                        <div class="panel-body">
                            Производство: <?php echo $film['production'] ?> <br/>
                            Жанр: <?php echo $film['genre'] ?> <br/>
                            Возврастное ограничение : <?php echo $film['pg'] ?> <br/>
                            Режиссер: <?php echo $film['director'] ?> <br/>
                            Продолжительность: <?php echo $film['duration'] ?> <br/>
                            В прокате до: <?php echo $film['end_date'] ?> <br/>
                            <form action="film.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $film["id"] ?>">
                                <button class="btn btn-primary">
                                    Подробнее
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>

<?php

//$filmController = new FilmController();
//
//echo json_encode($filmController->getFilms(), JSON_UNESCAPED_UNICODE);
//
?>

</body>
</html>



