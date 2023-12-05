<x-app>
    <div class="card-header">
        <div class="card-title">Detail Produk</div>
        <a href="{{ url('admin/produk', $produk->id) }}/edit" class="btn btn-warning float-right">
            <i class="fas fas-edit"></i>
            Edit
        </a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <dl>
                    <dt>Nama produk</dt>
                    <dd>{{ $produk->nama }}</dd>
                    <dt>Harga produk</dt>
                    <dd>{{ $produk->harga }}</dd>
                    <dt>Spesifikasi Produk</dt>
                    <dd>{{ $produk->deskripsi }}</dd>
                    <dd>"{!! nl2br($produk->foto) !!}"</dd>
                </dl>
            </div>
            <div class="col-md-6">
                <img src="{{ $produk->foto }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    </div>
</x-app>
