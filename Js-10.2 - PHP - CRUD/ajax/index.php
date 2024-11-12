<?php include "auth.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">
    <title>CRUD Dengan Ajax</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php" style="color: #fff;">CRUD Dengan Ajax</a>
    </nav>
    <div class="container">
        <h2 align="center" style="margin: 30px;">Data Anggota</h2>
        <form method="post" class="form-data" id="form-data">
            <div class="row">
                <div class="col-sm-9">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="hidden" name="id" id="id">
                        <input type="text" name="nama" id="nama" class="form-control" required>
                        <p class="text-danger" id="err_nama"></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Jenis Kelamin</label><br>
                        <input type="radio" name="jenis_kelamin" id="jenkel1" value="L"> Laki-laki
                        <input type="radio" name="jenis_kelamin" id="jenkel2" value="P"> Perempuan
                        <p class="text-danger" id="err_jenis_kelamin"></p>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" required></textarea>
                <p class="text-danger" id="err_alamat"></p>
            </div>
            <div class="form-group">
                <label>No Telepon</label>
                <input type="number" name="no_telp" id="no_telp" class="form-control" required>
                <p class="text-danger" id="err_no_telp"></p>
            </div>
            <div class="form-group">
                <button type="button" name="simpan" id="simpan" class="btn btn-primary">
                    <i class="fa fa-save"></i> Simpan
                </button>
            </div>
        </form>
        <div class="data"></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.data').load("data.php");
            $('#simpan').click(function () {
                var data = $('.form-data').serialize();
                $.ajax({
                    type: 'POST',
                    url: 'form_action.php',
                    data: data,
                    success: function () {
                        $('.data').load("data.php");
                        $('#form-data').trigger("reset");
                    },
                    error: function (response) {
                        console.log(response.responseText);
                    }
                });
            });
        });




        $(document).on('click', '.edit_data', function () {
    var id = $(this).attr('id');
    $.ajax({
        type: 'POST',
        url: 'get_data.php',
        data: { id: id },
        dataType: 'json',
        success: function (response) {
            if (!response.error) {
                $('#id').val(response.id);
                $('#nama').val(response.nama);
                $('#alamat').val(response.alamat);
                $('#no_telp').val(response.no_telp);
                if (response.jenis_kelamin === 'L') {
                    $('#jenkel1').prop('checked', true);
                } else {
                    $('#jenkel2').prop('checked', true);
                }
            } else {
                alert(response.error);
            }
        },
        error: function (response) {
            console.log(response.responseText);
        }
    });
});



$(document).on('click', '.hapus_data', function () {
    var id = $(this).attr('id');
    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
        $.ajax({
            type: 'POST',
            url: 'hapus_data.php',
            data: { id: id },
            success: function () {
                $('.data').load("data.php");
            },
            error: function (response) {
                console.log(response.responseText);
            }
        });
    }
});

    </script>
</body>
</html>
