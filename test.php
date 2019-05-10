<?php
/**
 * Created by PhpStorm.
 * User: Jaikishore
 * Date: 04-Mar-19
 * Time: 11:36 AM
 */
session_start();
echo $_SESSION['userName'];
?>
<script
        src="http://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
<form>

<input type="submit"  id="Demo" name="logout">
<h3>Hello</h3>
</form>
<script>
    $("#Demo").click(function (e) {
        e.preventDefault();
        console.log("clickeds");
        $.ajax({
            url : "http://localhost/project/web/dashbord/jsons.php",
            type : "get",
            data : {accnum :1},
            timeout : 5000,
            success : function () {
                console.log('Req Successful');
            },
            error : function (xhr,status,errorThrown) {
                console.log("Req Failure");
                console.log(errorThrown);
               }
        });
    });
</script>