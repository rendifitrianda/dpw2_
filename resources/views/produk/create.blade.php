<x-app>
    <div class="card">
        <div class="card-header">
            Tambah Data Produk
            <div class="card-title">
            </div>

        </div>
        <div class="card-body"></div>
        <form method="post" action=" {{ url('admin/produk') }}">

            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Nama produk</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Harga</label>
                        <input type="number" name="harga" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">deskripsi</label>
                        <textarea type="text" name="deskripsi" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Foto</label>
                        <input type="text" name="foto" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-primary float-right">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app>
