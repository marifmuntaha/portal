@extends('portal.layouts.master')
@section('js')
    <script src="{{asset('assets/portal/js/plugins/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('assets/portal/js/plugins/selects/select2.min.js')}}"></script>
    <script src="{{asset('assets/portal/js/plugins/notifications/pnotify.min.js')}}"></script>
@endsection
@section('jspage')
    <script src="{{asset('assets/portal/sites/portal/js/post_tag.js')}}"></script>
@endsection
@section('breadcrumb')
    <span class="breadcrumb-item">Postingan</span>
    <span class="breadcrumb-item active">Tagar</span>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header bg-white header-elements-inline">
                    <h6 class="card-title font-weight-semibold">DATA TAGAR</h6>
                </div>
                <table class="table datatable-tag table-bordered">
                    <thead>
                    <tr>
                        <th>NO</th>
                        <th>TAGAR</th>
                        <th>DISKRIPSI</th>
                        <th>AKSI</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header bg-white header-elements-inline">
                    <h6 class="card-title font-weight-semibold" id="form-title">TAMBAH TAGAR</h6>
                </div>
                <div class="card-body">
                    <input type="hidden" id="tag_id">
                    <div class="form-group">
                        <label>Tagar :</label>
                        <input type="text" id="tag_name" class="form-control" placeholder="Ex. Berita, Kategori">
                    </div>

                    <div class="form-group">
                        <label>Diskripsi :</label>
                        <textarea class="form-control" id="tag_desc" placeholder="Ex. Kategori Berita, Kategori Artikel" rows="4"></textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary btn-labeled btn-labeled-left" id="submit" value="store"><b><i class="icon-floppy-disk"></i></b>SIMPAN</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
