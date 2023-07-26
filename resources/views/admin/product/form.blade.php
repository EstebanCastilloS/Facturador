<div class="box-body row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <label for="category_id">Categoria</label>
        <div class="select">
            <select id="category_id" name="category_id" class="form-control selectpicker" data-live-search="true" required>
                <option {{ ($product->category_id ?? '') == '' ? "selected" : "" }} disabled>Seleccionar Categoría</option>
                @foreach($categories as $category)
                    @if($category->id == ($product->category_id ?? ''))
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="name">Nombre Producto</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $product->name ?? '') }}" placeholder="Nombre de Producto">
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="price_purchase">Precio de  Compra</label>
            <input type="number" name="price_purchase" class="form-control" value="{{ old('price_purchase', $product->price_purchase ?? '') }}" placeholder="Precio de compra">
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="price_invoice">Precio de Venta</label>
            <input type="number" name="price_invoice" class="form-control" value="{{ old('price_invoice', $product->price_invoice ?? '') }}" placeholder="Precio de Venta">
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
        <a href="{{url('product')}}" class="btn btn-gris btn-md"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
    </div>
</div>
