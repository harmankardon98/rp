<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>A Contact Form Using Phpmailer - reusable form</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" >

        <link rel="stylesheet" href="css/form.css" >

     </head>
    <body background="images/a.jpg" >
        <div class="container">
            <div class="form-container">
                <h1>
                    Form Pemesanan SOS!
                </h1>
                <form method="post" id="reused_form" action="prosesp.php" >

                    <label for="name">Nama:</label>
                    <input id="name" type="text" name="nama" placeholder="Masukkan Nama" required maxlength="50">


                    </select>


                    <label for="hp">No Hp:</label>
                    <input id="hp" type="text" name="hp" required maxlength="12" placeholder="Ex : +628155919999">
                    <input type="hidden" id="harga" name="harga">

                    <label for="alamat">Alamat:</label>
                    <textarea id="Alamat" name="alamat" rows="10" maxlength="6000" required></textarea>




</select>




                    <button class="button-primary" type="submit" ></button>

                </form>

            </div>
        </div>
        <script type="text/javascript">
   function price() {
    var tes = document.getElementById("paket").value;
        document.getElementById("harga1").value=tes;
        document.getElementById("harga").value=tes;
}
function tot(){
    var a =document.getElementById("harga1").value;
    var b = document.getElementById("lama").value;
    var c = a*b;
    document.getElementById("total1").value=c;
    document.getElementById("total").value=c;

}
</script>
    </body>
</html>
