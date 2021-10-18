<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <style>

  </style>

  <body>
<a href="http://localhost/testeCodeLab/public/Home">Voltar</a>
<div class="container m-5" style="background-color: white;">
<form action="Post/action" method="post" enctype="multipart/form-data">
<div class="form-group" >
    <label for="exampleFormControlInput1">Título</label>
    <input type="text" class="form-control" name="title" id="exampleFormControlInput1">
</div>
<div class="form-group">
    <label for="exampleFormControlTextarea1">Texto</label>
    <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="6"></textarea>
</div>
<div class="custom-file my-3">
  <label for="exampleFormControlTextarea1">Thumbnail:</label>
  <input type="file" name="thumb" class="custom-file-input" id="customFile">
</div>
<hr>
<div class="custom-file my-3">
  <label for="exampleFormControlTextarea1">Banner: </label> 
  <input type="file" name="banner" class="custom-file-input" id="customFile">
</div>
<button type="btn" class="btn btn-dark">Enviar</button>


</form>
</div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>