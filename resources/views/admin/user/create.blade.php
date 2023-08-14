@extends("layouts.admin")
@section('titulo')
    {{ config('app.name', 'Facturador') }}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <h5 class="box-title">Agregar Usuario
                <a href="{{ route('user.index') }}" class="btn btn-lightBlueGrad btn-sm ml-3"><i class="fas fa-undo-alt mr-2"></i>Regresar</a>
                </h5>
            </div>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                         @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {!!Form::open(array('url'=>'user', 'method'=>'POST', 'autocomplete'=>'off'))!!}
            {!!Form::token()!!}
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    @include('admin/user.form')
                </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection
