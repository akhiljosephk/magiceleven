<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/styles.css">

   
</head>
<body>
    <section id="title">

        <!-- Nav Bar -->
        <div class="container-fluid">
    
        <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="index.html">magic eleven</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        
         <ul class="navbar-nav ml-auto">
             <li class="nav-item">
                 <a class="nav-link" href="contact.html">Contact</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="gallery.html">Gallery</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="events.html">Events</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="squad.html">Squad</a>
             </li>
         </ul>
         </div>
     </nav>
    
        <!-- Title -->
   
    
        </section>

        <div class="row">
            <div class="col-lg-6"> 
                  <form action="uploadLogin.html">
                 
                     <button  type="submit" name="submit">Upload More Files </button>

                  </form>
            </div>
          </div>
        </div>
</body>
</html>


<?php
     
   if(isset($_POST['submit'])){
      error_reporting(E_ERROR | E_PARSE);
       $file = $_FILES['file'];
      $errors= array();
      $file_name = $_FILES['file']['name'];
      $file_size =$_FILES['file']['size'];
      $file_tmp =$_FILES['file']['tmp_name'];
      $file_type=$_FILES['file']['type'];
      $file_ext=strtolower(end(explode('.',$file_name)));
      
      $extensions= array("jpeg","jpg","png","json");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG ,JPG ,JSON or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excatly 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,'files/'.$file_name);
         echo "Successfully uploaded ".$file_name;
      }else{
         print_r($errors);
      }
   }
?>


