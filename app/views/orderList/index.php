<div class="container mt-5 shadow-lg">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">peserta</th>
                <th scope="col">hari</th>
                <th scope="col">nama package</th>
                <th scope="col">harga package</th>
                <th scope="col">total harga</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <?php foreach ($data['orderList'] as $orderList): ?>
            <tbody>
                <tr>
                    <th scope="row"><?= $orderList['no']; ?></th>
                    <td><?= $orderList['nama']; ?></td>
                    <td><?= $orderList['jmh_peserta']; ?></td>
                    <td><?= $orderList['jmh_hari']; ?></td>
                    <td><?= $orderList['nama_package']; ?></td>
                    <td><?= $orderList['harga_package']; ?></td>
                    <td><?= $orderList['total_harga']; ?></td>
                    <td>
                        <div class="container">
                            <a href="<?= BASEURL; ?>/order/detail/<?= $orderList['no']; ?>" type="button" class="btn btn-primary">Update</a>
                            <a type="button" class="btn btn-danger" data-bs-toggle="modal" data-no="<?= $orderList['no']; ?>" data-bs-target="#hapusmodal">
                                Delete
                            </a>
                        </div>
                    </td>

                </tr>
            </tbody>
        <?php endforeach; ?>
    </table>
</div>






<!-- Modal for alert -->
<div class="modal fade" id="hapusmodal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title " id="judulModal">Hapus Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="alert alert-danger d-flex align-items-center" role="alert">

                        <div>
                            Apakah Anda yakin ingin menghapus Order id: <span id="orderNo"></span> ?
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div>



<script>
    var hapusModal = document.getElementById('hapusmodal');
    hapusModal.addEventListener('show.bs.modal', function(event) {
        // Button that triggered the modal
        var button = event.relatedTarget;
        // Extract info from data-* attributes
        var no = button.getAttribute('data-no');

        // Update the modal's content with the order number
        var modalOrderNo = document.getElementById('orderNo');
        modalOrderNo.textContent = no;

        // Update the modal's delete button to pass the correct order number
        var modalDeleteButton = hapusModal.querySelector('.modal-footer .btn-danger');
        modalDeleteButton.setAttribute('onclick', `hapusOrder(${no})`);
    });

    function hapusOrder(no) {
        window.location.href = `<?= BASEURL; ?>/order/delete/` + no;
    }
</script>