<?php
include 'koneksi.php';
$no = 1;
$query = "SELECT * FROM anggota ORDER BY id ASC";
$sql = $db1->prepare($query);
$sql->execute();
$res1 = $sql->get_result();
?>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Alamat</td>
            <td>No Telp</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $res1->fetch_assoc()) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= ($row['jenis_kelamin'] == 'L') ? 'Laki-Laki' : 'Perempuan'; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td><?= $row['no_telp']; ?></td>
                <td>
                    <button id="<?= $row['id']; ?>" class="btn btn-success btn-sm edit_data">Edit</button>
                    <button id="<?= $row['id']; ?>" class="btn btn-danger btn-sm hapus_data">Hapus</button>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
