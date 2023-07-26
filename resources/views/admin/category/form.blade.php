<div class="box-body row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="name">Categoría</label>
            <input type="text" name="name" value="{{ old('name', $category->name ?? '') }}" class="form-control" placeholder="Categoría">
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="description">Descripción</label>
            <input type="text" name="description" value="{{ old('description', $category->description ?? '') }}" class="form-control" placeholder="Descripción">
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="utility">Utilidad</label>
            <input type="number" name="utility" value="{{ old('utility', $category->utility ?? '') }}" class="form-control" placeholder="Utilidad">
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="iva">Iva</label>
            <input type="number" name="iva" value="{{ old('iva', $category->iva ?? '') }}" class="form-control" placeholder="Iva">
        </div>
    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <button class="btn btn-celeste btn-md" type="submit"><i class="fa fa-save"></i>&nbsp; Guardar</button>
            <a href="{{url('category')}}" class="btn btn-gris"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
        </div>
    </div>
</div>
