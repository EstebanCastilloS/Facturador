<script>
    /*$(document).ready(function(){
            alert('estoy funcionando correctamanete empresa');
        });*/

        //Selecciona el municipio de acuerdo al departamento
    jQuery(document).ready(function($){
        $(document).ready(function() {
            $('#branch_id').select2({
                theme: "classic",
                width: "100%",
            });
        });
    });

    jQuery(document).ready(function($){
        $(document).ready(function() {
            $('#provider_id').select2({
                theme: "classic",
                width: "100%",
            });
        });
    });

    jQuery(document).ready(function($){
        $(document).ready(function() {
            $('#percentage_id').select2({
                theme: "classic",
                width: "100%",
            });
        });
    });


    var cont = 0;
    var total = 0;
    var subtotal = [];
    var total_iva = 0;
    var total_pay = 0;
    var total_desc = 0;
    var ret = 0;
    var vrte = 0;

    //form purchase
    // $("#idPro").hide();
    // $("#percentagey").hide();
    // $("#percent").hide();
    // $("#save").hide();

    // $("#generat").hide();
    // $("#startd").hide();
    // $("#resolution").hide();
    // $("#invoiceCode").hide();

    // $("#percentage").val(0);

    //TABLE
    $("#id").hide();
    $("#percentage").hide();
    $("#retent").hide();
    $("#save").hide();

    $("#percentage_id").val(0);


    //mostrar de acuerdo al retencion
    $(document).ready(function(){
        $("#rtfon").click(function(){
            $("#percentage").show();
            $("#rtferase").show();
            $("#percent").show();
        });
    });

    $(document).ready(function(){
        $("#rtfoff").click(function(){
            $("#percentage").hide();
            $("#rtferase").hide();
            $("#porcent").hide();
        });
    });

    //Seleccionar de acuerdo a porcentage
    $("#percentage_id").change(percentageVer);

    function percentageVer()
    {
        datapercentage = document.getElementById('percentage_id').value.split('_');
        $("#percentage").val(datapercentage[1]);
        percentages();
    }
    function percentages(){
        $("#percentage").hide();
    }

    //seleccionar de acuerdo al producto
    $("#product_id").change(productValue);

    //PREGUNTAR FUNCIÓN  productValue()
    function productValue(){
        dataProduct = document.getElementById('product_id').value.split('_');
        //----------
        $("#id").val(dataProduct[0]);
        $("#price_purchase").val(dataProduct[1]);
        $("#stock").val(dataProduct[3]);

    }
    $(document).ready(function(){
        $("#add").click(function(){
            add();
        });
    });

    //adicionar productos a la compra
    function add(){
        dataProduct = document.getElementById('product_id').value.split('_');
        product_id= dataProduct[0];
        product= $("#product_id option:selected").text();

        //PENDIENTE COMENTAR
        quantity= $("#quantity").val();
        price= $("#price").val();
        //------------------------

        price_purchase = $("#price_purchase").val();
        price_invoice = $("#price_invoice").val();
        stock = $("#stock").val();

        //
        datapercentage = document.getElementById('percentage_id').value.split('_');
        percentage_id = datapercentage[0];
        //percentage_id = $("#percentage_id").val();
        percentage = $("#percentage").val();


        if(product_id !="" && quantity!="" && quantity>0  && price!=""){
            subtotal[cont] = parseFloat(quantity) * parseFloat(price);
            total = total+subtotal[cont];
            ivita = subtotal[cont]*iva/100;
            total_iva = total_iva+ivita;

            var row= '<tr class="selected" id="row'+cont+'"><td><button type="button" class="btn btn-danger btn-sm btndelete" onclick="deleterow('+cont+');"><i class="fas fa-trash"></i></button></td><td><input type="hidden" name="percentage_id[]"  value="'+percentage_id+'">'+percentage_id+'</td><td><input type="hidden" name="id[]"  value="'+product_id+'">'+product_id+'</td><td><input type="hidden" name="product_id[]" value="'+product+'">'+product+'</td>   <td><input type="hidden" name="quantity[]" value="'+quantity+'">'+quantity+'</td> <td><input type="hidden" name="price[]"  value="'+price+'">'+price+'</td> <td><input type="hidden" name="iva_rate[]"  value="'+iva+'">'+iva+'</td><td>$'+subtotal[cont]+' </td></tr>';
            cont++;
            totals();
            assess();
            $('#details').append(row);
            $('#product_id option:selected').remove();
            clean();


        }else{
            //alert("Rellene todos los campos del detalle para esta compra");
            Swal.fire({
            type: 'error',
            //title: 'Oops...',
            text: 'Rellene todos los campos del detalle para esta compra',
            })
        }
    }

    function clean(){
        $("#product_id").val("");
        $("#quantity").val("");
        $("#price").val("");
    }
    function totals(){
        var rte = parseFloat($("#percentage").val());
        var vrte = total * rte / 100;
        var total_pay = total + total_iva;
        //var total_desc = total_pay - vrte;

        //TABLA

        $("#total_html").html("$ " + total.toFixed(2));
        $("#total").val(total.toFixed(2));

        $("#total_iva_html").html("$ " + total_iva.toFixed(2));
        $("#total_iva").val(total_iva.toFixed(2));

        $("#retention_html").html("$ " + vrte.toFixed(2));
        $("#retention").val(vrte.toFixed(2));

        $("#total_pay_html").html("$ " + total_pay.toFixed(2));
        $("#total_pay").val(total_pay.toFixed(2));

        //PREGUNTAR
        // $("#balance").val(total_pay.toFixed(2));
        // $("#pendient").val(total_pay.toFixed(2));
    }
    function assess(){

        if(total>0){

        $("#save").show();
        $("#percentage").hide();
        $("#rtfon").attr('disabled','disabled');
        $("#rtfoff").attr('disabled','disabled');
        } else{
            $("#save").hide();
        }
    }
    function deleterow(index){
        total = total - subtotal[index];
        total_iva = total*iva/100;
        total_pay = total + total_iva;

        $("#total_html").html("$ " + total.toFixed(2));
        $("#total").val(total.toFixed(2));

        total_pay = total+total_iva;
        $("#total_iva_html").html("$ " + total_iva.toFixed(2));
        $("#total_iva").val(total_iva.toFixed(2));

        $("#total_pay_html").html("$ " + total_pay.toFixed(2));
        $("#total_pay").val(total_pay.toFixed(2));

        $("#row" + index).remove();
        assess();
    }


</script>
