<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input FOrm With Validation</title>
</head>
<body>
<h1> Form Input Dengan Validasi</h1>
<form method="post" action="proses_validasi.php">
    <label for="nama">Nama : </label>
    <input type="text" id="nama" name="nama">
    <span id="nama-eror" style="color: red"></span><br>

    <br>

    <label for="email">Email : </label>
    <input  type="text" id="email" name="email">
    <span id="email-eror" style="color: red"></span><br>
    <br>

    <input type="submit" value="submit">
</form>
<script>
    $(document).ready(function (){
        $("#myForm").submit(function (event){
            var nama = $("#nama").val;
            var email = $("#email").val;
            var valid = true;

            if(nama === ""){
                $("#nama-eror").text("Nama Harus Di isi");
                valid=false;
            } else{
                $("#nama-eror").text(" ");
            }
            if(nama === ""){
                $("#email-eror").text("Email Harus Di isi");
                valid=false;
            } else{
                $("#email-eror").text(" ");
            }

            if(valid){
                event.preventDefault();
            }
        })
    })
</script>
</body>
</html>
