<div class="container mt-3 p-5 shadow-lg">
    <h2>Form Pemesanan</h2>
    <form id="bookingForm" method="post" action="<?= BASEURL; ?>/order/edit">
        <div class="mb-3 mt-3">
            <input type="hidden" name="no" value="<?= $data['orderList']['no']; ?>">
            <label for="email">Nama Pemesan:</label>
            <input type="text" class="form-control" id="nama" placeholder="" name="nama" value="<?= $data['orderList']['nama']; ?>">
        </div>
        <div class="mb-3">
            <label for="telp">Nomor HP/Telp:</label>
            <input type="tel" class="form-control" id="hp" placeholder="" value="<?= $data['orderList']['hp']; ?>" name="hp">
        </div>
        <div class="mb-3">
            <label for="tamu">Jumlah tamu:</label>
            <input type="tamu" class="form-control" id="jmh_peserta" value="<?= $data['orderList']['jmh_peserta']; ?>" placeholder="" name="jmh_peserta">
        </div>
        <div class="mb-3">
            <label for="check-in">Tanggal Check-in:</label>
            <input type="date" class="form-control" id="tanggal" placeholder="" name="tanggal" value="<?= $data['orderList']['tanggal']; ?>">
        </div>
        <div class="mb-3">
            <label for="hari">Jumlah hari:</label>
            <input type="hari" class="form-control" id="jmh_hari" value="<?= $data['orderList']['jmh_hari']; ?>" placeholder="" name="jmh_hari">
        </div>
        <div class="mb-3">
            <label for="package">Pilih Package:</label>
            <select class="form-select" id="nama_package" name="nama_package"">

            <option value=" Standar Package" <?= $data['orderList']['nama_package'] == 'Standar Package' ? 'selected' : '' ?>>Standar Package</option>
                <option value="Deluxe Package" <?= $data['orderList']['nama_package'] == 'Deluxe Package' ? 'selected' : '' ?>>Deluxe Package</option>
                <option value="Premium Package" <?= $data['orderList']['nama_package'] == 'Premium Package' ? 'selected' : '' ?>>Premium Package</option>
                <option value="Executive Package" <?= $data['orderList']['nama_package'] == 'Executive Package' ? 'selected' : '' ?>>Executive Package</option>
            </select>
        </div>

        <label for="price">Harga Package per Tamu:</label>
        <div class="input-group mb-3">
            <span class="input-group-text">Rp</span>
            <input type="number" value="<?= $data['orderList']['harga_package']; ?>" class="form-control" id="harga_package" min="0" step="0.01" name="harga_package" readonly>
        </div>

        <label for="total">Total Pesanan:</label>
        <div class="input-group mb-3">
            <span class="input-group-text">Rp</span>
            <input type="number" value="<?= $data['orderList']['total_harga']; ?>" value="0" class="form-control" id="total_harga" min="0" step="0.01" name="total_harga" readonly>
        </div>

        <button type="submit" class="btn btn-primary" disabled id=submitButton>Edit</button>
    </form>
</div>

<script>
    // Harga package
    const packagePrices = {
        'Standar Package': 1000000,
        'Deluxe Package': 2000000,
        'Premium Package': 3000000,
        'Executive Package': 5000000
    };

    // Function untuk menghitung total harga
    function calculateTotal() {
        const jmhTamu = document.getElementById('jmh_peserta').value;
        const jmhHari = document.getElementById('jmh_hari').value;
        const packageSelected = document.getElementById('nama_package').value;

        // Memastikan semua field yang diperlukan sudah diisi
        if (jmhTamu && jmhHari && packageSelected) {
            const hargaPackage = packagePrices[packageSelected];
            const totalHarga = hargaPackage * jmhTamu * jmhHari;

            // Update harga package dan total harga
            document.getElementById('harga_package').value = hargaPackage;
            document.getElementById('total_harga').value = totalHarga;

            // Enable submit button jika semua field sudah terisi
            document.getElementById('submitButton').disabled = false;
        } else {
            // Disable submit button jika ada field yang belum terisi
            document.getElementById('submitButton').disabled = true;
        }
    }

    // Event listeners untuk menghitung ulang saat field diubah
    document.getElementById('jmh_peserta').addEventListener('input', calculateTotal);
    document.getElementById('jmh_hari').addEventListener('input', calculateTotal);
    document.getElementById('nama_package').addEventListener('change', calculateTotal);

    // Disable submit button saat page load
    window.onload = function() {
        calculateTotal(); // Perbarui total harga ketika page load dengan data yang sudah ada
    };
</script>