<x-app-layout>
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Product</h1>
                    <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Product
                    </p>
                </div>
                <div>
                    <a href="{{route('produk.create')}}" class="btn btn-primary"> Tambah Produk</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="responsive-data-table" class="table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Produk</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Kategori</th>
                                            <th>Deskripsi</th>
                                            <th>Status</th>
                                            <th>Tanggal Dibuat</th>
                                            <th>Dibuat Oleh</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($products as $item)
                                            <tr>
                                                <td><img class="tbl-thumb"
                                                        src="{{ asset($item->gambar) }}"
                                                        alt="Product Image" /></td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->harga }}</td>
                                                <td>{{ $item->kategori->nama }}</td>
                                                <td>{!! Str::limit($item->deskripsi, 150) !!}</td>
                                                <td>{{ $item->status }}</td>
                                                <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                                <td>Admin</td>
                                                <td>
                                                    <div class="btn-group mb-1">
                                                        <button type="button" class="btn btn-outline-success">Lihat
                                                            Produk</button>
                                                        <button type="button"
                                                            class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false" data-display="static">
                                                            <span class="sr-only">Lihat Produk</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item"
                                                                href="{{ route('produk.edit', $item->id) }}">Edit</a>
                                                            <form method="POST"
                                                                action="{{ route('produk.destroy', $item->id) }}">
                                                                @csrf
                                                                @method("DELETE")
                                                                <button class="dropdown-item" href="">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
</x-app-layout>
