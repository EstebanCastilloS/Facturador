<div class="box-body row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="name">Nombre de Usuario</label>
            <input type="text" name="name" value="{{ old('name', $useer->name ?? '') }}" class="form-control" placeholder="Nombre de Usuario">
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="email">Correo Eléctrónico</label>
            <input type="email" name="email" value="{{ old('email', $useer->email ?? '') }}" class="form-control" placeholder="Correo Eléctrónico">
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="user_role">Rol de Usuario</label>
            <input type="text" name="user_role" value="{{ old('user_role', $useer->user_role ?? '') }}" class="form-control" placeholder="Rol de Usuario">
        </div>
    </div>

    <div class="clearfix"></div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="address">Dirección</label>
            <input type="text" name="address" value="{{ old('address', $useer->address ?? '') }}" class="form-control" placeholder="Dirección">
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <label for="type">Estado del Usuario</label>
        <div class="select">
            <select id="status" name="status" class="form-control selectpicker" data-live-search="true" required>
                <option {{ ($useer->status ?? '') == '' ? "selected" : "" }} disabled>Seleccionar Estado</option>
                    <option value="active">Empleado</option>
                    <option value="inactive">Retirado</option>
            </select>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <button class="btn btn-celeste btn-md" type="submit"><i class="fa fa-save"></i>&nbsp; Guardar</button>
            <a href="{{url('useer')}}" class="btn btn-gris"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
        </div>
    </div>
</div>
