@extends('layout.layout')
    @section('title')
        Invista Cidades    
    @endsection
    @section('busca')
        <h3 class="box-title">Filtre Oportunidades de Investimento</h3>

        <div class="col-md-3">
            <label for="">Estado</label>
            <select class="form-control form-control-line">
                @foreach($estados as $estados)
                    <option>{{ $estados->nome_estado }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3">
            <label for="">Cidade</label>
            <select class="form-control form-control-line">
               @foreach($cidades as $cidades)
                    <option>{{ $cidades->nome }}</option>
               @endforeach
            </select>
        </div>
        <div class="col-md-3">
            <label for="">Setor</label>
            <select class="form-control form-control-line">
                @foreach($categorias as $categorias)
                    <option>{{ $categorias->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3">
            <label for=""><br></label>
            <button class="form-control btn btn-danger">Buscar</button>
        </div>
    @endsection
                
    @section('oportunidade')
                        
                        <!-- card -->
                        <div class="white-box">
                           <div class="row">
                                @foreach($oportunidades as $oportunidades)
                                    <div class="col-md-3">
                                       <img src="img/demo.jpg" class="img-responsive img-thumbnail">
                                   </div>
                                    <div class="col-md-7">
                                        <h2>{{ $oportunidades->titulo }}</h2>
                                        <p>{{ $oportunidades->descricao }}</p>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <button class="btn btn-primary btn-lg">Ver mais</button>
                                    </div>
                                @endforeach
                           </div>
                        </div>
                        <!-- /.card -->
                @endsection
              
