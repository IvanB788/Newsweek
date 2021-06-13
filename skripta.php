<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleunos.css">
    <title>Unesene novosti</title>
</head>
<body>
    <header>
        <img src="slike/Newsweek_Logo.png">
        <nav>
            <a href="">Home</a>
            <a href="">U.S.</a>
            <a href="">World</a>
            <a href="">Administracija</a>
            <a href="unos.html">Novosti</a>
        </nav>
    </header>

    <section> 
        <div class="row"> 
        <h2 class="category">
            <?php $category=$_POST['category'];
                echo $category; 
            ?>
        </h2> 
        <h1 class="title">
            <?php $title=$_POST['title'];
                echo $title; 
            ?>
        </h1> 
        <p>AUTOR:</p> 
        <p>OBJAVLJENO:</p> 
        </div> 

        <section class="photo"> 
            <?php $pphoto=$_POST['pphoto'];
                echo "<img src='img/$pphoto'"; 
            ?> 
        </section> 
        
        <section class="about"> 
            <p> 
            <?php $about=$_POST['about'];
                echo $about; 
            ?> 
            </p> 
        </section> 

        <section class="sadrzaj"> 
            <p> 
            <?php $content=$_POST['content'];
                echo $content; 
                ?> 
            </p> 
        </section> 
    </section>
    
    <footer>
        <p>All rigths reserved</p>
    </footer>
</body>
</html>
