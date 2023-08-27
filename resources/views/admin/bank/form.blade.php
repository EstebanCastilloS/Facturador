<div class="box-body row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="pay">Nombre del Banco </label>
            <input type="text" name="name" value="{{ old('name', $bank->name ?? '') }}" class="form-control" placeholder="Nombre del Banco">
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <button class="btn btn-celeste btn-md" type="submit"><i class="fa fa-save"></i>&nbsp; Guardar</button>
            <a href="{{url('bank')}}" class="btn btn-gris"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
        </div>
    </div>
</div>
