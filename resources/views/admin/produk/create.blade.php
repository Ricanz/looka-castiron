<x-app-layout>
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>Tambah Produk</h1>
            <p class="breadcrumbs"><span><a href="/dashboard">Dashboard</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Tambah Produk
            </p>
        </div>
        <div>
            <a href="{{ route('produk.index') }}" class="btn btn-primary"> Lihat Semua
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Tambah Produk</h2>
                </div>

                <div class="card-body">
                    <div class="row ec-vendor-uploads">
                        <form class="row g-3" method="post" action="{{ route('produk.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-4">
                                <div class="ec-vendor-img-upload">
                                    <div class="ec-vendor-main-img">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input type='file' id="imageUpload" name="gambar"
                                                    class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                <label for="imageUpload"><img
                                                        src="{{ asset('tadmin/assets/img/icons/edit.svg') }}"
                                                        class="svg_img header_svg" alt="edit" /></label>
                                            </div>
                                            <div class="avatar-preview ec-preview">
                                                <div class="imagePreview ec-div-preview">
                                                    <img class="ec-image-preview"
                                                        src="{{ asset('tadmin/assets/img/products/vender-upload-preview.jpg') }}"
                                                        alt="edit" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="ec-vendor-upload-detail row g-3">
                                    <div class="col-md-6 mb-2">
                                        <label for="inputEmail4" class="form-label">Nama Produk</label>
                                        <input type="text" name="nama" class="form-control slug-title" id="inputEmail4">
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="form-label">Harga <span>( In IDR
                                                )</span></label>
                                        <input type="number" min="0" name="harga" class="form-control" id="price1">
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <label class="form-label">Kategori</label>
                                        <select name="kategori_id" id="Categories" class="form-select">
                                            @foreach ($Kategori as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                            @endforeach
                                            {{-- <option value="1">Celana Dalam</option>
                                            <option value="1">Celana Luar</option>
                                            <option value="1">Baju Dalam</option> --}}
                                        </select>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <label class="form-label">Link Shopee</label>
                                        <input type="shopee_link" min="0" class="form-control" name="stok"
                                            id="quantity1">
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="form-label">Link Tokopedia</label>
                                        <input type="tokopedia_link" min="0" class="form-control" name="stok"
                                            id="quantity1">
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="form-label">Link Lazada</label>
                                        <input type="lazada_link" min="0" class="form-control" name="stok"
                                            id="quantity1">
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <label class="form-label">Deskripsi</label>
                                        <textarea class="form-control" name="deskripsi" rows="4"></textarea>
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
