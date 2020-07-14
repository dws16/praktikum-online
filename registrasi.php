<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>

<style>
    body {
        background-image: url(img/background.png);
        margin-top: 125px;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .container {
        background-color: white;
        padding: 20px;
        width: 30%;
        border-top-left-radius: 25px;
        border-top-right-radius: 25px;
        border-bottom-left-radius: 25px;
        border-bottom-right-radius: 25px;
        box-shadow: 4px 4px 5px 3px rgba(0, 0, 0, 0.2);
    }

    h4 {
        text-align: center;
        color: #6a6a6a;
    }
</style>

<body>
    <div class="container">
        <!-- Logo -->


        <!-- Judul -->
        <h4>Formulir Pendaftaran Praktikum</h4>

        <!-- Form -->
        <form>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Email" style="margin-top: 35px; background-color: white; border-top: 0px; border-bottom: 1px solid #6a6a6a; border-left: 1px solid #6a6a6a; border-right: 0px;">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Nama" style="margin-top: 25px; background-color: white; border-top: 0px; border-bottom: 1px solid #6a6a6a; border-left: 1px solid #6a6a6a; border-right: 0px;">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="NRP" style="margin-top: 25px; background-color: white; border-top: 0px; border-bottom: 1px solid #6a6a6a; border-left: 1px solid #6a6a6a; border-right: 0px;">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" placeholder="Password" style="margin-top: 25px; background-color: white; border-top: 0px; border-bottom: 1px solid #6a6a6a; border-left: 1px solid #6a6a6a; border-right: 0px;">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" placeholder="Konfirmasi Password" style="margin-top: 25px; background-color: white; border-top: 0px; border-bottom: 1px solid #6a6a6a; border-left: 1px solid #6a6a6a; border-right: 0px;">
            </div>
            <button type="submit" class="btn" style="display: block; margin: auto; background-color: #6a6a6a; color: white; border-top-left-radius: 25px;
            border-top-right-radius: 25px;
            border-bottom-left-radius: 25px;
            border-bottom-right-radius: 25px;">Daftar</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>