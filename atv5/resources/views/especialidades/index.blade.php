<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.main', ['titulo' => "Especialidades", 'rota' => "especialidades.create"])
<!-- Preenche o conteúdo da seção "titulo" -->
@section('titulo') Veterinários @endsection
<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')

<div class="row">
    <div class="col">

        <!-- Utiliza o componente "datalist" criado -->
        <x-datalistVet :title="Especialidades" :crud="especialidades" :header="['NOME', 'DESCRICAO', 'AÇÕES']" :fields="['id', 'nome', 'descricao']" :data="$dados" :hide="[true, false, true, false]" :info="['id','nome', 'descricao']" :remove="nome" />

    </div>
</div>
@endsection