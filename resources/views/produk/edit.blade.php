<x-app>
    <div class="card">
        <div class="card-header">
            Edit Data Produk
            <div class="card-title">
            </div>
        </div>
        <div class="card-body"></div>
        <form method="post" action="{{ url('admin/produk', $produk->id) }}">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Nama produk</label>
                        <input type="text" name="nama" value="{{ $produk->nama }}" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Harga</label>
                        <input type="number" name="harga" value="{{ $produk->nama }}" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Foto</label>
                        <input type="text" name="foto" value="{{ $produk->nama }}" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Spesifikasi</label>
                        <input type="text" name="deskripsi" value="{{ $produk->nama }}" class="form-control">
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
