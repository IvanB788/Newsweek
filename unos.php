<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleunos.css">
    <title>Novosti</title>
    <script type="text/javascript">

        document.getElementById("slanje").onclick = function(event) {

        var slanjeForme = true;

        var poljeTitle = document.getElementById("title");
        var title = document.getElementById("title").value;
        if (title.length < 5 || title.length > 30) {
            slanjeForme = false;
            poljeTitle.style.border="1px dashed red";
            document.getElementById("porukaTitle").innerHTML="Naslov vjesti mora imati između 5 i 30 znakova!<br>";
        } else {
            poljeTitle.style.border="1px solid green";
            document.getElementById("porukaTitle").innerHTML="";
        }

        var poljeAbout = document.getElementById("about");
        var about = document.getElementById("about").value;
        if (about.length < 10 || about.length > 100) {
            slanjeForme = false;
            poljeAbout.style.border="1px dashed red";
            document.getElementById("porukaAbout").innerHTML="Kratki sadržaj mora imati između 10 i 100 znakova!<br>";
        } else {
            poljeAbout.style.border="1px solid green";
            document.getElementById("porukaAbout").innerHTML="";
        }

        var poljeContent = document.getElementById("content");
        var content = document.getElementById("content").value;
        if (content.length == 0) {
            slanjeForme = false;
            poljeContent.style.border="1px dashed red";
            document.getElementById("porukaContent").innerHTML="Sadržaj mora biti unesen!<br>";
        } else {
            poljeContent.style.border="1px solid green";
            document.getElementById("porukaContent").innerHTML="";
        }

        var poljeSlika = document.getElementById("pphoto");
        var pphoto = document.getElementById("pphoto").value;
        if (pphoto.length == 0) {
            slanjeForme = false;
            poljeSlika.style.border="1px dashed red";
            document.getElementById("porukaSlika").innerHTML="Slika mora biti unesena!<br>";
        } else {
            poljeSlika.style.border="1px solid green";
            document.getElementById("porukaSlika").innerHTML="";
        }

        var poljeCategory = document.getElementById("category");
        if(document.getElementById("category").selectedIndex == 0) {
            slanjeForme = false;
            poljeCategory.style.border="1px dashed red";

        document.getElementById("porukaKategorija").innerHTML="Kategorija mora biti odabrana!<br>";
        } else {
            poljeCategory.style.border="1px solid green";
            document.getElementById("porukaKategorija").innerHTML="";
        }

        if (slanjeForme != true) {
            event.preventDefault();
        }

        };
 </script>
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

    <div class="forma">
        <form enctype="multipart/form-data" action="unos_vijesti.php" method="POST"> 
            <div class="form-item"> 
                <label for="title">Naslov vijesti</label> 
                <div class="form-field"> 
                <input type="text" name="title" class="form-field-textual"> 
                </div> 
            </div> 
            <div class="form-item"> 
                <label for="about">Kratki sadržaj vijesti (do 50 znakova)</label> 
                <div class="form-field"> 
                <textarea name="about" id="" cols="30" rows="10" class="form-field-textual"></textarea> 
                </div> 
            </div> 
            <div class="form-item"> 
                <label for="content">Sadržaj vijesti</label> 
                <div class="form-field"> 
                <textarea name="content" id="" cols="30" rows="10" class="form-field-textual"></textarea> 
                </div> 
            </div> 
            <div class="form-item"> 
                <label for="pphoto">Slika: </label> 
                <div class="form-field"> 
                    <input type="file" accept="image/jpg,image/gif,image/png" class="input-text" name="pphoto"/> 
                </div> 
            </div> 
            <div class="form-item"> 
                <label for="category">Kategorija vijesti</label>
                <div class="form-field"> 
                <select name="category" id="" class="form-field-textual">
                    <option value="" disabled selected>Odaberite kategoriju</option>
                    <option value="sport">Sport</option>
                    <option value="kultura">Kultura</option>
                    <option value="tehnologija">Tehnologija</option>
                </select> 
                </div> 
            </div> 
            <div class="form-item"> 
                <label>Spremiti u arhivu:
                <div class="form-field"> 
                    <input type="checkbox" name="archive"> 
                </div> 
                </label> 
            </div> 
            <div class="form-item"> <button type="reset" value="Poništi">Poništi</button> 
            <button type="submit" value="Prihvati" id="slanje">Prihvati</button> 
            </div> 
        </form>
    </div>
    
    <footer>
        <p>All rigths reserved</p>
    </footer>
</body>
</html>
