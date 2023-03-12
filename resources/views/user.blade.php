<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>EstudoRequest</title>
    
</head>
<body>
    <div class="container mt-5">
        <form action="/user" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="name" class="form-control-file">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="email" class="form-control-file">
            </div>
            <div class="mb-3">
                <label class="form-label">Telefone</label>
                <input type="text" name="phone" class="form-control-file">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>
</body>
</html>