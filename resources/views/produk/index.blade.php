<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data produk
            </div>
            <a href="{{ url('admin/produk/create') }}" class="btn btn-primary float-right">
                <i class="fas fa-plus"></i> Tambah Produk
            </a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <th>No</th>
                    <th>Aksi</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>foto</th>
                </thead>
                <tbody>
                    @foreach ($list_produk as $produk)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('admin/produk', $produk->id) }}" class="btn btn-info">
                                        <i class="fas fa-info"></i>
                                    </a>
                                    <a href="{{ url('admin/produk', $produk->id) }}/edit" class="btn btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <x-button.delete id="{{ $produk->id }}" />
                                </div>
                            </td>
                            <td>
                                {{ $produk->nama }}
                            </td>
                            <td>
                                Rp. {{ number_format($produk->harga) }}
                            </td>
                            <td>
                                <img src="{{ $produk->foto }}" alt="" style="width:100px">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app>
