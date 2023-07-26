<div class="box-body row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <label for="company_id">Compañía</label>
        <div class="select">
            <select id="company_id" name="company_id" class="form-control selectpicker" data-live-search="true" required>
                <option {{ ($branche->company_id ?? '') == '' ? "selected" : "" }} disabled>Seleccionar compañía</option>
                @foreach($companies as $company)
                    @if($company->id == ($branche->company_id ?? ''))
                        <option value="{{ $company->id }}" selected>{{ $company->name }}</option>
                    @else
                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="name">Nombre de la Sucursal</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $branche->name ?? '') }}" placeholder="Nombre de la Sucursal">
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="nit">NIT</label>
            <input type="text" name="nit" class="form-control" value="{{ old('nit', $branche->nit ?? '') }}" placeholder="NIT">
        </div>
    </div>


    {{-- SELECTORES DE DEPARTAMENTOS Y MUNICIPIOS --}}

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
                <option {{ ($branche->municipality_id ?? '') == '' ? "selected" : "" }} disabled>Seleccionar Municipio</option>
                @foreach($municipalities as $municipality)
                    @if($municipality->id == ($branche->municipality_id ?? ''))
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
            <label for="address">Dirección</label>
            <input type="text" name="address" class="form-control" value="{{ old('address', $branche->address ?? '') }}" placeholder="Dirección">
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="email">Correo Eléctronico</label>
            <input type="email"  name="email" class="form-control" value="{{ old('email', $branche->email ?? '') }}" placeholder="Correo Eléctronico">
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="phone">Teléfono</label>
            <input type="text"  name="phone" class="form-control" value="{{ old('phone', $branche->phone ?? '') }}" placeholder="Teléfono">
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="contact">Contacto</label>
            <input type="text"  name="contact" class="form-control" value="{{ old('contact', $branche->contact ?? '') }}" placeholder="Contacto">
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-celeste btn-md" type="submit"><i class="fa fa-save"></i>&nbsp; Guardar</button>
        <a href="{{url('branche')}}" class="btn btn-gris btn-md"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
    </div>
</div>
