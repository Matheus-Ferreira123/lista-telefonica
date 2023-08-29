<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <script src="login.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container d-flex justify-content-center">
        <div class="col-md-6 col-lg-6 col-sm-12 mt-4">
            <form onsubmit="login(event)" method="POST">
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input name="username" type="text" id="username" class="form-control"/>
                  <label class="form-label" for="form2Example1">Usuário</label>
                </div>
              
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input name="password" type="password" id="password" class="form-control" />
                  <label class="form-label" for="form2Example2">Senha</label>
                </div>

                <!-- Submit button -->
                <input type="submit" value="Entrar" id="login"  class="btn btn-primary btn-block mb-4">
              
                <!-- Register buttons -->
                <div class="text-center">
                  <p>Não é um membro? <a href="../registro/index.php">Registro</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>