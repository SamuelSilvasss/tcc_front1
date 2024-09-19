<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand me-auto" href="home">
            <img src="images/logo_tcc.png" alt="Logo" class="logo-image">
        </a>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('inicio') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('mercados') }}">Mercados</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" aria-current="page" href="{{ route('produtos') }}">
                        Produtos
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('cadastro_produto') }}">Cadastrar Produto</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Conta -->
        <a href="{{ route('cadastro') }}" class="navbar-brand ms-auto">
            <img src="images/conta_tcc.png" alt="Conta" class="conta-image">
        </a>
    </div>
</nav>

<!-- Tela de Login -->
<div class="container d-flex justify-content-center align-items-start min-vh-100 mt-5">
    <div class="col-lg-6 col-md-8">
        <div class="text-center mb-4">
            <h3>Faça seu Login</h3>
        </div>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <!-- E-mail -->
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required>
            </div>

            <!-- Senha -->
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" required>
            </div>

            <!-- Botão de Login -->
            <div class="d-grid">
                <button type="submit" class="btn btn-dark btn-lg">Entrar</button>
            </div>
        </form>
        <div class="text-center mt-3">
            <p>Não tem uma conta? <a href="{{ route('cadastro') }}">Cadastre-se</a></p>
        </div>
    </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-6p3dF8jZ8mDdpeDWjOU4n3dD3/21zWcJwFzY5MzAE+8n/Y1cnh8TwJXVzV1J7fgF" crossorigin="anonymous"></script>

</body>
</html>
