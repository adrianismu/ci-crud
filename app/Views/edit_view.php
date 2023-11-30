<div class="container mt-4">
    <a href="<?= base_url('barang');?>" class="btn btn-outline-secondary mb-3">Back</a>
    <div class="card">
        <div class="card-header bg-secondary text-white">
            <h4 class="card-title">Edit Item: <?= $barang->nama_barang;?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('barang/update');?>">
                <div class="form-group">
                    <label for="itemName">Item Name</label>
                    <input type="text" value="<?= $barang->nama_barang;?>" name="nama" required class="form-control" id="itemName">
                </div>
                <div class="form-group">
                    <label for="itemQty">Quantity</label>
                    <input type="number" value="<?= $barang->qty;?>" name="qty" required class="form-control" id="itemQty">
                </div>
                <div class="form-group">
                    <label for="purchasePrice">Purchase Price</label>
                    <input type="number" value="<?= $barang->harga_beli;?>" name="beli" required class="form-control" id="purchasePrice">
                </div>
                <div class="form-group">
                    <label for="sellingPrice">Selling Price</label>
                    <input type="number" value="<?= $barang->harga_jual;?>" name="jual" required class="form-control" id="sellingPrice">
                </div>
                <input type="hidden" value="<?= $barang->id_barang;?>" name="id_barang">
                <button type="submit" class="btn btn-primary">Update Item</button>
            </form>
        </div>
    </div>
</div>
