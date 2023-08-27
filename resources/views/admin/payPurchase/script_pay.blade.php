<script>

    // Forma de Pago
    jQuery(document).ready(function($){
        $(document).ready(function() {
            $('#user_id').select2({
                theme: "classic",
                width: "100%",
            });
        });
    });


    // Forma de Pago
    jQuery(document).ready(function($){
        $(document).ready(function() {
            $('#payment_form_id').select2({
                theme: "classic",
                width: "100%",
            });
        });
    });

    //Método de Pago
    jQuery(document).ready(function($){
        $(document).ready(function() {
            $('#payment_method_id').select2({
                theme: "classic",
                width: "100%",
            });
        });
    });

    //Banco
    jQuery(document).ready(function($){
        $(document).ready(function() {
            $('#bank_id').select2({
                theme: "classic",
                width: "100%",
            });
        });
    });

    //Tarjeta
    jQuery(document).ready(function($){
        $(document).ready(function() {
            $('#card_id').select2({
                theme: "classic",
                width: "100%",
            });
        });
    });

    totalpay=0;
    rbalance= $("#balancepass").val();
    var cont = 0;

    $(document).ready(function(){
        $("#add").click(function(){
            add();
        });
    });



    function add(){


        payment_method_id = $("#payment_method_id").val();
        payment_method = $("#payment_method_id option:selected").text();
        transaction = $("#transaction").val();
        pay = $("#pay").val();
        bank_id = $("bank_id").val();
        bank = $("#bank_id option:selected").text();
        card_id = $("card_id").val();
        card = $("#card_id option:selected").text();
        balancepass = $("#balancepass").val();





        if(payment_method_id !="" && transaction!="" &&  pay!="" && pay>0)
        {
            totalpay = parseFloat(totalpay) + parseFloat(pay);
            rbalance = parseFloat(rbalance) - parseFloat(pay);


            var row= '<tr class="selected" id="row'+cont+'"><td><button type="button" class="btn btn-danger btn-sm btndelete" onclick="deleterow('+cont+');"><i class="fas fa-trash"></i></button></td><td><input type="hidden" name="payment_method_id[]" value="'+payment_method_id+'">'+payment_method+'</td>   <td><input type="hidden" name="transaction[]" value="'+transaction+'">'+transaction+'</td><td><input type="hidden" name="pay[]"  value="'+pay+'">'+pay+'</td><td><input type="hidden" name="balance[]"  value="'+rbalance+'">'+rbalance+'</td></tr>';
            cont++;
            totalpayment();

            assesspayment();
            $('#payments').append(row);

            clear();
            //


        }else{
            //alert("Rellene todos los campos del detalle para esta compra");
            Swal.fire({
            type: 'error',
            //title: 'Oops...',
            text: 'Rellene todos los campos del detalle para este Pago',
            })
        }

        function totalpayment()
        {
            $("#totalpay_html").html("$ " + totalpay.toFixed(2));
            $("#totalpay").val(totalpay.toFixed(2));
            $("#balance").val(rbalance);
        }

        function assesspayment()
        {

            if(totalpay>0)
            {

            $("#save").show();

            } else{

            $("#save").hide();
            }
        }

        function clear()
        {
            $("#payment_method_id").val("");
            $("#payment_form_id").val("");
            $("#pay").val("");
            $("#transaction").val("");
            $("#balance").val("");
        }


    }















</script>
