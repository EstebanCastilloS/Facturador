<div class="box-body row">

    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
        <label for="branche_id">Sucursal</label>
        <div class="select">
            <select id="branche_id" name="branche_id" class="form-control selectpicker" data-live-search="true" required>
                <option {{ ($user->branche_id ?? '') == '' ? "selected" : "" }} disabled>Seleccionar Sucursal</option>
                @foreach($branches as $branche)
                    @if($branche->id == ($user->branche_id ?? ''))
                        <option value="{{ $branche->id }}" selected>{{ $branche->name }}</option>
                    @else
                        <option value="{{ $branche->id }}">{{ $branche->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="name">Nombre de Usuario</label>
            <input type="text" name="name" value="{{ old('name', $user->name ?? '') }}" class="form-control" placeholder="Nombre de Usuario">
        </div>
    </div>

    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" name="password" value="{{ old('password', $user->password ?? '') }}" class="form-control" placeholder="Contraseña">
        </div>
    </div>

    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="email">Correo Eléctrónico</label>
            <input type="email" name="email" value="{{ old('email', $user->email ?? '') }}" class="form-control" placeholder="Correo Eléctrónico">
        </div>
    </div>

    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="user_role">Rol de Usuario</label>
            <input type="text" name="user_role" value="{{ old('user_role', $user->user_role ?? '') }}" class="form-control" placeholder="Rol de Usuario">
        </div>
    </div>

    <div class="clearfix"></div>
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="address">Dirección</label>
            <input type="text" name="address" value="{{ old('address', $user->address ?? '') }}" class="form-control" placeholder="Dirección">
        </div>
    </div>

    <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
        <label for="type">Estado del Usuario</label>
        <div class="select">
            <select id="status" name="status" class="form-control selectpicker" data-live-search="true" required>
                <option {{ ($user->status ?? '') == '' ? "selected" : "" }} disabled>Seleccionar Estado</option>
                    <option value="active">Empleado</option>
                    <option value="inactive">Retirado</option>
            </select>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <button class="btn btn-celeste btn-md" type="submit"><i class="fa fa-save"></i>&nbsp; Guardar</button>
            <a href="{{url('user')}}" class="btn btn-gris"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
        </div>
    </div>
</div>
