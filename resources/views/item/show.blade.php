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
                    <h2><b>{{$item->item_name}}</b></h2></br></br>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-6">
                    <table class="table table-striped table-bordered">
                      <tbody>
                        <tr>
                          <th>No. Asset</th>
                          <td>{{$item->no_asset}}</td>
                        </tr>
                        <tr>
                          <th>Asset Name</th>
                          <td>{{$item->item_name}}</td>
                        </tr>
                        <tr>
                          <th>Manufacturer</th>
                          <td>{{$item->manufacturer}}</td>
                        </tr>
                          <th>Model</th>
                          <td>{{$item->model}}</td>
                        </tr>
                        <tr>
                          <th>Serial Number</th>
                          <td>{{$item->serial_number}}</td>
                        </tr>
                        <tr>
                          <th>Image</th>
                          <td><image style="max-width: 420px;" src="{{ asset("/images/$item->image") }}"></td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="col-md-6">
                    <table class="table table-striped table-bordered">
                      <tbody>
                        <tr>
                          <th>Condition</th>
                          <td>{{$item->condition}}</td>
                        </tr>
                        <tr>
                          <th>Status</th>
                          <td>{{$item->status}}</td>
                        </tr>
                          <th>Assign To</th>
                          <td>{{$item->assign_to}}</td>
                        </tr>
                        <tr>
                          <th>Description</th>
                          <td>{{$item->item_desc}}</td>
                        </tr>
                        <tr>
                          <th>QR Code</th>
                          <td>TF87UGIU98</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
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