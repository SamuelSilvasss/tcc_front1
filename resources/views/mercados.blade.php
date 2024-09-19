<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site Exemplo</title>

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
        <a class="navbar-brand me-auto" href="{{ route('inicio') }}">
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
    <img src="{{ asset('images/conta_tcc.png') }}" alt="Conta" class="conta-image">
</a>

    </div>
</nav>

<!-- Market Listings -->
<div class="container mt-5">
    <h2 class="text-start mb-4">Mercados Cadastrados</h2>

    <!-- First Row -->
    <div class="row g-4">
        <div class="col-lg-6 col-md-12">
            <div class="market-card d-flex flex-column flex-lg-row bg-light shadow-sm rounded overflow-hidden">
                <div class="market-image">
                    <img src="images/mercado_tcc.png" alt="Mercado 1" class="img-fluid">
                </div>
                <div class="market-details p-4 d-flex flex-column justify-content-between">
                    <div>
                        <h4> Mercado Noemia</h4>
                        <p>Rua: Antônio Dias de Moura<br> Número: 600<br> Bairro: Vila Seabra</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="market-card d-flex flex-column flex-lg-row bg-light shadow-sm rounded overflow-hidden">
                <div class="market-image">
                    <img src="images/mercado2_tcc.png" alt="Mercado 2" class="img-fluid">
                </div>
                <div class="market-details p-4 d-flex flex-column justify-content-between">
                    <div>
                        <h4>Mercado Tietê</h4>
                        <p>Rua: Francisco Antônio Meira<br> Número: 700<br> Bairro: Jardim Maia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Second Row -->
    <div class="row g-4 mt-4">
        <div class="col-lg-6 col-md-12">
            <div class="market-card d-flex flex-column flex-lg-row bg-light shadow-sm rounded overflow-hidden">
                <div class="market-image">
                    <img src="images/mercado3_tcc.png" alt="Mercado 3" class="img-fluid">
                </div>
                <div class="market-details p-4 d-flex flex-column justify-content-between">
                    <div>
                        <h4>Mercado Economix</h4>
                        <p>Rua: Antônio Dias de Moura<br> Número: 469<br> Bairro: Jardim Maia</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="market-card d-flex flex-column flex-lg-row bg-light shadow-sm rounded overflow-hidden">
                <div class="market-image">
                    <img src="images/mercado4_tcc.png" alt="Mercado 4" class="img-fluid">
                </div>
                <div class="market-details p-4 d-flex flex-column justify-content-between">
                    <div>
                        <h4>Mercado Atacadinho</h4>
                        <p>Rua: Salsa Parrilha<br> Número: 485<br> Bairro: Jardim Noemia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-6p3dF8jZ8mDdpeDWjOU4n3dD3/21zWcJwFzY5MzAE+8n/Y1cnh8TwJXVzV1J7fgF" crossorigin="anonymous"></script>

</body>
</html>
