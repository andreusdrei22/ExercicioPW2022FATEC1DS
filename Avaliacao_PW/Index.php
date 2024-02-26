<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

    <body>
      <h1 class="titulo d-flex justify-content-center">Cadastro</h1>
      <div class="container d-flex justify-content-center">
        <form>
          <label for="nome">Usuario:</label><br>
          <input class="input" type="text" id="nome" name="nome"><br>
          
          
          <label for="senha">Senha:</label><br>
          <input class="input" type="password" id="senha" name="senha"><br>
        <div class="alinhamento">
            <div class="row">
              <button class="col-9 btn mt-2 p-1" >
                Entrar
              </button><br> 
            </div>
            <div class="row">
              <button class="col-9 btn mt-2 p-1">
                Cadastrar
              </button><br>
            </div>
        </div>  
            <a href="" class="link d-flex justify-content-center mt-2">Esqueci a senha</a>
          </form>
      </div>
    </body>
</html>