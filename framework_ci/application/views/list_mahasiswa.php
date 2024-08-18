<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Daftar Mahasiswa</h1>
        <div class="d-flex justify-content-between mb-3">
            <a href="<?php echo base_url('mahasiswa/add');?>" class="btn btn-primary">Tambah Mahasiswa</a>
            <a href="<?php echo base_url('segitiga');?>" class="btn btn-secondary">Hitung Luas Segitiga</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Agama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($mahasiswa as $key=>$data): ?>
                        <tr>
                            <td><?php echo $data["nik"]; ?></td>
                            <td><?php echo $data["nama"]; ?></td>
                            <td><?php echo $data["tempat_lahir"]; ?></td>
                            <td><?php echo $data["tanggal_lahir"]; ?></td>
                            <td><?php echo $data["jenis_kelamin"]; ?></td>
                            <td><?php echo $data["alamat"]; ?></td>
                            <td><?php echo $data["agama"]; ?></td>
                            <td>
                                <a href="<?php echo base_url('mahasiswa/delete/'.$data['id']); ?>" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
