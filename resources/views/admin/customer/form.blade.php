<div class="box-body row">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <label for="company_id">Compañía</label>
        <div class="select">
            <select id="company_id" name="company_id" class="form-control selectpicker" data-live-search="true" required>
                <option {{ ($customer->company_id ?? '') == '' ? "selected" : "" }} disabled>Seleccionar Compañía</option>
                @foreach($companies as $company)
                    @if($company->id == ($customer->company_id ?? ''))
                        <option value="{{ $company->id }}" selected>{{ $company->name }}</option>
                    @else
                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="form-group">
        <label for="department_id">Departamento</label>
            <select name="department_id" class="form-control" id="department_id">
                @foreach($departments as $dep)
                        <option value="{{ $dep->id }}">{{ $dep->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <label for="municipality_id">Municipio</label>
        <div class="select">
            <select id="municipality_id" name="municipality_id" class="form-control selectpicker" data-live-search="true" required>
                <option {{ ($customer->municipality_id ?? '') == '' ? "selected" : "" }} disabled>Seleccionar Municipio</option>
                @foreach($municipalities as $municipality)
                    @if($municipality->id == ($customer->municipality_id ?? ''))
                        <option value="{{ $municipality->id }}" selected>{{ $municipality->name }}</option>
                    @else
                        <option value="{{ $municipality->id }}">{{ $municipality->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="name">Nombre del Cliente </label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $customer->name ?? '') }}" placeholder="Nombre del Cliente">
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <label for="identification_type_id">Tipo de Identificación</label>
        <div class="select">
            <select id="identification_type_id" name="identification_type_id" class="form-control selectpicker" data-live-search="true" required>
                <option {{ ($customer->identification_type_id ?? '') == '' ? "selected" : "" }} disabled>Seleccionar Tipo de Identificación</option>
                @foreach($identification_types as $identification_type)
                    @if($identification_type->id == ($customer->identification_type_id ?? ''))
                        <option value="{{ $identification_type->id }}" selected>{{ $identification_type->name }}</option>
                    @else
                        <option value="{{ $identification_type->id }}">{{ $identification_type->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="email">Correo Elétronico</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $customer->email ?? '') }}" placeholder="Correo Elétronico">
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="phone">Teléfono</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone', $customer->phone ?? '') }}" placeholder="Teléfono">
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <label for="type">Estado del Cliente </label>
        <div class="select">
            <select id="status" name="status" class="form-control selectpicker" data-live-search="true" required>
                <option {{ ($customer->status ?? '') == '' ? "selected" : "" }} disabled>Seleccionar Estado</option>
                    <option value="active">Cliente Activo</option>
                    <option value="inactive">Cliente Cancelado</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <button class="btn btn-celeste btn-md" type="submit"><i class="fa fa-save"></i>&nbsp; Guardar</button>
        <a href="{{url('provider')}}" class="btn btn-gris btn-md"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
    </div>
</div>
