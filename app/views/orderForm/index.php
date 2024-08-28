<div class="container mt-3 p-5 shadow-lg">
    <h2>Form Pemesanan</h2>
    <form id="bookingForm" action="/action_page.php">
        <div class="mb-3 mt-3">
            <label for="email">Nama Pemesan:</label>
            <input type="text" class="form-control" id="name" placeholder="" name="name">
        </div>
        <div class="mb-3">
            <label for="telp">Nomor HP/Telp:</label>
            <input type="tel" class="form-control" id="telp" placeholder="" name="telp">
        </div>
        <div class="mb-3">
            <label for="tamu">Jumlah tamu:</label>
            <input type="tamu" class="form-control" id="tamu" placeholder="" name="tamu">
        </div>
        <div class="mb-3">
            <label for="check-in">Tanggal Check-in:</label>
            <input type="date" class="form-control" id="check-in" placeholder="" name="check-in">
        </div>
        <div class="mb-3">
            <label for="check-out">Tanggal Check-out:</label>
            <input type="date" class="form-control" id="check-out" placeholder="" name="check-out">
        </div>
        <div class="mb-3">
            <label for="package">Pilih Package:</label>
            <select class="form-select" id="package" name="package">
                <option value="" disabled selected>Pilih Paket</option>
                <option>Standar Package</option>
                <option>Deluxe Package</option>
                <option>Premium Package</option>
                <option>Executive Package </option>
            </select>
        </div>

        <label for="price">Harga Package per Tamu:</label>
        <div class="input-group mb-3">
            <span class="input-group-text">Rp</span>
            <input type="number" class="form-control" id="price" min="0" step="0.01" name="price" readonly>
        </div>

        <label for="total">Total Pesanan:</label>
        <div class="input-group mb-3">
            <span class="input-group-text">Rp</span>
            <input type="number" value="0" class="form-control" id="total" min="0" step="0.01" name="total" readonly>
        </div>

        <button type="submit" class="btn btn-primary" disabled id=submitButton>Submit</button>
    </form>
</div>

<script>
    const packagePrices = {
        'standar': 1000000,
        'deluxe': 2000000,
        'premium': 3000000,
        'executive': 5000000
    };

    const packageSelect = document.getElementById('package');
    const tamuInput = document.getElementById('tamu');
    const priceInput = document.getElementById('price');
    const totalInput = document.getElementById('total');
    const submitButton = document.getElementById('submitButton');

    function updateTotal() {
        const selectedPackage = packageSelect.value;
        const jumlahTamu = parseInt(tamuInput.value) || 1;
        const hargaPerPaket = packagePrices[selectedPackage] || 0;
        const totalHarga = jumlahTamu * hargaPerPaket;

        priceInput.value = hargaPerPaket;
        totalInput.value = totalHarga;

        // Enable the submit button if all fields are filled
        submitButton.disabled = !selectedPackage || jumlahTamu < 1;
    }

    packageSelect.addEventListener('change', updateTotal);
    tamuInput.addEventListener('input', updateTotal);

    // Add event listeners to all other required inputs
    const form = document.getElementById('bookingForm');
    const inputs = form.querySelectorAll('input, select');

    function checkFormFilled() {
        let allFilled = true;

        inputs.forEach(input => {
            if (input.value === '' || input.value === null) {
                allFilled = false;
            }
        });

        submitButton.disabled = !allFilled; // Enable button if all inputs are filled
    }

    inputs.forEach(input => {
        input.addEventListener('input', checkFormFilled);
        input.addEventListener('change', checkFormFilled);
    });
</script>