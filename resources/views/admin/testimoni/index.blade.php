<x-app-layout>
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>Daftar Testimoni</h1>
            <p class="breadcrumbs"><span><a href="/dashboard">Dashboard</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Testimoni
            </p>
        </div>
        <div>
            <a href="{{route('produk.create')}}" class="btn btn-primary"> Tambah Testimoni</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <div class="card-bar">
                        <div class="col-lg-6 col-md-12">
                            <input type="text" class="form-control" id="searchProduct"
                                placeholder="search with product name..">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($testimoni as $item)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="card-wrapper">
                                    <div class="card-container">
                                        <div class="card-top">
                                            <img class="card-image" src="{{asset($item->foto)}}"
                                                alt="" />
                                        </div>
                                        <div class="card-bottom">
                                            <h3>{{ $item->nama }}</h3>
                                            <p class="mb-2">{{ $item->instansi }}</p>
                                            <h3>{{ $item->deskripsi }}</h3>
                                        </div>
                                        <div class="card-action">
                                            <a href="{{ route('testimonial.edit', $item->id) }}" class="card-edit">
                                                <i class="mdi mdi-circle-edit-outline">
                                                </i>
                                            </a>
                                            <a href="{{ route('testimonial.show', $item->id) }}" class="card-preview"><i
                                                    class="mdi mdi-eye-outline"></i>
                                            </a>
                                            <form action="{{route('testimonial.destroy', $item->id)}}" method="POST">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" class="card-remove"><i
                                                    class="mdi mdi mdi-delete-outline"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
