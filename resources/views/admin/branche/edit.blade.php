@extends("layouts.admin")
@section('titulo')
    {{ config('app.name', 'FacturadorPro') }}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <h5 class="box-title">Editar Sucursal de: {{ $branche->name }}</h5>
                <a href="{{ route('branche.index') }}" class="btn btn-lightBlueGrad btn-sm ml-3"><i class="fas fa-undo-alt mr-2"></i>Regresar</a>


            </div>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                         @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {!!Form::model($branche, ['method'=>'PATCH','route'=>['branche.update', $branche->id]])!!}
            {!!Form::token()!!}
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    @include('admin/branche.form')
                </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection
