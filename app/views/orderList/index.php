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

                </tr>
            </tbody>
        <?php endforeach; ?>
    </table>
</div>