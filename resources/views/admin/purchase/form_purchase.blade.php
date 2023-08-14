<div class="box-body row">

    {{-- PROVEEDOR --}}
    <div class="col-lg-12 col-md-4 col-sm-12 col-xs-12 mt-2">
        <div class="form-group">
            <label class="form-control-label" for="provider_id">Proveedor</label>
            <select name="provider_id" class="form-control selectpicker" id="provider_id" data-live-search="true"
                required>
                <option value="0" disabled selected>Seleccionar Proveedor</option>
                @foreach ($providers as $provider)
                    <option value="{{ $provider->id }}">{{ $provider->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    {{-- FECHA DE GENERACIÓN --}}
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="generation_date">Fecha de Generación</label>
            <input type="date" name="generation_date" class="form-control"  id="generation_date"
                placeholder="Fecha de Generación">
        </div>
    </div>

    {{-- FECHA DE VENCIMIENTO --}}
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="due_date">fecha de Vencimiento</label>
            <input type="date" name="due_date" class="form-control"  id="due_date"
                placeholder="fecha de Vencimiento">
        </div>
    </div>



    {{-- DATOS DE LA TABLA PORCENTAGE --}}

    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" id="addPercentage">
        <div class="form-group row">
            <label class="form-control-label" for="percentage_id">Porcentaje</label>
            <select name="percentage_id" class="form-control selectpicker" id="percentage_id" data-live-search="true">
                <option value="0" disabled selected>Seleccionar Porcentaje.</option>
                @foreach ($percentages as $percentage)
                    <option value="{{ $percentage->id }}_{{ $percentage->value_percentage }}">
                        {{ $percentage->comments }}</option>
                @endforeach
            </select>
        </div>
    </div>

    {{-- CAMPO PORCENTAGE --}}
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="percentage">Valor del Porcentage</label>
            <input type="number" step="any" name="percentage" class="form-control" value="0" id="percentage">
        </div>
    </div>

    {{-- BOTONES DE RETENCIÓN --}}
    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 mt-3">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="Vpercentage" value="1" id="rtfon">
            <label class="form-check-label" for="retefte">
                Retenciones
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="Vpercentage" value="0" id="rtfoff" checked>
            <label class="form-check-label" for="retefte">
                No Retenciones
            </label>
        </div>
    </div>

    <div class="clearfix"></div>
    {{-- PRODUCTOS --}}
    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 mt-3">
        <div class="form-group row">
            <label class="form-control-label" for="product_id">Producto</label>
            <select name="product_id" class="form-control selectpicker" id="product_id" data-live-search="true">
                <option value="0" disabled selected>Seleccionar el Producto</option>
                @foreach ($products as $product)
                    <option
                        value="{{ $product->id }}_{{ $product->stock }}_{{ $product->price_purchase }}_{{ $product->category->iva }}">
                        {{ $product->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    {{-- CANTIDAD  --}}
    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 mt-3">
        <div class="form-group">
            <label class="form-control-label" for="quantity">Cantidad</label>
            <input type="number" id="quantity" name="quantity" value=""
                class="form-control" placeholder="Cantidad" pattern="[0-9]{0,15}">
        </div>
    </div>

    {{-- PRECIO --}}
    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 mt-3">
        <div class="form-group">
            <label class="form-control-label" for="price">Precio</label>
            <input type="number" id="price" name="price" class="form-control"
                placeholder="Precio">
        </div>
    </div>

    {{-- IVA --}}
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mt-3">
        <div class="form-group">
            <label for="iva">Iva</label>
            <input type="number" step="any" name="iva" class="form-control" value="0" id="iva"
                placeholder="Iva">
        </div>
    </div>

    {{-- BOTON ADD --}}

    <div class="col-lg-1 col-md-3 col-sm-2 col-xs-12 mt-3">
        <div class="form-group">
            <label class="form-control-label">Add</label><br>
            <button class="btn btn-grisb" type="button" id="add" data-toggle="tooltip" data-placement="top" title="Add" style="color: #31511f"><i class="fas fa-check"></i>&nbsp; </button>
        </div>
    </div>

    {{-- BOTON CANCELAR --}}

    <div class="col-lg-1 col-md-3 col-sm-2 col-xs-12 mt-3">
        <div class="form-group">
            <label class="form-control-label" >Canc</label><br>
            <a href="{{url('purchase')}}" class="btn btn-grisb" data-toggle="tooltip" data-placement="top" title="Cancelar" style="color: #9c220d"><i class="fa fa-window-close"></i>&nbsp; </a>
        </div>
    </div>

    {{-- TABLA --}}

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table id="details" class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <tr>
                        <th>Eliminar</th>
                        <th>%</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>precio ($)</th>
                        <th>iva (%)</th>
                        <th>SubTotal ($)</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th colspan="6" class="footder">TOTAL:</th>
                        <td class="footder"><strong id="total_html">$ 0.00</strong>
                            <input type="hidden" name="total" id="total">
                        </td>
                    </tr>

                    <tr>
                        <th colspan="6" class="footder">TOTAL IVA:</th>
                        <td class="footder"><strong id="total_iva_html">$ 0.00</strong>
                            <input type="hidden" name="total_iva" id="total_iva">
                        </td>
                    </tr>

                    <tr id="rtferase">
                        <th colspan="6" class="footder">RETENCION:</th>
                        <td class="footder"><strong id="retention_html">$ 0.00</strong>
                            <input type="hidden" name="retention" id="retention">
                        </td>
                    </tr>

                    <tr>
                        <th colspan="6" class="footder">TOTAL PAGO:</th>
                        <td class="footder"><strong id="total_pay_html">$ 0.00</strong>
                            <input type="hidden" name="total_pay" id="total_pay">
                        </td>
                    </tr>


                </tfoot>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

    {{-- BOTONES DE GUARDAR --}}

    <div class="modal-footer" id="save">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button class="btn btn-celeste" type="submit"><i class="fa fa-save"></i>&nbsp;
                    Registrar</button>
            </div>
        </div>
    </div>




</div>
