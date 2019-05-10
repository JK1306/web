<?php
/**
 * Created by PhpStorm.
 * User: Jaikishore
 * Date: 14-Mar-19
 * Time: 6:00 PM
 */
session_start();
?>
<script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<button id="Demo">Submit</button>
<input type="text" value="hi" id="demo">
<script>
    $("document").ready(function (e) {
        /*e.preventDefault();*/
        let de = $("#demo").val();
        console.log(de);
        console.log("clickeds");
        $.ajax({
            url : "\submit.php",
            type : "get",
            data : {credit_accnum : <?php echo $_SESSION['accountNumber'];?>},
            dataType : "json",
            success : function (data,status) {
                console.log("Data length1 "+ data.length);
                $.each(data, function (index,acc) {
                    console.log(acc["s_no"]);
                })
            },
            error : function (xhr,status,errorThrown) {
                console.log("Req Failure1");
                console.log(errorThrown);
            }
        });
        $.ajax({
            url : "\submit.php",
            type : "get",
            data : {debit_accnum : <?php echo $_SESSION['accountNumber'];?>},
            dataType : "json",
            success : function (data) {
                console.log("Data length "+ data.length);
                if (data.length != 1) {
                $.each(data,function (index,element){
                    console.log(element["s_no"]);
       /*             $("#debit").append("<tr><td class=\"font-weight-medium\">"+element['transaction_id']+"</td><td>"+element['depositer_name']+"</td><td>"+element['deposit_account_no']+"</td><td>"+element['transaction_desc']+"</td><td>&#x20b9; "+element['deposit_amount']+"</td><td>"+element['transaction_date']+"</td></tr>");*/
                })}
            },
            error : function (xmlreq,status,error) {
                console.log("Error in sending Data2");
                console.log(error);
            }
        });
    });
/*        $.ajax({
            url : "http://localhost/project/web/dashbord/jsons.php",
            type : "get",
            data : {accnum :1},
            /!*   timeout : 5000,*!/
            success : function (data,status) {
                console.log('Req Successful');
                console.log(data);
                console.log(status);
            },
            error : function (xhr,status,errorThrown) {
                console.log("Req Failure");
                console.log(errorThrown);
            }
        });*/
</script>
