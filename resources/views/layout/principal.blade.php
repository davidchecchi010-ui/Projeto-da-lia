<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    za<meta name="theme-color" content="#20392b">
    <title>@yield('title', 'SESI Refeit&oacute;rio')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        :root { --sesi-green: #245c3c; --sesi-red: #e30613; }
        body { min-height: 100vh; margin: 0; color: #25352b; background: #f2f5f1; font-family: Arial, Helvetica, sans-serif; }
        .site-nav { background: #17291f; box-shadow: 0 4px 20px rgb(18 37 27 / 18%); }
        .site-brand { display: inline-flex; align-items: center; gap: 10px; color: #fff; font-weight: 700; text-decoration: none; }
        .site-brand-mark { padding: 3px 10px; transform: skew(-7deg); background: var(--sesi-red); color: #fff; font-size: 25px; font-style: italic; font-weight: 900; letter-spacing: -1px; }
        .site-nav .nav-link { color: rgb(255 255 255 / 84%); font-weight: 600; }
        .site-nav .nav-link:hover, .site-nav .nav-link:focus-visible { color: #fff; }
        .site-main { min-height: calc(100vh - 146px); padding-block: clamp(28px, 5vw, 64px); }
        .site-footer { border-top: 1px solid #e0e8df; background: #fff; color: #65746a; }
        a:focus-visible, button:focus-visible { outline: 3px solid #ef9ca0; outline-offset: 3px; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark site-nav">
      
        <div class="container">
            <a class="site-brand" href="{{ route('home') }}"><span class="site-brand-mark">SESI</span><span>Refeit&oacute;rio</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Abrir menu"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="main-menu">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2 py-2 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">In&iacute;cio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('cardapios.index') }}">Card&aacute;pio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('fale_com_a_lia') }}">Fale com a Lia</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contato') }}">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="site-main">
        <div class="container">@yield('content')</div>
    </main>

    <footer class="site-footer py-3">
        <div class="container d-flex flex-wrap justify-content-between gap-2 small">
            <span>SESI Refeit&oacute;rio</span>
            <span>Alimenta&ccedil;&atilde;o, informa&ccedil;&atilde;o e servi&ccedil;os</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>