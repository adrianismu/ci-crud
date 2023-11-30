<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-md-6">
            <h2>List of Items</h2>
        </div>
        <div class="col-md-6 text-right">
            <a href="<?= base_url('barang/tambah');?>" class="btn btn-success">Add Item</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Purchase Price</th>
                            <th scope="col">Selling Price</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($getBarang as $isi) { ?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $isi['nama_barang'];?></td>
                                <td><?= $isi['qty'];?></td>
                                <td>Rp<?= number_format($isi['harga_beli']);?>,-</td>
                                <td>Rp<?= number_format($isi['harga_jual']);?>,-</td>
                                <td>
                                    <a href="<?= base_url('barang/edit/'.$isi['id_barang']);?>" class="btn btn-primary btn-sm me-2">
                                        Edit
                                    </a>
                                    <a href="<?= base_url('barang/hapus/'.$isi['id_barang']);?>" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger btn-sm">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <?php $no++;}?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
