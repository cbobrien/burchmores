@extends('admin/master')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12">
        <p class="text-right">
              {!! link_to_route('admin.enquiries.create', 'New FAQ') !!}
          </p>
        @if (Session::has('message'))
          <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{ Session::get('message') }}
          </div>
        @endif
        <div class="panel panel-default">
          <div class="panel-heading">Enquiries</div>
          <div class="panel-body">
            <table id="cars" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>                      
                        <th class="col-md-10">Name</th>
                        <th class="col-md-10">Surname</th>
                        <th class="col-md-10">Telephone</th>
                        <th class="col-md-10">Email</th>
                        <th class="col-md-10">Message</th>
                        <th class="col-md-1 text-center">Edit</th>
                        <th class="col-md-1 text-center">Delete</th>                   
                    </tr>
                </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop

@section('scripts')
  <script>
    $(function() {
        oTable = $('#cars').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "{{ Config::get('app.url') }}/admin/enquiries/all",
            "columns": [                
                {data: 'first_name', name: 'first_name'},
                {data: 'surname', name: 'surname'},
                {data: 'telephone', name: 'telephone'},
                {data: 'email', name: 'email'},
                {data: 'message', name: 'message'},
                {data: 'edit', searchable: false, name: 'edit', orderable: false, class: 'text-center'},
                {data: 'delete', searchable: false, name: 'delete', orderable: false, class: 'text-center'}       
            ]
        });
    });
  </script>

  @include('admin.partials.confirm') 
@stop



