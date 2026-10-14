<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#20392b">
    <title>@yield('title', 'SESI Refeitório')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root { --sesi-green: #245c3c; --sesi-red: #e30613; }
        body { min-height: 100vh; color: #25352b; background: linear-gradient(120deg,rgba(16,34,23,.78),rgba(18,38,26,.60)),url('https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&w=2000&q=90') center/cover fixed; }
        .sesi-nav { position: relative; z-index: 2; border-bottom: 1px solid rgb(255 255 255 / 10%); background: rgba(20,31,25,.94); box-shadow: 0 8px 24px rgb(0 0 0 / 12%); backdrop-filter: blur(12px); }
        .sesi-logo { display:inline-block; padding:2px 10px; background:var(--sesi-red); color:#fff; font-size:26px; font-weight:900; font-style:italic; letter-spacing:-2px; transform:skew(-7deg); }
        .page-wrap { min-height: calc(100vh - 150px); padding-block:clamp(2rem, 5vw, 4rem); }
        .page-card { overflow:hidden; border:1px solid rgb(255 255 255 / 72%); border-radius:1.25rem; box-shadow:0 1rem 3rem rgba(0,0,0,.18); transition:transform .2s ease, box-shadow .2s ease; }
        .page-card:hover { transform:translateY(-2px); box-shadow:0 1.25rem 3.25rem rgba(0,0,0,.22); }
        .btn-sesi { color:#fff; background:var(--sesi-red); border-color:var(--sesi-red); border-radius:.65rem; font-weight:700; box-shadow:0 6px 16px rgb(227 6 19 / 18%); transition:transform .15s ease, background-color .15s ease, box-shadow .15s ease; }
        .btn-sesi:hover { color:#fff; background:#bd0711; border-color:#bd0711; transform:translateY(-1px); box-shadow:0 8px 20px rgb(227 6 19 / 24%); }
        .sesi-nav .nav-link { border-radius:.5rem; transition:background-color .15s ease, color .15s ease; }
        .sesi-nav .nav-link:hover, .sesi-nav .nav-link:focus-visible { background:rgb(255 255 255 / 9%); color:#fff; }
        .sesi-nav :focus-visible, .page-wrap :focus-visible { outline:3px solid #ffb1b6; outline-offset:3px; }
        footer { border-top:1px solid rgb(255 255 255 / 10%); background:rgba(20,31,25,.94); color:#fff; }
        @media (prefers-reduced-motion: reduce) { *, *::before, *::after { scroll-behavior:auto !important; transition:none !important; } }
    </style>
    @stack('styles')
</head>
<body>
<nav class="navbar navbar-expand-xl navbar-dark sesi-nav">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}"><span class="sesi-logo">SESI</span><span class="small fw-semibold">Refeitório</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#siteNav" aria-controls="siteNav" aria-expanded="false" aria-label="Abrir menu"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="siteNav"><ul class="navbar-nav ms-auto align-items-xl-center gap-xl-1">
      <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Entrar</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('sobre') }}">Sobre</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('fale_com_a_lia') }}">Lia</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('troca_almoco') }}">Troca de refeição</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('cardapios.index') }}">Cardápios</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('quiz') }}">Quiz</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('solicitacao_de_troca') }}">Solicitação</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('contato') }}">Contato</a></li>
    </ul></div>
  </div>
</nav>
<main class="page-wrap"><div class="container">@yield('content')</div></main>
<footer class="py-3"><div class="container d-flex flex-wrap justify-content-between gap-2 small"><span>SESI Refeitório</span><span>Informações e serviços do refeitório</span></div></footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>
