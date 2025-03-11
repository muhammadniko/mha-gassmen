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
                    <h2><b>Tambah Asset Baru</b></h2></br></br>
                    <p>Tambahkan asset baru yang belum terdaftar</p>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" action="{{ route('item.store') }}" enctype="multipart/form-data" method="POST">
                    {{ csrf_field() }}
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">No. Asset</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="no_asset" class="form-control" placeholder="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Asset Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="item_name" class="form-control" placeholder="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Model</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="model" class="form-control" placeholder="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Manufacturer</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="manufacturer" class="form-control" placeholder="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Serial Number</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="serial_number" class="form-control" placeholder="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Category</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control" name="category_id">
                            <option disabled selected>Select Category</option>
                            <option value="1">AC</option>
                            <option value="2">Meja Kerja</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control" name="status">
                            <option disabled selected>Select Status</option>
                            <option value="Used">Used</option>
                            <option value="Stock">Stock</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Condition</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control" name="condition">
                          <option disabled selected>Select Condition</option>
                            <option value="Good">Good</option>
                            <option value="Damaged">Damaged</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="form-control" name="item_desc" rows="3" placeholder='Item descriptions..'></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="file" name="image" class="form-control">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
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