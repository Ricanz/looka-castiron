<x-app-layout>
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>Edit Banner</h1>
            <p class="breadcrumbs"><span><a href="/dashboard">Dashboard</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Edit Banner
            </p>
        </div>
        <div>
            <a href="{{ route('banner.index') }}" class="btn btn-primary"> Lihat Semua
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Edit Banner</h2>
                </div>

                <div class="card-body">
                    <div class="row ec-vendor-uploads">
                        <form class="row g-3" method="post" action="{{ route('banner.update', $banner->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
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
                                                        src="{{ asset($banner->gambar) }}"
                                                        alt="edit" />
                                                </div>
                                            </div>
                                            <label for="sub_judul" class="col-12 col-form-label">Semua data opsional</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="ec-vendor-upload-detail row g-3">

                                    <div class="col-md-12">
                                        <label for="inputEmail4" class="form-label">Judul</label>
                                        <input type="text" name="judul" class="form-control slug-title" id="judul" value="{{ $banner->judul }}">
                                        
                                    </div>
                                    <div class="col-md-12">
                                        <label for="sub_judul" class="col-12 col-form-label">Sub Judul</label>
                                        <div class="col-12">
                                            <input id="sub_judul" name="sub_judul" class="form-control " type="text" value="{{ $banner->sub_judul }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputEmail4" class="form-label">Deskripsi</label>
                                        <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="10">{{ $banner->deskripsi }}</textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="tombol" class="col-12 col-form-label">Tombol</label>
                                        <div class="col-12">
                                            <input id="tombol" name="tombol" class="form-control " type="text" value="{{ $banner->tombol_text }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="link" class="col-12 col-form-label">Link</label>
                                        <div class="col-12">
                                            <input id="link" name="link" class="form-control" type="text" value="{{ $banner->tombol_link }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="link" class="col-12 col-form-label">Status</label>
                                        <div class="col-12">
                                            <select name="status" id="status" class="form-control">
                                                <option value="aktif" disabled>{{ $banner->status }}</option>
                                                <option value="aktif">aktif</option>
                                                <option value="inaktif">inaktif</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
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
