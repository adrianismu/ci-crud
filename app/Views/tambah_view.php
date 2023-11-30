<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <h4 class="card-title text-center">Add New Item</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="<?= base_url('barang/add');?>">
                        <div class="form-group">
                            <label for="namaBarang">Item Name</label>
                            <input type="text" id="namaBarang" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="qty">Quantity</label>
                            <input type="number" id="qty" name="qty" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="hargaBeli">Purchase Price</label>
                            <input type="number" id="hargaBeli" name="beli" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="hargaJual">Selling Price</label>
                            <input type="number" id="hargaJual" name="jual" class="form-control" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Add Item</button>
                        </div>
                    </form>
                    <div class="mt-3 text-center">
                        <a href="<?= base_url('barang');?>" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
