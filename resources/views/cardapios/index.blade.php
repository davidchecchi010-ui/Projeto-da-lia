<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#263b31">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cardápios | SESI Refeitório</title>
    <style>
        :root { font-family: Arial, Helvetica, sans-serif; color: #202923; background: #eef1ed; }
        * { box-sizing: border-box; }
        body { min-width: 320px; min-height: 100vh; margin: 0; }
        a { color: inherit; text-decoration: none; }
        .site-header { border-bottom: 1px solid rgb(255 255 255 / 16%); background: rgb(16 30 23 / 82%); color: white; backdrop-filter: blur(12px); }
        .header-inner { display: flex; width: min(1160px, calc(100% - 40px)); min-height: 76px; align-items: center; justify-content: space-between; gap: 24px; margin: 0 auto; }
        .brand { display: inline-flex; align-items: center; gap: 12px; font-size: 14px; font-weight: 700; }
        .brand-mark { padding: 5px 11px; transform: skew(-7deg); background: #e30613; color: white; font-size: 27px; font-style: italic; font-weight: 900; letter-spacing: -2px; }
        .brand-name { display: grid; gap: 3px; }
        .brand-name small { color: rgb(255 255 255 / 68%); font-size: 11px; font-weight: 400; }
        .main-nav { display: flex; flex-wrap: wrap; justify-content: flex-end; gap: 20px; }
        .main-nav a { color: rgb(255 255 255 / 88%); font-size: 13px; font-weight: 700; }
        .main-nav a:hover, .main-nav a:focus-visible { color: white; text-decoration: underline; text-underline-offset: 5px; }
        .hero { min-height: calc(100vh - 76px); background-color: #263b31; background-image: linear-gradient(115deg, rgb(14 31 22 / 83%), rgb(15 28 22 / 69%)), url('https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&w=2000&q=90'); background-position: center; background-size: cover; background-attachment: fixed; }
        .content { width: min(1080px, calc(100% - 40px)); margin: 0 auto; padding: 58px 0 72px; }
        .eyebrow { margin: 0 0 13px; color: #d6eadb; font-size: 12px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; }
        h1 { margin: 0; color: white; font-size: clamp(40px, 6vw, 64px); line-height: 1; letter-spacing: -.055em; }
        .intro { max-width: 640px; margin: 16px 0 30px; color: rgb(255 255 255 / 83%); font-size: 15px; line-height: 1.7; }
        .menu-list { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 16px; }
        .menu-card, .empty-state { border: 1px solid rgb(255 255 255 / 58%); border-radius: 18px; background: #fbfcfa; box-shadow: 0 18px 55px rgb(0 0 0 / 18%); }
        .menu-card { padding: 23px; }
        .menu-card .intro { margin: 16px 0 0; color: #6a786e; }
        .menu-date { display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 10px; padding-bottom: 15px; border-bottom: 1px solid #e4eae3; }
        .menu-date h2 { margin: 0; color: #23372b; font-size: 20px; }
        .menu-department { padding: 6px 10px; border-radius: 999px; background: #eaf3eb; color: #286447; font-size: 11px; font-weight: 700; }
        .menu-items { display: grid; gap: 10px; margin: 16px 0 0; padding: 0; list-style: none; }
        .menu-items li { display: flex; align-items: flex-start; gap: 10px; color: #46554b; font-size: 14px; line-height: 1.5; }
        .menu-items li::before { width: 7px; height: 7px; flex: 0 0 7px; margin-top: 6px; border-radius: 50%; background: #4b855e; content: ""; }
        .empty-state { padding: 32px; color: #35453a; }
        .empty-state h2 { margin: 0; font-size: 21px; }
        .empty-state p { margin: 10px 0 0; color: #6a786e; font-size: 14px; line-height: 1.65; }
        .back-link { display: inline-flex; margin-top: 22px; color: #286447; font-size: 13px; font-weight: 700; text-decoration: underline; text-underline-offset: 4px; }
        .footer { width: min(1080px, calc(100% - 40px)); margin: 0 auto; padding: 0 0 20px; color: rgb(255 255 255 / 70%); font-size: 11px; }
        @media (max-width: 700px) { .menu-list { grid-template-columns: 1fr; } .content { padding-top: 42px; } .hero { background-attachment: scroll; } }
        @media (max-width: 540px) { .header-inner { width: calc(100% - 28px); align-items: flex-start; flex-direction: column; gap: 14px; padding: 15px 0; } .main-nav { justify-content: flex-start; gap: 10px 16px; } .main-nav a { font-size: 12px; } .content, .footer { width: calc(100% - 28px); } .menu-card, .empty-state { padding: 19px; } }
    </style>
</head>
<body>
    <header class="site-header">
        <div class="header-inner">
            <a class="brand" href="{{ route('home.welcome') }}" aria-label="Página inicial do SESI Refeitório">
                <span class="brand-mark">SESI</span>
                <span class="brand-name">Refeitório<small>Alimentação e bem-estar</small></span>
            </a>
            <nav class="main-nav" aria-label="Navegação principal">
                <a href="{{ route('home.welcome') }}">Início</a>
                <a href="{{ route('fale_com_a_lia') }}">Fale com a Lia</a>
                <a href="{{ route('troca_almoco') }}">Troca do almoço</a>
                <a href="{{ route('quiz') }}">Quiz</a>
                <a href="{{ route('solicitacao_de_troca') }}">Solicitação</a>
                <a href="{{ route('refeitorio') }}">Refeitório</a>
                <a href="{{ route('contato') }}">Contato</a>
            </nav>
        </div>
    </header>

    <main class="hero">
        <section class="content" aria-labelledby="page-title">
            <p class="eyebrow">Refeitório SESI</p>
            <h1 id="page-title">Cardápios da semana</h1>
            <p class="intro">Confira as refeições desta semana e da próxima semana.</p>

            <h2 class="h3 fw-bold text-white mb-3">Cardápio desta semana <span class="fs-6 fw-normal">({{ $inicioSemanaAtual->format('d/m') }} a {{ $fimSemanaAtual->format('d/m/Y') }})</span></h2>
            <div class="row g-4 mb-5" aria-label="Refeições do refeitório">
                <div class="col-12 col-md-6 col-xl-4">
                    <article class="card h-100 border-0 shadow overflow-hidden">
                        <img src="{{ asset('images/cardapio-cafe.svg') }}" class="card-img-top" alt="Pães de queijo servidos com café da manhã" loading="lazy" style="height:220px;object-fit:cover">
                        <div class="card-body">
                            <span class="badge text-bg-success mb-2">07h às 09h</span>
                            <h2 class="card-title h4 fw-bold">Café da manhã</h2>
                            <p class="card-text text-secondary mb-0">Pão de queijo, abacaxi e leite com café.</p>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <article class="card h-100 border-0 shadow overflow-hidden">
                        <img src="{{ asset('images/cardapio-almoco.svg') }}" class="card-img-top" alt="Prato de arroz, feijão, salada e frango grelhado" loading="lazy" style="height:220px;object-fit:cover">
                        <div class="card-body">
                            <span class="badge text-bg-success mb-2">11h às 13h30</span>
                            <h2 class="card-title h4 fw-bold">Almoço</h2>
                            <p class="card-text text-secondary mb-0">Arroz, feijão, salada e frango grelhado.</p>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <article class="card h-100 border-0 shadow overflow-hidden">
                        <img src="{{ asset('images/cardapio-lanche.svg') }}" class="card-img-top" alt="Pão e maçã para o café da tarde" loading="lazy" style="height:220px;object-fit:cover">
                        <div class="card-body">
                            <span class="badge text-bg-success mb-2">15h às 16h30</span>
                            <h2 class="card-title h4 fw-bold">Café da tarde</h2>
                            <p class="card-text text-secondary mb-0">Pão com manteiga, maçã e suco de limão.</p>
                        </div>
                    </article>
                </div>
            </div>

            <h2 class="h3 fw-bold text-white mb-3">Cardápio da próxima semana <span class="fs-6 fw-normal">({{ $inicioProximaSemana->format('d/m') }} a {{ $fimProximaSemana->format('d/m/Y') }})</span></h2>
            <div class="row g-4 mb-5" aria-label="Refeições da próxima semana">
                <div class="col-12 col-md-6 col-xl-4">
                    <article class="card h-100 border-0 shadow overflow-hidden">
                        <img src="{{ asset('images/cardapio-cafe.svg') }}" class="card-img-top" alt="Pão aquecido com requeijão" loading="lazy" style="height:220px;object-fit:cover">
                        <div class="card-body">
                            <span class="badge text-bg-success mb-2">07h às 09h</span>
                            <h3 class="card-title h4 fw-bold">Café da manhã</h3>
                            <p class="card-text text-secondary mb-0">Pão com requeijão aquecido.</p>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <article class="card h-100 border-0 shadow overflow-hidden">
                        <img src="{{ asset('images/cardapio-almoco.svg') }}" class="card-img-top" alt="Arroz, feijão carioca e carne ao molho" loading="lazy" style="height:220px;object-fit:cover">
                        <div class="card-body">
                            <span class="badge text-bg-success mb-2">11h às 13h30</span>
                            <h3 class="card-title h4 fw-bold">Almoço</h3>
                            <p class="card-text text-secondary mb-0">Arroz, feijão carioca e carne com molho de tomate.</p>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <article class="card h-100 border-0 shadow overflow-hidden">
                        <img src="{{ asset('images/cardapio-lanche.svg') }}" class="card-img-top" alt="Esfiha assada de carne" loading="lazy" style="height:220px;object-fit:cover">
                        <div class="card-body">
                            <span class="badge text-bg-success mb-2">15h às 16h30</span>
                            <h3 class="card-title h4 fw-bold">Café da tarde</h3>
                            <p class="card-text text-secondary mb-0">Esfiha de carne, suco de abacaxi e maçã.</p>
                        </div>
                    </article>
                </div>
            </div>

            @if ($cardapiosDestaSemana->isNotEmpty() || $cardapiosProximaSemana->isNotEmpty())
                <h2 class="h3 fw-bold text-white">Cardápios cadastrados no sistema</h2>
                <div class="menu-list">
                    @foreach ($cardapiosDestaSemana->concat($cardapiosProximaSemana) as $cardapio)
                        <article class="menu-card">
                            <div class="menu-date">
                                <h2>{{ $cardapio->data->format('d/m/Y') }}</h2>
                                <span class="menu-department">{{ $cardapio->departamento }}</span>
                            </div>

                            @if ($cardapio->produtos->isNotEmpty())
                                <ul class="menu-items">
                                    @foreach ($cardapio->produtos as $produto)
                                        <li>{{ $produto->nome_produto }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <p class="intro">Nenhum prato foi associado a este cardápio ainda.</p>
                            @endif
                        </article>
                    @endforeach
                </div>
            @endif
            <div class="d-flex flex-wrap gap-2 mt-4">
                <a class="btn btn-success" href="{{ route('quiz') }}">Próxima etapa: fazer o quiz</a>
                <a class="btn btn-outline-light" href="{{ route('solicitacao_de_troca') }}">Ir para solicitação de troca</a>
            </div>
        </section>

        <footer class="footer">SESI · Refeitório</footer>
    </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
