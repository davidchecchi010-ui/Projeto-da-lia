@extends('layouts.sesi')

@section('title', 'Refeitório | SESI')

@section('content')
<div class="row align-items-center justify-content-center g-4">
  <div class="col-lg-7"><section class="card page-card"><div class="card-body p-4 p-md-5">
    <span class="badge text-bg-success mb-3">Bem-vindo</span>
    <h1 class="display-5 fw-bold">Refeitório SESI</h1>
    <p class="lead text-secondary">Acesse os serviços do refeitório em um só lugar: cardápios, atendimento, quiz e solicitações.</p>
    <div class="d-flex flex-wrap gap-2 mt-4"><a class="btn btn-sesi btn-lg" href="{{ route('cardapios.index') }}">Consultar cardápios</a><a class="btn btn-outline-success btn-lg" href="{{ route('sobre') }}">Conheça o refeitório</a></div>
  </div></section></div>
  <div class="col-lg-3"><div class="card page-card h-100"><div class="card-body p-4"><h2 class="h5 fw-bold">Precisa de ajuda?</h2><p class="text-secondary">Converse com a Lia ou envie uma mensagem para a equipe.</p><a class="btn btn-outline-success w-100 mb-2" href="{{ route('fale_com_a_lia') }}">Falar com a Lia</a><a class="btn btn-outline-secondary w-100" href="{{ route('contato') }}">Contato</a></div></div></div>
</div>
@endsection
