<x-app-layout>
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>Edit Artikel</h1>
            <p class="breadcrumbs"><span><a href="/">Home</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Edit Artikel
            </p>
        </div>
        <div>
            <a href="{{ route('artikel.index') }}" class="btn btn-primary"> Lihat Semua
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Edit Artikel</h2>
                </div>

                <div class="card-body">
                    <div class="row ec-vendor-uploads">
                        <form class="row g-3" method="post" action="{{ route('artikel.update', $artikel->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="col-lg-4">
                                <div class="ec-vendor-img-upload">
                                    <div class="ec-vendor-main-img">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input type='file' id="imageUpload" name="gambar" class="ec-image-upload"
                                                    accept=".png, .jpg, .jpeg" />
                                                <label for="imageUpload"><img
                                                        src="{{ asset('tadmin/assets/img/icons/edit.svg') }}"
                                                        class="svg_img header_svg" alt="edit" /></label>
                                            </div>
                                            <div class="avatar-preview ec-preview">
                                                <div class="imagePreview ec-div-preview">
                                                    <img class="ec-image-preview"
                                                        src="{{ asset($artikel->gambar) }}"
                                                        alt="edit" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="ec-vendor-upload-detail row g-3">
                                    <div class="col-md-12">
                                        <label for="inputEmail4" class="form-label">Judul</label>
                                        <input type="text" name="judul" class="form-control slug-title" id="judul" value="{{ $artikel->judul }}">
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label for="inputEmail4" class="form-label">Isi</label>
                                        <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="10">{!! $artikel->deskripsi !!}</textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputEmail4" class="form-label">Judul</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="aktif">Aktif</option>
                                            <option value="inaktif">Inaktif</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</x-app-layout>
