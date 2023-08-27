<div class="box-body row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="pay_pp">Pago de la compra </label>
            <input type="number" name="pay_pp" value="{{ old('pay_pp', $payPurchase->pay_pp ?? '') }}" class="form-control" placeholder="Pago de la Compra">
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="method_payment">Balance de Factura</label>
            <input type="text" name="method_payment" value="{{ old('method_payment', $payPurchase->method_payment ?? '') }}" class="form-control" placeholder="Balance de Factura">
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <button class="btn btn-celeste btn-md" type="submit"><i class="fa fa-save"></i>&nbsp; Guardar</button>
            <a href="{{url('payPurchase')}}" class="btn btn-gris"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
        </div>
    </div>
</div>
