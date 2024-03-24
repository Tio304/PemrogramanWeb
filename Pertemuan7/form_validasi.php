<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input Form With Validation</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<h1>Form Input Dengan Validasi</h1>
<form method="post" action="proses_validasi.php" id="myForm">
    <label for="nama">Nama : </label>
    <input type="text" id="nama" name="nama">
    <span id="nama-error" style="color: red"></span><br><br>

    <label for="email">Email : </label>
    <input type="text" id="email" name="email">
    <span id="email-error" style="color: red"></span><br><br>

    <label for="password">Password : </label>
    <input type="text" id="password" name="password">
    <span id="password-error" style="color: red"></span><br><br>

    <input type="submit" value="submit">
</form>
<script>
    $(document).ready(function (){
        $("form").submit(function (event){
            var nama = $("#nama").val();
            var email = $("#email").val();
            var password = $("#password").val();
            var valid = true;

            if(nama === ""){
                $("#nama-error").text("Nama Harus Di isi");
                valid=false;
            } else{
                $("#nama-error").text("");
            }
            if(email === ""){
                $("#email-error").text("Email Harus Di isi");
                valid=false;
            } else{
                $("#email-error").text("");
            }

            if(password === ""){
                $("#password-error").text("Password Harus Di isi");
                valid=false;
            } else{
                $("#password-error").text("");
            }

            if(!valid){
                event.preventDefault();
            }
        })
    })
</script>
</body>
</html>
