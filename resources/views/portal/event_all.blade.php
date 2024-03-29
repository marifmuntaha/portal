@extends('portal.layouts.master')
@section('js')
    <script src="{{asset('assets/portal/js/plugins/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('assets/portal/js/plugins/selects/select2.min.js')}}"></script>
    <script src="{{asset('assets/portal/js/plugins/notifications/pnotify.min.js')}}"></script>
@endsection
@section('jspage')
    <script src="{{asset('assets/portal/sites/portal/js/event_all.js')}}"></script>
@endsection
@section('breadcrumb')
    <span class="breadcrumb-item">Acara/Kegiatan</span>
    <span class="breadcrumb-item active">Semua</span>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-white header-elements-inline">
                    <h6 class="card-title font-weight-semibold">DATA ACARA/KEGIATAN</h6>
                    <div class="header-elements">
                        <a class="btn bg-info font-weight-semibold" href="{{route('portal.event.create')}}">TAMBAH</a>
                    </div>
                </div>
                <table class="table datatable-event table-bordered">
                    <thead>
                    <tr>
                        <th>NO</th>
                        <th>JUDUL</th>
                        <th>MULAI</th>
                        <th>SELESAI</th>
                        <th>WAKTU</th>
                        <th>TEMPAT</th>
                        <th>AKSI</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection
