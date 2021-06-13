<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleunos.css" />
    <title>Clanak</title>
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

    <section role="main">
        <div class="row">
            <h2 class="category">
            <?php
                echo "<span>".$row['kategorija']."</span>";
            ?>
            </h2>
            <h1 class="title">
            <?php
                echo $row['naslov'];
            ?>
            </h1>
            <p>AUTOR:</p>
            <p>OBJAVLJENO: 
            <?php
                echo "<span>".$row['datum']."</span>";
            ?>
            </p>
        </div>
        <section class="slika">
            <?php
                echo '<img src="' . UPLPATH . $row['slika'] . '">';
            ?>
        </section>
        <section class="about">
            <p>
            <?php
                echo "<i>".$row['sazetak']."</i>";
            ?>
            </p>
        </section>
        <section class="sadrzaj">
            <p>
            <?php
                echo $row['tekst'];
            ?>
            </p>
        </section>
    </section>

    <footer>
        <p>All rigths reserved</p>
    </footer>
</body>
</html>