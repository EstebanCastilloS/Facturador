<div class="box-body row">

   {{-- FORMA DE PAGO  --}}

    {{-- MÉTODO DE PAGO --}}
    <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12" id="mpay">
        <div class="form-group">
            <label for="payment_method_id">Med/pago</label>
            <select name="payment_method_id" class="form-control selectpicker" id="payment_method_id"
                data-live-search="true">
                <option value="" disabled selected>Seleccionar...</option>
                @foreach($paymentMethods as $paymentMethod)
                <option value="{{ $paymentMethod->id }}">{{ $paymentMethod->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    {{-- NUMERO FACTURA --}}
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="purchase_id">Numero de la Factura</label>
            <input type="number" name="purchase_id" id="purchase_id" value="{{ $purchases->id }}" class="form-control"  pattern="[0-9]{0,15}" readonly>
        </div>
    </div>

    {{-- @dd($purchases->provider->name); --}}

    {{-- PROVEEDOR --}}
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" >
        <div class="form-group">
            <label for="provider">Proveedor</label>
            <input type="text" name="provider" id="provider" value="{{ $purchases->provider->name }}" class="form-control" disabled >
        </div>
    </div>

    {{-- SALDO  ARREGLAR Y ENLAZAR CAMPO--}}
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="returnedBalancepass">
        <div class="form-group">
            <label class="form-control-label" for="balancepass">Valor Total a Pagar</label>
            <input type="number" id="balancepass" name="balancepass" value="{{ $purchases->balance }}"
                class="form-control gris" disabled pattern="[0-9]{0,15}">
        </div>
    </div>

    {{-- TRANSACCIÓN --}}
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="returnedtransaction">
        <div class="form-group">
            <label class="form-control-label" for="transaction">Transacción</label>
            <input type="text" id="transaction" name="transaction" value=""
                class="form-control gris" >
        </div>
    </div>



    {{-- PAGO --}}
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="returnedPay">
        <div class="form-group">
            <label class="form-control-label" for="pay">Pago</label>
            <input type="number" id="pay" name="pay" value="0"
                class="form-control gris" >
        </div>
    </div>



    {{-- BANCOS --}}
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="banks">
        <div class="form-group">
            <label for="bank_id">Bancos</label>
            <select name="bank_id" class="form-control selectpicker" id="bank_id"
                data-live-search="true">
                <option value="" disabled selected>Seleccionar...</option>
                @foreach($banks as $bank)
                <option value="{{ $bank->id }}">{{ $bank->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    {{-- TARJETAS --}}
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="cards">
        <div class="form-group">
            <label for="card_id">Tipo Tarjeta</label>
            <select name="card_id" class="form-control selectpicker" id="card_id"
                data-live-search="true">
                <option value="" disabled selected>seleccionar...</option>
                @foreach($cards as $card)
                <option value="{{ $card->id }}">{{ $card->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    {{-- BOTON ADD --}}

    <div class="col-lg-1 col-md-3 col-sm-2 col-xs-12">
        <div class="form-group">
            <label class="form-control-label">Add</label><br>
            <button class="btn btn-grisb" type="button" id="add" data-toggle="tooltip" data-placement="top" title="Add" style="color: #31511f"><i class="fas fa-check"></i>&nbsp; </button>
        </div>
    </div>

    {{-- CANCELAR --}}
    <div class="col-lg-1 col-md-3 col-sm-2 col-xs-12">
        <div class="form-group">
            <label class="form-control-label" >Cancelar</label><br>
            <a href="{{url('payPurchase')}}" class="btn btn-grisb" data-toggle="tooltip" data-placement="top" title="Cancelar"><i class="fa fa-window-close" style="color: #9c220d"></i>&nbsp; </a>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table id="payments" class="table table-striped table-bordered table-condensed table-hover">
                <thead class="bg-info">
                    <tr>
                        <th>Eliminar</th>
                        <th>Método de Pago</th>
                        <th>Transacción</th>
                        <th>Pago</th>
                        <th>Saldo</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th colspan="5">
                            <p align="right">TOTAL:</p>
                        </th>
                        <th>
                            <p align="right"><span id="totalpay_html">$ 0.00</span>
                                <input type="hidden" name="totalpay" id="totalpay"> </p>
                        </th>
                    </tr>
                </tfoot>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>

    {{-- <div class="modal-footer" id="save">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button onclick="imprimir();" class="btn btn-celeste" type="submit"><i class="fa fa-save"></i>
                    Registrar</button>
            </div>
        </div>
    </div> --}}



    <div class="modal-footer" id="save">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button class="btn btn-celeste" type="submit"><i class="fa fa-save" style="color: #31511f"></i>&nbsp;
                    Registrar</button>
            </div>
        </div>
    </div>
</div>
