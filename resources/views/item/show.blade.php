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
                          <td><image style="max-width: 420px;" src="{{ asset('/images/'.$item->image) }}"></td>
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
                          <td>
                          <div id="printArea" style="display: table-row-group">
                                                        <div id="qrcode" style="float: left;"><img src="{{ asset('/storage/qrcodes/'.$item->no_asset.'.png') }}" alt="QR Code Asset" width="100"></div>
                                                        <div id=""
                                                            style="float: left; margin-left: 15px; color: black;">
                                                            <img src="https://itam.mha.co.id/images/logo.png"
                                                                style="width: 110px; height: 100px; position: absolute; z-index: -1; object-fit: cover; opacity: 0.3; margin-top: 10px" />
                                                            <div><b>INVENTARIS GA</b></div>
                                                            <div>0308 - MUTU </div>
                                                            <div>No. Asset : {{$item->no_asset}}</div>
                                                            <div>Serial Number : {{$item->serial_number}}</div>
                                                            <div>{{$item->item_name}}</div>
                                                        </div>
                                                    </div>
                          </td>
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