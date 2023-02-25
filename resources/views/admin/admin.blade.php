<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin<!--Colocar nome do admin--></title>
    <x-bootstrap></x-bootstrap>
</head>
<body>

    <div class="container-fluid">
        <!--Menu do administrador-->
        <x-navbarAdmin></x-navbarAdmin>

        <form action="/cadastrarFuncionario" method="post">
            @csrf
            <input type="text" name="nome" id="nome">
            <input type="password" name="senha" id="senha">
            <input type="email" name="email" id="email">
            <input type="tel" name="telefone" id="telefone">
            <input type="submit" value="Cadastrar">
        </form>
    </div>
    
</body>
</html>