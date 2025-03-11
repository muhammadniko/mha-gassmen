@extends('layouts.administrator')
@section('title', 'Administrator - GASSMEN')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                  <div class="x_title">
                    <h2><b>Data Asset</b></h2></br></br>
                    <p>List data asset GA yang terdaftar di database</p>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p>{{$jumlahAsset}} Terdaftar</p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>No. Asset</th>
                          <th>Asset Name</th>
                          <th>Model</th>
                          <th>Manufacturer</th>
                          <th>Serial Number</th>
                          <th>Condition</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                      @foreach ($listOfAsset as $item)
                        <tr>
                          <td>{{$item->id}}</td>
                          <td>{{$item->no_asset}}</td>
                          <td>{{$item->item_name}}</td>
                          <td>{{$item->model}}</td>
                          <td>{{$item->manufacturer}}</td>
                          <td>{{$item->serial_number}}</td>
                          <td>{{$item->condition}}</td>
                          <td>{{$item->status}}</td>
                          <td><a href="{{ route('item.show',$item->id) }}">View</a></td>
                        </tr>
                    @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 col-xs-12">

              </div>

              <div class="col-md-6 col-xs-12">
                
              </div>


              <div class="col-md-6 col-sm-12 col-xs-12">
              </div>
            </div>
        </div>
</div>
<!-- /.content-wrapper -->
@endsection