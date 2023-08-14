<div class="box-body row">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="value_percentage">Cantidad de Porcentaje</label>
            <input type="number" step="any" name="value_percentage" class="form-control" value="{{ old('value_percentage', $percentage->value_percentage ?? '') }}" placeholder="Cantidad Porcentage">
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="comments">Detalle del Porcentage</label>
            <input type="text" name="comments" class="form-control" value="{{ old('comments', $percentage->comments ?? '') }}" placeholder="Detalle del Porcentage">
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-celeste btn-md" type="submit"><i class="fa fa-save" style="color: #31511f"></i>&nbsp; Guardar</button>
        <a href="{{url('percentage')}}" class="btn btn-gris btn-md"><i class="fa fa-window-close" style="color: #9c220d"></i>&nbsp; Cancelar</a>
    </div>


</div>
