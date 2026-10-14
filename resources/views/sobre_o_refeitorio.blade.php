@extends('layouts.sesi')

@section('title', 'Sobre o refeitório | SESI')

@section('content')
<div class="row justify-content-center"><div class="col-lg-10">
  <section class="card page-card"><div class="card-body p-4 p-md-5">
    <span class="badge text-bg-success mb-3">SESI Refeitório</span>
    <h1 class="display-5 fw-bold">Sobre o refeitório</h1>
    <p class="lead text-secondary">Este espaço reúne informações e serviços para ajudar você a acompanhar a alimentação do refeitório.</p>
    <hr class="my-4">
    <div class="row g-4">
      <div class="col-md-4"><h2 class="h5 fw-bold">Cardápio</h2><p class="text-secondary">Consulte as refeições publicadas e veja os itens disponíveis por data.</p><a class="btn btn-outline-success" href="{{ route('cardapios.index') }}">Ver cardápios</a></div>
      <div class="col-md-4"><h2 class="h5 fw-bold">Atendimento</h2><p class="text-secondary">Envie dúvidas e sugestões para a equipe responsável pelo refeitório.</p><a class="btn btn-outline-success" href="{{ route('contato') }}">Falar com a equipe</a></div>
      <div class="col-md-4"><h2 class="h5 fw-bold">Solicitações</h2><p class="text-secondary">Registre seu pedido de troca de mistura para análise da equipe.</p><a class="btn btn-outline-success" href="{{ route('solicitacao_de_troca') }}">Solicitar troca</a></div>
    </div>
    <div class="mt-5 p-4 rounded-4 bg-success-subtle d-flex flex-column flex-md-row align-items-center gap-3">
      <a href="{{ route('fale_com_a_lia') }}" class="text-decoration-none text-center" aria-label="Conversar com a Lia, assistente do refeitório"><span class="d-grid rounded-circle bg-white shadow-sm display-3" style="width:100px;height:100px;place-items:center" aria-hidden="true">🧑‍🍳</span><span class="small fw-bold text-success d-block mt-2">Clique no boneco</span></a>
      <div><h2 class="h4 fw-bold">Conheça a Lia</h2><p class="text-secondary mb-2">A assistente ajuda você a encontrar as opções do almoço e seguir para a solicitação.</p><a class="btn btn-success" href="{{ route('fale_com_a_lia') }}">Conversar com a Lia</a></div>
    </div>
    <div class="d-flex justify-content-end mt-4"><a class="btn btn-sesi" href="{{ route('fale_com_a_lia') }}">Próxima etapa: Lia →</a></div>
  </div></section>
</div></div>
@endsection
