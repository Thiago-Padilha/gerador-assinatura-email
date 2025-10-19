@extends('layout.app')

@section('conteudo')
<div class="card-header text-center ">
    
    <img id="logo-head" src="{{ asset('imagens/logoexemplo.png') }}" alt="Logo Real Grupo Priner">
    <h4>Gerador Assinatura de E-mail</h4>

    <form method="get" action="{{ route('assinatura') }}">
        @csrf <!-- Adicione CSRF para segurança -->
        
        <div class="form-group row">
            <label for="inputnome">Nome completo</label>
            <input type="text" 
                   class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" 
                   id="inputnome" 
                   placeholder="Informe seu nome completo" 
                   name="nome" 
                   value="{{ old('nome') }}">
            @if($errors->has('nome'))
                <div class="invalid-feedback">
                    {{ $errors->first('nome') }}
                </div>
            @endif
        </div>

        <div class="form-group row">
            <label for="inputcargo">Cargo</label>
            <input type="text" 
                   class="form-control {{ $errors->has('cargo') ? 'is-invalid' : '' }}" 
                   id="inputcargo" 
                   placeholder="Informe seu cargo" 
                   name="cargo" 
                   value="{{ old('cargo') }}">
            @if($errors->has('cargo'))
                <div class="invalid-feedback">
                    {{ $errors->first('cargo') }}
                </div>
            @endif
        </div>

        <div class="form-group row mb-3">
            <label for="inputemail">Email</label>
            <input type="email" 
                   class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" 
                   id="inputemail" 
                   placeholder="email@dominio.com.br" 
                   name="email" 
                   value="{{ old('email') }}">
            @if($errors->has('email'))
                <div class="invalid-feedback">
                    {{ $errors->first('email') }}
                </div>
            @endif
        </div>
<!--
        <div class="form-group row">
            <label for="inputtelefone">Telefone</label>
            <input type="text" 
                   class="form-control" 
                   id="inputtelefone" 
                   placeholder="(00) 0000 0000" 
                   name="telefone" 
                   value="{{ old('telefone') }}">
        </div>
-->
        <div class="form-group row">
            <label for="inputcelular">Celular</label>
            <input type="text" 
                   class="form-control" 
                   id="inputcelular" 
                   placeholder="(00) 0 0000 0000" 
                   name="celular" 
                   value="{{ old('celular') }}">
        </div>

        <button class="btn btn-sm" type="submit">Gerar Assinatura</button>
        
        <!-- <button id="btn-ajuda-home" class="btn-ajuda" type="button">Ajuda Home</button>
            <div id="caixa-ajuda-home" class="caixa-ajuda">
                <button id="btn-fechar-home" class="btn-fechar" type="button">X</button>
                <p>Informações de ajuda para Home...</p>
            </div> -->



    </form>
</div>
@endsection

@section('javascript')
<script>
    $(document).ready(function() {
        $('#inputtelefone').mask('(00) 0000 0000');
        $('#inputcelular').mask('(00) 0 0000 0000');
    });
</script>
@endsection
