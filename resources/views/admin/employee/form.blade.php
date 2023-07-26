<div class="box-body row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <label for="servicee_id">Servicios</label>
        <div class="select">
            <select id="servicee_id" name="servicee_id" class="form-control selectpicker" data-live-search="true" required>
                <option {{ ($employee->servicee_id ?? '') == '' ? "selected" : "" }} disabled>Seleccionar Servicios</option>
                @foreach($servicees as $servicee)
                    @if($servicee->id == ($employee->servicee_id ?? ''))
                        <option value="{{ $servicee->id }}" selected>{{ $servicee->name }}</option>
                    @else
                        <option value="{{ $servicee->id }}">{{ $servicee->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="name">Nombre del Empleado</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $employee->name ?? '') }}" placeholder="Nombre del Empleado">
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="position">Posición</label>
            <input type="text" name="position" class="form-control" value="{{ old('position', $employee->position ?? '') }}" placeholder="Posición">
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="phone">Telefono</label>
            <input type="number" name="phone" class="form-control" value="{{ old('phone', $employee->phone ?? '') }}" placeholder="Telefono">
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <label for="type">Estado</label>
        <div class="select">
            <select id="status" name="status" class="form-control selectpicker" data-live-search="true" required>
                <option >Seleccionar Estado</option>
                    <option value="active">Activo</option>
                    <option value="inactive">Inactivo</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-celeste btn-md" type="submit"><i class="fa fa-save"></i>&nbsp; Guardar</button>
        <a href="{{url('employee')}}" class="btn btn-gris btn-md"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
    </div>
</div>
