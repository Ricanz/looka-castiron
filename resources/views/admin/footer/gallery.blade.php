<x-app-layout>
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Gallery</h1>
                    <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Gallery
                    </p>
                </div>
                <div>
                    <a href="{{ route('create_footer_gallery') }}" class="btn btn-primary"> Tambah Gallery</a>
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
                                            <th>Image</th>
                                            <th>Tanggal Dibuat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($gallery as $item)
                                            <tr>
                                                <td><img class="tbl-thumb" src="{{ asset($item->image) }}"
                                                        alt="Product Image" /></td>
                                                <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                                <td>
                                                    <div class="btn-group mb-1">
                                                        <form method="POST"
                                                            action="{{ route('footer_gallery_destroy') }}">
                                                            @csrf
                                                            @method('POST')
                                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                                            <button class="btn btn-outline-danger" href="">Delete</button>
                                                        </form>
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
