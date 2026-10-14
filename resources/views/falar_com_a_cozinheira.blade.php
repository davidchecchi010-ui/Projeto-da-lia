@extends('layouts.sesi')

@section('title', 'Fale com a cozinha | SESI Refeitório')

@section('content')
<div class="row justify-content-center">
  <div class="col-lg-8">
    <section class="card page-card">
      <div class="card-body p-4 p-md-5">
        <span class="badge text-bg-success mb-3">Atendimento do refeitório</span>
        <h1 class="display-6 fw-bold">Fale com as cozinheiras</h1>
        <p class="lead text-secondary">Envie uma dúvida, sugestão ou pedido sobre as refeições. A equipe receberá sua mensagem para análise.</p>

        @if (session('status'))
          <div class="alert alert-success" role="status">{{ session('status') }}</div>
        @endif

        @if ($errors->any())
          <div class="alert alert-danger" role="alert">
            <p class="fw-bold mb-1">Confira os campos informados:</p>
            <ul class="mb-0">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
          </div>
        @endif

        <form method="POST" action="{{ route('contato.cozinha.enviar') }}" class="row g-3">
          @csrf
          <div class="col-md-6">
            <label for="nome" class="form-label">Seu nome</label>
            <input id="nome" name="nome" class="form-control" value="{{ old('nome') }}" autocomplete="name" maxlength="120" required>
          </div>
          <div class="col-md-6">
            <label for="email" class="form-label">E-mail <span class="text-secondary">(opcional)</span></label>
            <input id="email" name="email" type="email" class="form-control" value="{{ old('email') }}" autocomplete="email" maxlength="255">
          </div>
          <div class="col-12">
            <label for="assunto" class="form-label">Assunto</label>
            <select id="assunto" name="assunto" class="form-select" required>
              <option value="">Selecione uma opção</option>
              <option value="outra_opcao" @selected(old('assunto') === 'outra_opcao')>Sugerir outra opção de refeição</option>
              <option value="troca_alimento" @selected(old('assunto') === 'troca_alimento')>Trocar um alimento</option>
              <option value="sugestao" @selected(old('assunto') === 'sugestao')>Enviar uma sugestão</option>
              <option value="outro" @selected(old('assunto') === 'outro')>Outro assunto</option>
            </select>
          </div>
          <div class="col-12">
            <label for="mensagem" class="form-label">Mensagem</label>
            <textarea id="mensagem" name="mensagem" class="form-control" rows="5" maxlength="2000" required>{{ old('mensagem') }}</textarea>
          </div>
          <div class="col-12 d-flex flex-wrap gap-2 pt-2">
            <button type="submit" class="btn btn-sesi">Enviar mensagem</button>
            <a href="{{ route('contato') }}" class="btn btn-outline-secondary">Voltar ao refeitório</a>
          </div>
        </form>
      </div>
    </section>
  </div>
</div>
@endsection
