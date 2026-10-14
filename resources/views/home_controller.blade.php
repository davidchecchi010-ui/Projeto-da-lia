<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#25392f">
    <title>Início | SESI Refeitório</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        :root { font-family: Arial, Helvetica, sans-serif; }
        body { min-width: 320px; margin: 0; background: #f2f5f1; color: #24352b; }
        .sesi-navbar { background: rgb(20 31 25 / 92%); backdrop-filter: blur(12px); }
        .sesi-logo { display: inline-block; transform: skew(-7deg); padding: 3px 12px; background: #e30613; color: #fff; font-size: 27px; font-style: italic; font-weight: 900; letter-spacing: -2px; line-height: 1.25; }
        .brand-copy { color: #fff; font-size: 14px; font-weight: 700; line-height: 1.2; }
        .brand-copy small { display: block; margin-top: 4px; color: rgb(255 255 255 / 68%); font-size: 10px; font-weight: 400; }
        .sesi-navbar .nav-link { color: rgb(255 255 255 / 86%); font-size: 14px; font-weight: 600; }
        .sesi-navbar .nav-link:hover, .sesi-navbar .nav-link:focus { color: #fff; }
        .hero { display: flex; min-height: 570px; align-items: center; background-color: #25392f; background-image: linear-gradient(100deg, rgb(14 28 20 / 82%), rgb(18 34 25 / 45%)), url('https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&w=2000&q=90'); background-position: center; background-size: cover; }
        .hero-copy { max-width: 650px; padding-top: 62px; padding-bottom: 62px; color: #fff; }
        .hero-kicker { margin-bottom: 14px; color: #d6eadb; font-size: 12px; font-weight: 700; letter-spacing: .15em; text-transform: uppercase; }
        .hero h1 { max-width: 620px; font-size: clamp(42px, 6vw, 68px); font-weight: 750; letter-spacing: -.055em; line-height: 1.02; }
        .hero p { max-width: 550px; margin: 20px 0 26px; color: rgb(255 255 255 / 85%); font-size: 17px; line-height: 1.7; }
        .btn-sesi { border-color: #e30613; background: #e30613; color: #fff; font-weight: 700; }
        .btn-sesi:hover { border-color: #bd0711; background: #bd0711; color: #fff; }
        .btn-outline-light { font-weight: 700; }
        .section-space { padding-top: 64px; padding-bottom: 70px; }
        .section-kicker { margin-bottom: 8px; color: #39744e; font-size: 12px; font-weight: 800; letter-spacing: .12em; text-transform: uppercase; }
        .section-title { margin-bottom: 10px; color: #24352b; font-size: clamp(27px, 4vw, 36px); font-weight: 750; letter-spacing: -.04em; }
        .section-description { max-width: 650px; margin-bottom: 30px; color: #69766d; line-height: 1.7; }
        .service-card { height: 100%; border: 1px solid #e0e8df; border-radius: 18px; background: #fff; box-shadow: 0 8px 24px rgb(29 57 39 / 6%); transition: transform .18s ease, box-shadow .18s ease; }
        .service-card:hover { transform: translateY(-4px); box-shadow: 0 16px 34px rgb(29 57 39 / 12%); }
        .service-icon { display: grid; width: 46px; height: 46px; place-items: center; margin-bottom: 18px; border-radius: 14px; background: #eaf3eb; color: #286447; font-size: 22px; }
        .service-card h3 { color: #24352b; font-size: 18px; font-weight: 700; }
        .service-card p { min-height: 48px; color: #718076; font-size: 14px; line-height: 1.6; }
        .service-link { color: #286447; font-size: 13px; font-weight: 800; text-decoration: none; }
        .service-link:hover { color: #174a2e; text-decoration: underline; text-underline-offset: 4px; }
        .lia-banner { overflow: hidden; border-radius: 22px; background: #e8f0e8; }
        .lia-banner-copy { padding: clamp(28px, 5vw, 52px); }
        .lia-banner h2 { margin: 0 0 12px; color: #24352b; font-size: clamp(25px, 4vw, 34px); font-weight: 750; letter-spacing: -.04em; }
        .lia-banner p { max-width: 580px; color: #617067; line-height: 1.7; }
        .lia-banner-mark { display: grid; min-height: 220px; place-items: center; background: linear-gradient(135deg, #286447, #173d2b); color: white; font-size: 78px; font-weight: 800; }
        .site-footer { background: #17251d; color: rgb(255 255 255 / 72%); }
        .site-footer a { color: white; text-decoration: none; }
        .site-footer a:hover { text-decoration: underline; }

        @media (max-width: 575.98px) {
            .hero { min-height: 540px; }
            .hero-copy { padding-top: 50px; padding-bottom: 50px; }
            .hero p { font-size: 15px; }
            .section-space { padding-top: 46px; padding-bottom: 50px; }
            .lia-banner-mark { min-height: 150px; font-size: 58px; }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark sesi-navbar sticky-top">
        <div class="container py-2">
            <a class="navbar-brand d-flex align-items-center gap-3" href="{{ route('home.welcome') }}" aria-label="Página inicial do SESI Refeitório">
                <span class="sesi-logo">SESI</span>
                <span class="brand-copy">Refeitório<small>Alimentação e bem-estar</small></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal" aria-controls="menuPrincipal" aria-expanded="false" aria-label="Abrir menu de navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menuPrincipal">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('home') }}">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('cardapios.index') }}">Cardápios</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('refeitorio') }}">Refeitório</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('sobre') }}">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contato') }}">Contato</a></li>
                    <li class="nav-item ms-lg-2"><a class="btn btn-sesi px-3 py-2" href="{{ route('login') }}">Entrar</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section class="hero">
            <div class="container">
                <div class="hero-copy">
                    <div class="hero-kicker">SESI · Refeitório</div>
                    <h1>Alimentação que faz parte do seu dia.</h1>
                    <p>Encontre o cardápio, conheça o refeitório e acesse os serviços para tornar sua experiência mais simples.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a class="btn btn-sesi btn-lg px-4" href="{{ route('cardapios.index') }}">Ver cardápios</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="{{ route('sobre') }}">Conheça o refeitório</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-space">
            <div class="container">
                <p class="section-kicker">Serviços</p>
                <h2 class="section-title">O que você precisa hoje?</h2>
                <p class="section-description">Acesse os principais serviços do Refeitório SESI por estes atalhos.</p>

                <div class="row g-4">
                    <div class="col-12 col-md-6 col-xl-3">
                        <article class="service-card p-4">
                            <span class="service-icon" aria-hidden="true">▤</span>
                            <h3>Cardápios</h3>
                            <p>Veja as refeições cadastradas para os próximos dias.</p>
                            <a class="service-link" href="{{ route('cardapios.index') }}">Consultar cardápios →</a>
                        </article>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3">
                        <article class="service-card p-4">
                            <span class="service-icon" aria-hidden="true">⇄</span>
                            <h3>Troca de refeição</h3>
                            <p>Acesse a área para solicitar uma troca de refeição.</p>
                            <a class="service-link" href="{{ route('solicitacao_de_troca') }}">Fazer solicitação →</a>
                        </article>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3">
                        <article class="service-card p-4">
                            <span class="service-icon" aria-hidden="true">✉</span>
                            <h3>Contato da cozinha</h3>
                            <p>Encontre os canais de contato com a equipe.</p>
                            <a class="service-link" href="{{ route('contato') }}">Entrar em contato →</a>
                        </article>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3">
                        <article class="service-card p-4">
                            <span class="service-icon" aria-hidden="true">?</span>
                            <h3>Quiz do cardápio</h3>
                            <p>Participe da página interativa sobre o cardápio.</p>
                            <a class="service-link" href="{{ route('quiz') }}">Acessar quiz →</a>
                        </article>
                    </div>
                </div>

                <div class="lia-banner row g-0 align-items-center mt-5">
                    <div class="col-12 col-md-8">
                        <div class="lia-banner-copy">
                            <p class="section-kicker">Assistente do refeitório</p>
                            <h2>Precisa de uma ajuda?</h2>
                            <p>Converse com a Lia para encontrar o cardápio, acessar uma solicitação ou falar com a cozinha.</p>
                            <a class="btn btn-sesi px-4 py-2" href="{{ route('fale_com_a_lia') }}">Fale com a Lia</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="lia-banner-mark" aria-hidden="true">L</div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer py-4">
        <div class="container d-flex flex-column flex-sm-row justify-content-between gap-2">
            <span>SESI · Refeitório</span>
            <span><a href="{{ route('sobre') }}">Sobre</a> · <a href="{{ route('contato') }}">Contato</a> · <a href="{{ route('login') }}">Entrar</a></span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
