<div class="container mt-3 p-5 shadow-lg">


    <?php Flasher::flash() ?>
    <h2>Form Pemesanan</h2>
    <form id="bookingForm" method="post" action="<?= BASEURL; ?>/order/tambah">
        <div class="mb-3 mt-3">
            <label for="email">Nama Pemesan:</label>
            <input type="text" class="form-control" id="nama" placeholder="" name="nama">
        </div>
        <div class="mb-3">
            <label for="hp">Nomor HP/Telp:</label>
            <input type="tel" class="form-control" id="hp" placeholder="" name="hp">
        </div>
        <div class="mb-3">
            <label for="jmh_peserta">Jumlah tamu:</label>
            <input type="number" class="form-control" id="jmh_peserta" placeholder="" name="jmh_peserta">
        </div>
        <div class="mb-3">
            <label for="tanggal">Tanggal Check-in:</label>
            <input type="date" class="form-control" id="tanggal" placeholder="" name="tanggal">
        </div>
        <div class="mb-3">
            <label for="jmh_hari">Jumlah hari:</label>
            <input type="number" class="form-control" id="jmh_hari" placeholder="" name="jmh_hari">
        </div>
        <div class="mb-3">
            <label for="nama_package">Pilih Package:</label>
            <select class="form-select" id="package_list" name="nama_package">
                <option value="" disabled selected>Pilih Paket</option>
                <option>Standar Package</option>
                <option>Deluxe Package</option>
                <option>Premium Package</option>
                <option>Executive Package </option>
            </select>
        </div>

        <label for="harga_package">Harga Package per Tamu:</label>
        <div class="input-group mb-3">
            <span class="input-group-text">Rp</span>
            <input type="number" class="form-control" id="harga_package" min="0" step="0.01" name="harga_package" readonly>
        </div>

        <label for="total_harga">Total Pesanan:</label>
        <div class="input-group mb-3">
            <span class="input-group-text">Rp</span>
            <input type="number" value="0" class="form-control" id="total_harga" min="0" step="0.01" name="total_harga" readonly>
        </div>

        <button type="submit" class="btn btn-primary" disabled id=submitButton>Submit</button>
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
        const packageSelected = document.getElementById('package_list').value;

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
    document.getElementById('package_list').addEventListener('change', calculateTotal);

    // Disable submit button saat page load
    window.onload = function() {
        document.getElementById('submitButton').disabled = true;
    };
</script>