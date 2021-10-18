<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registro</title>
  </head>
  <style>

    </style>
  <body>

    <div class="card mx-auto" style="width: 30rem; margin-top:15%;">
    <div class="card-body">
      <p style="font-size: 30px;">Cadastro</p>
        <form method="post" action="Signin/action">
            <input type="text" name="username" class="form-control my-3" placeholder="Username">
            <input type="password" name="password" class="form-control my-3" placeholder="Password">
            <button type="submit" class="btn my-auto mx-auto" style="background-color: black; color: white; font-size:20px;">Cadastrar-se</button>
            <a href="http://localhost/testeCodeLab/public/Login" class="mx-2">Já tem conta? Faça login</a>
          </form>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>