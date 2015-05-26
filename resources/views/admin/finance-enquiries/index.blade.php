@extends('admin/master')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12">
      
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
                        <th>Sent</th>         
                        <th>Name</th>    
                        <th>City</th>          
                        <th class="text-center">Delete</th>                   
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
            "ajax": "/admin/finance-enquiries/all",
            "columns": [   
                {data: 'created_at', name: 'created_at', searchable: false},             
                {data: 'name', name: 'name'},   
                {data: 'city', name: 'cities.city'},             
                {data: 'delete', searchable: false, name: 'delete', orderable: false, class: 'text-center'}       
            ]
        });
    });
  </script>

  @include('admin.partials.confirm') 
@stop



