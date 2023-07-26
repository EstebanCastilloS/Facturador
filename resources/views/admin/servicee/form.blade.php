<div class="box-body row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="name">Servicio</label>
            <input type="text" name="name" value="{{ old('name', $servicee->name ?? '') }}" class="form-control" placeholder="Servicio">
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="description">Descripción</label>
            <input type="text" name="description" value="{{ old('description', $servicee->description ?? '') }}" class="form-control" placeholder="Descripción">
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="price">Precio</label>
            <input type="number" name="price" value="{{ old('price', $servicee->price ?? '') }}" class="form-control" placeholder="Precio">
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


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <button class="btn btn-celeste btn-md" type="submit"><i class="fa fa-save"></i>&nbsp; Guardar</button>
            <a href="{{url('servicee')}}" class="btn btn-gris"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
        </div>
    </div>
</div>
