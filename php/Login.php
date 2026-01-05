<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Login</title>
    <style>
        nav {
            font-style: italic;
            font-size: 17px;
            margin-bottom: -20px;
            margin-top: -5px;
            width: 100%;
            
        }
        #logo {
            margin-left: 5px;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #0C0F1F;
            color: #FFFFFF;
            background-image: url('img/pizzalogin.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            margin-top: 20px;
            text-align: center;
        }

        input[type="email"],
        input[type="password"],
        input[type="submit"] {
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
            border: none;
            background-color: #1E1E1E;
            color: #FFFFFF;
        }
        input[type="email"],
        input[type="password"] {
            opacity: 50%;
        }

        input[type="submit"] {
            background-color: #FFD700;  
            cursor: pointer;
            color: black;
        }
        footer {
        text-align: center;
        margin-top: 150px;
        }
    </style>
</head>
<body> 
  <nav class="navbar navbar-expand-lg bg-body-primary" >
  <div class="container-fluid">
  <a class="navbar-brand" href="/Projeto Final - style/index.html"> 
    <img src="img\logo.png" class="img-fluid" style="border-radius:100%" alt="Logo" width="100" height="100" id="logo"> 
   </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/Projeto Final - style/Nossas lojas.html" style="color: white;">Nossas lojas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Projeto Final - style/Contato.html" style="color: white;">Contato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Projeto Final - style/Cardapio.html" style="color: white;">Cardápio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Projeto Final - style/Login.php" style="color: white;">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Projeto Final - style/Cadastro.php" style="color: white;">Cadastro</a>
        </li>
      </ul>
    </div>
  </div>
  </nav>
    <h1>Login</h1>
    <form action="testLogin.php" method="post">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required><br><br>
        <input type="checkbox" id="lembrar" name="lembrar">
        <label for="lembrar">Lembrar-me</label><br><br>
        <input type="submit" value="Login">
    </form>
</body>
<footer>
        ©2024, Chessmate, Inc. ou suas afiliadas
        <br>
        <img src="img/chessmate.png" height="50px" width="50px" id="footerimg" style="border-radius:100%">
</footer>
</html>