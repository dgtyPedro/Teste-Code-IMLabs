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
  <body>
<a href="http://localhost/testeCodeLab/public/Logout">Sair</a><br>
<a href="http://localhost/testeCodeLab/public/Post">Criar post</a><br>

<div class="row row-cols-1 row-cols-md-3 g-4 mx-5" >

<?php
if($item_data)
{
    foreach($item_data as $item)
    {
        $texto = $item["text"];
        $limit = mb_strimwidth($texto, 0, 20, "...");
        echo '
          <div class="col" style=" margin-bottom: 0px; height: 500px;">
            <div class="card h-50">
              <img src="../public/images/'.$item["thumb"].'" class="card-img-top h-100" alt="...">
              <div class="card-body">
                <h5 class="card-title">'.$item["title"].'</h5>
                <p class="card-text">'.$limit.'</p>
                <a href="http://localhost/testeCodeLab/public/Read/index/'.$item["id"].'">ler mais</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">'.$item["timestamp"].'</small>
              </div>
            </div>
            </div>';
    }
  }?>

</div>
<div class="container">
<?php echo $pager->links('default', 'bootstrap_pagination')?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>