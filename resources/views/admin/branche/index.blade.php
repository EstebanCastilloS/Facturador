
@extends("layouts.admin")
@section('titulo')
{{ config('app.name', 'FacturadorPro') }}
@endsection
@section('content')
<main class="main">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h5>Sucursal
                <a href="branche/create" class="btn btn-celeste"><i class="fa fa-plus"></i>Agregar Sucursal</a>
            </h5>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover" id="branches">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Compañía</th>
                            <th>Sucursal</th>
                            <th>NIT</th>
                            <th>Municipio</th>
                            <th>Departamento</th>
                            <th>Dirección</th>
                            <th>Correo Eléctronico</th>
                            <th>Télefono</th>
                            <th>Contacto</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    @push('scripts')
<script type="text/javascript">
$(document).ready(function ()
    {
        $('#branches').DataTable(
        {
            info: true,
            paging: true,
            ordering: true,
            searching: true,
            responsive: true,
            autoWidth: true,
            processing: true,
            serverSide: true,
            language: {
                url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            },
            ajax: '{{ route('branche.index') }}',
            columns:
            [
                {data: 'id'},
                {data: 'company'},
                {data: 'name'},
                {data: 'nit'},
                {data: 'municipality'},
                {data: 'department'},
                {data: 'address'},
                {data: 'email'},
                {data: 'phone'},
                {data: 'contact'},
                {data: 'edit'},
            ],
            dom: 'Bfltip',
            lengthMenu: [
                [10, 20, 50, 100, 500, -1], [10, 20, 50, 100, 500, 'Todos']
            ],
            buttons: [
                {
                    extend: 'copy',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4, 5 ]
                    }
                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4, 5 ]
                    }
                },
                {
                    extend: 'pdf',
                    extend: 'pdfHtml5',
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4, 5 ]
                    }
                },
                {
                    extend: 'print',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4, 5 ]
                    }
                },
            ],
        });
    });
</script>
@endpush
</main>
@endsection





