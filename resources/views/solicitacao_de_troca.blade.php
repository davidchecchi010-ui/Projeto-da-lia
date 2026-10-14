@extends('layouts.sesi')

@section('title', 'Solicitação de troca | SESI')

@push('styles')
<style>
  .request-card { overflow: hidden; border: 1px solid rgb(255 255 255 / 80%); border-radius: 1.4rem; box-shadow: 0 1.25rem 3.5rem rgb(0 0 0 / 20%); }
  .request-heading { position: relative; overflow: hidden; padding: clamp(1.5rem, 4vw, 2.75rem); background: linear-gradient(125deg, #f3f8f2, #fff 72%); }
  .request-heading::after { position: absolute; top: -4rem; right: -2rem; width: 13rem; height: 13rem; border: 1.5rem solid rgb(40 100 71 / 7%); border-radius: 50%; content: ''; }
  .request-icon { display: grid; width: 3.25rem; height: 3.25rem; place-items: center; border-radius: 1rem; background: #e4f1e6; font-size: 1.6rem; }
  .request-step { display: flex; align-items: center; gap: .6rem; color: #597061; font-size: .82rem; font-weight: 700; }
  .request-step span { display: grid; width: 1.8rem; height: 1.8rem; place-items: center; border-radius: 50%; background: #286447; color: white; }
  .request-body { padding: clamp(1.5rem, 4vw, 2.75rem); }
  .request-section { padding: 1.25rem; border: 1px solid #e6ece7; border-radius: 1rem; background: #fff; }
  .request-section-title { display: flex; align-items: center; gap: .65rem; margin-bottom: 1rem; color: #25352b; font-size: 1rem; font-weight: 800; }
  .request-section-title span { color: #286447; font-size: 1.15rem; }
  .request-card .form-label { margin-bottom: .45rem; color: #34473a; font-size: .88rem; font-weight: 700; }
  .request-card .form-control { min-height: 3rem; border-color: #dce5de; border-radius: .7rem; }
  .request-card .form-control:focus { border-color: #4b855e; box-shadow: 0 0 0 .2rem rgb(40 100 71 / 12%); }
  .request-submit { min-height: 3.1rem; padding-inline: 1.5rem; }
  .request-hint { color: #6a786e; font-size: .82rem; }
</style>
@endpush

@section('content')
<div class="row justify-content-center">
  <div class="col-lg-9 col-xl-8">
    <section class="card request-card">
      <header class="request-heading">
        <div class="d-flex align-items-center gap-3 mb-3">
          <span class="request-icon" aria-hidden="true">🍽️</span>
          <span class="badge rounded-pill text-bg-success">Atendimento do refeitório</span>
        </div>
        <h1 class="display-6 fw-bold mb-2">Solicitação de troca</h1>
        <p class="text-secondary mb-4">Conte para a equipe o que você gostaria de trocar. Vamos registrar seu pedido para análise.</p>
        <div class="d-flex flex-wrap gap-4">
          <div class="request-step"><span>1</span> Seus dados</div>
          <div class="request-step"><span>2</span> Sua solicitação</div>
        </div>
      </header>

      <div class="request-body">
        @if (session('status'))
          <div class="alert alert-success rounded-3" role="status">{{ session('status') }}</div>
        @endif

        @if ($errors->any())
          <div class="alert alert-danger rounded-3" role="alert">
            <p class="fw-bold mb-1">Confira os campos informados:</p>
            <ul class="mb-0">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
          </div>
        @endif

        <form method="POST" action="{{ route('solicitacao_de_troca.store') }}" class="d-grid gap-3">
          @csrf
          <section class="request-section" aria-labelledby="personal-data-title">
            <h2 id="personal-data-title" class="request-section-title"><span aria-hidden="true">👤</span> Seus dados</h2>
            <div class="row g-3">
              <div class="col-12">
                <label for="nome" class="form-label">Nome completo</label>
                <input id="nome" name="nome" class="form-control" value="{{ old('nome') }}" autocomplete="name" maxlength="120" placeholder="Digite seu nome completo" required>
              </div>
              <div class="col-md-6">
                <label for="ano" class="form-label">Ano em que está</label>
                <input id="ano" name="ano" class="form-control" value="{{ old('ano') }}" placeholder="Ex.: 1º ano" maxlength="30" required>
              </div>
              <div class="col-md-6">
                <label for="senai" class="form-label">Curso do SENAI</label>
                <input id="senai" name="senai" class="form-control" value="{{ old('senai') }}" placeholder="Ex.: Desenvolvimento de Sistemas" maxlength="120" required>
              </div>
            </div>
          </section>

          <section class="request-section" aria-labelledby="request-details-title">
            <h2 id="request-details-title" class="request-section-title"><span aria-hidden="true">🔄</span> O que você gostaria de trocar?</h2>
            <div class="row g-3">
              <div class="col-md-6">
                <label for="mistura_atual" class="form-label">Item que deseja trocar</label>
                <input id="mistura_atual" name="mistura_atual" class="form-control" value="{{ old('mistura_atual') }}" placeholder="Mistura, sobremesa, comida ou bebida" maxlength="120" required>
              </div>
              <div class="col-md-6">
                <label for="mistura_solicitada" class="form-label">Opção que gostaria no lugar</label>
                <input id="mistura_solicitada" name="mistura_solicitada" class="form-control" value="{{ old('mistura_solicitada', request('opcao')) }}" placeholder="Informe sua opção preferida" maxlength="120" required>
              </div>
            </div>
            <p class="request-hint mt-3 mb-0">Você pode pedir a troca de uma mistura, sobremesa, comida ou bebida.</p>
          </section>

          <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 pt-2">
            <span class="request-hint">Confira seus dados antes de enviar.</span>
            <button type="submit" class="btn btn-sesi request-submit">Enviar solicitação <span aria-hidden="true">→</span></button>
          </div>
        </form>
      </div>
    </section>
  </div>
</div>
@endsection
