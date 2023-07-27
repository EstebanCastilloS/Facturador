<div class="box-body row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="name">Tipo de Identificación </label>
            <input type="text" name="name" value="{{ old('name', $identificationType->name ?? '') }}" class="form-control" placeholder="Tipo de Identificación">
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="code">Código</label>
            <input type="text" name="code" value="{{ old('code', $identificationType->code ?? '') }}" class="form-control" placeholder="Código">
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <button class="btn btn-celeste btn-md" type="submit"><i class="fa fa-save"></i>&nbsp; Guardar</button>
            <a href="{{url('identification_type')}}" class="btn btn-gris"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
        </div>
    </div>
</div>
