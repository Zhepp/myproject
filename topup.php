<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top-up Mobile Legends</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Top-up Mobile Legends Septian</h1>
        <form action="process_topup.php" method="post">
            <div class="mb-3">
                <label for="id_ml" class="form-label">ID Mobile Legends (Minimal 9 Angka)</label>
                <input type="text" class="form-control" id="id_ml" name="id_ml" required>
            </div>
            <div class="mb-3">
                <label for="server" class="form-label">Server (4-5 Angka)</label>
                <input type="text" class="form-control" id="server" name="server" required>
            </div>
            <div class="mb-3">
                <label for="nominal" class="form-label">Pilih Nominal Top-up</label>
                <select class="form-select" id="nominal" name="nominal" required>
                    <option value="29000">1x Weekly Diamond Pass - Rp 29.000</option>
                    <option value="3000">11 Diamonds - Rp 3.000</option>
                    <option value="15000">50 Diamonds - Rp 15.000</option>
                    <option value="45000">150 Diamonds - Rp 45.000</option>
                    <option value="75000">250 Diamonds - Rp 75.000</option>
                    <option value="149000">500 Diamonds - Rp 149.000</option>
                    <option value="299000">1000 Diamonds - Rp 299.000</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="metode_pembayaran" class="form-label">Pilih Metode Pembayaran</label>
                <select class="form-select" id="metode_pembayaran" name="metode_pembayaran" required>
                    <option value="OVO">OVO</option>
                    <option value="GoPay">GoPay</option>
                    <option value="Dana">Dana</option>
                    <option value="Shopeepay">Shopeepay</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nomor_pembayaran" class="form-label">Masukkan Nomor Pembayaran (Minimal 11-12 Angka)</label>
                <input type="text" class="form-control" id="nomor_pembayaran" name="nomor_pembayaran" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
