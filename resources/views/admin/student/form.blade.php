<div class="box-body row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" value="{{ old('name', $student->name ?? '') }}" class="form-control" placeholder="Nombre">
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="lastname">Apellido</label>
            <input type="text" name="lastname" value="{{ old('lastname', $student->lastname ?? '') }}" class="form-control" placeholder="Apellido">
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="idCode">Código Estudiantil</label>
            <input type="text" name="idCode" value="{{ old('idCode', $student->idCode ?? '') }}" class="form-control" placeholder="Código Estudiantil">
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <label for="type">Estado del Estudiante </label>
        <div class="select">
            <select id="status" name="status" class="form-control selectpicker" data-live-search="true" required>
                <option {{ ($student->status ?? '') == '' ? "selected" : "" }} disabled>Seleccionar Estado</option>
                    <option value="active">En curso</option>
                    <option value="inactive">Expulsado</option>
            </select>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <button class="btn btn-celeste btn-md" type="submit"><i class="fa fa-save"></i>&nbsp; Guardar</button>
            <a href="{{url('student')}}" class="btn btn-gris"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
        </div>
    </div>
</div>
