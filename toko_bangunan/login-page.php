<?php
// koneksi ke database
include "service/config.php";


?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Daftar User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/main.css">
</head>
<!-- font impor -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Tektur:wght@400..900&display=swap" rel="stylesheet">
<!-- font impor -->

<body class="bg-light">

    <div class="container mt-5">
        <h2 class="text-center text-light">Absen cOk</h2>
        <div class="card p-4 shadow mt-4">
            <form id="form-daftar">
                <div class="mb-3">
                    <label class="text-light">Nama:</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="text-light">Kelas:</label>
                    <input type="text" name="kelas" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-outline-secondary text-light">Daftar & Buat QR</button>
            </form>
            <div id="hasil" class="mt-4"></div>
        </div>
    </div>

    <script>
        $('#form-daftar').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: 'handlerData/proces.php',
                type: 'POST',
                data: $(this).serialize(),
                success: function(res) {
                    $('#hasil').html(res);
                    $('#form-daftar')[0].reset();
                }
            });
        });
    </script>
</body>

</html>