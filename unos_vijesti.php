<?php
  include 'connect.php'; 
  $title=$_POST['title']; 
  $about=$_POST['about']; 
  $content=$_POST['content']; 
  $category=$_POST['category']; 
  $picture = $_FILES['pphoto']['name']; 
  if(isset($_POST['archive'])){ $archive=1; }else{ $archive=0; }
  

  $target_dir = 'images/'.$picture; 
  move_uploaded_file($_FILES["pphoto"]["tmp_name"], $target_dir); 

  $query = "INSERT INTO clanak (naslov, sazetak, tekst, slika, kategorija, arhiva) VALUES ('$title', '$about', '$content', '$picture', '$category', '$archive')";

  $result = mysqli_query($dbc, $query) or die('Error querying databese.'.mysqli_error($dbc))  ; 

  mysqli_close($dbc); 
?>