<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas Segitiga</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center mb-4">Hitung Luas Segitiga</h1>
        <div class="card p-4 shadow-sm">
            <form method="post" action="<?php echo base_url('segitiga/hitung');?>">
                <div class="mb-3">
                    <label for="alas" class="form-label">Alas Segitiga</label>
                    <input type="number" name="alas" id="alas" class="form-control" placeholder="Masukkan alas segitiga" required>
                </div>
                <div class="mb-3">
                    <label for="tinggi" class="form-label">Tinggi Segitiga</label>
                    <input type="number" name="tinggi" id="tinggi" class="form-control" placeholder="Masukkan tinggi segitiga" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Hitung</button>
            </form>
            <?php if(isset($luas_segitiga)): ?>
                <div class="alert alert-success mt-4">
                    Luas segitiga adalah: <?php echo $luas_segitiga; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="text-center mt-4">
            <a href="<?php echo base_url('mahasiswa');?>" class="btn btn-secondary">Daftar Mahasiswa</a>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
