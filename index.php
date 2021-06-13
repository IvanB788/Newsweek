<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleprve.css">
    <title>Pocetna</title>
    <?php
        include 'connect.php';
        define('UPLPATH', 'img/');
    ?>
</head>
<body>
    <header>
        <img src="slike/Newsweek_Logo.png">
        <nav class="navbar main_nav " role="navigation">
            <a href="index.php" class="">Početna</a>
            <a href="kategorija.php?id=sport" class="">Sport</a>
            <a href="kategorija.php?id=kultura" class="">Kultura</a>
            <a href="administracija.php" class="">Administracija</a>
        </nav>
    </header>
    <hr>

    <section class="sport">
        <?php
            $query = "SELECT * FROM clanak WHERE arhiva=0 AND kategorija='sport' LIMIT 3";
            $result = mysqli_query($dbc, $query);
            $i=0;
            while($row = mysqli_fetch_array($result)) {
            echo '<article>';
            echo'<div class="article">';
            echo '<div class="sport_img">';
            echo '<img src="' . UPLPATH . $row['slika'] . '"';
            echo '</div>';
            echo '<div class="media_body">';
            echo '<h4 class="title">';
            echo '<a href="clanak.php?id='.$row['id'].'">';
            echo $row['naslov'];
            echo '</a></h4>';
            echo '</div></div>';
            echo '</article>';
        }?>
    </section>
    <hr>
    <section class="kultura">
        <?php
            $query = "SELECT * FROM clanak WHERE arhiva=0 AND kategorija='kultura' LIMIT 3";
            $result = mysqli_query($dbc, $query);
            $i=0;
            while($row = mysqli_fetch_array($result)) {
            echo '<article>';
            echo'<div class="article">';
            echo '<div class="sport_img">';
            echo '<img src="' . UPLPATH . $row['slika'] . '"';
            echo '</div>';
            echo '<div class="media_body">';
            echo '<h4 class="title">';
            echo '<a href="clanak.php?id='.$row['id'].'">';
            echo $row['naslov'];
            echo '</a></h4>';
            echo '</div></div>';
            echo '</article>';
        }?>
    </section>
    <hr>
    <footer>
        <p>All rigths reserved</p>
    </footer>
</body>
</html>