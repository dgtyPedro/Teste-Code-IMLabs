<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        .banner{
            border: 1px black solid;
            background-image: url('http://localhost/testeCodeLab/public/images/<?php echo $banner?>');
            background-repeat: no-repeat;
            background-size: 100% 160px;
            height: 160px;
            width: 100%;
        }
        
    </style>
  </head>
  <body>
    <div class="banner">
    <a href="http://localhost/testeCodeLab/public/Home">Voltar</a>
    <p class="fs-1 text-center"><?php echo $title?></p>
    </div>
    <div class="container my-5">
    <p class="fs-5"><?php echo $text?></p>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>