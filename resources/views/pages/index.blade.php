@extends('layouts.default')
@section('content')
     <div class="page-content--bgf7">

            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Welcome back
                                <span>{{Auth::user()->name}}</span>
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                        <div class="table-data__tool-right mt-2">
                            <a href="{{url('tickets/create')}}" class="btn au-btn au-btn-icon au-btn--green au-btn--small">
                                <i class="zmdi zmdi-plus"></i>add item</a>
                        </div>
                </div>
            </section>
            <!-- END WELCOME-->

            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-bordered ticket_datatable">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th width="100px">Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->
            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    var table = $('.ticket_datatable').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax: "{{ route('tickets.index') }}",
                        columns: [
                            {data: 'title', name: 'title'},
                            {data: 'status', name: 'status'},
                            {data: 'action', name: 'action', orderable: false, searchable: false},
                        ]
                    });
                });
            </script>
        @include('partials.footer')
    </div>
@stop