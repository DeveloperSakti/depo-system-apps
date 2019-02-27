@extends('app.layouts.dashboard_layout')

@section('content')

    <div class="section-header">
        <h1>Consignee Price</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Forms</a></div>
          <div class="breadcrumb-item">Data Out </div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">Data Out Form</h2>
        <p class="section-lead">Masukkan Data Out </p>
        <form>
        <div class="row">
          <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
              <div class="card-header">
                <h4>Add Data</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <div class="row">
                    <div class="col-12 col-md-8 col-sm-8">
                      <label>No. Invoice</label>
                      <input type="text" class="form-control" id="ContainerNo" name="ContainerNo"> 
                    </div>
                    <div class="col-12 col-md-4 col-sm-4">
                      <!-- <label>Iso Check</label> -->
                      <button class="btn btn-info" style="margin-top:2.7em;width:100%">Load</button>
                    </div> 
                  </div>
                  <div class="row">
                    <div class="col-12 col-md-6 col-sm-6">
                      <label>Dtm</label>
                      <input type="text" class="form-control" id="Dtm" name="Dtm" disabled> 
                    </div>
                    <div class="col-12 col-md-6 col-sm-6">
                      <label>Cashier</label>
                      <input type="text" class="form-control" id="Cashier" name="Cashier" disabled>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-md-4 col-sm-4">
                      <label>DO No</label>
                      <input type="text" class="form-control" disabled> 
                    </div>
                    <div class="col-12 col-md-4 col-sm-4">
                      <label>Cust</label>
                      <input type="text" class="form-control" disabled>
                    </div>
                    <div class="col-12 col-md-4 col-sm-4">
                      <label>ACT OUT</label>
                      <input type="text" class="form-control" disabled>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-md-3 col-sm-3">
                      <label>Size</label>
                      <input type="text" class="form-control" disabled> 
                    </div>
                    <div class="col-12 col-md-3 col-sm-3">
                      <label>Ty</label>
                      <input type="text" class="form-control" disabled>
                    </div>
                    <div class="col-12 col-md-3 col-sm-3">
                      <label>Cond.</label>
                      <input type="text" class="form-control" disabled>
                    </div>
                    <div class="col-12 col-md-3 col-sm-3">
                      <label>Dur.</label>
                      <input type="text" class="form-control" disabled>
                    </div>
                  </div>
                  <label>Shipper</label>
                  <input type="text" class="form-control" id="Shipper" name="Shipper" disabled>
                  <label>Vessel Name</label>
                  <input type="text" class="form-control" id="VesselName" name="VesselName" disabled>
                  <label>Destination</label>
                  <input type="text" class="form-control" id="Destination" name="Destination">
                  <div class="row">
                    <div class="col-12 col-md-6 col-sm-6">
                      <label>Transport</label>
                      <input type="text" class="form-control" id="Transport" name="Transport"> 
                    </div>
                    <div class="col-12 col-md-6 col-sm-6">
                      <label>No. Pol</label>
                      <input type="text" class="form-control" id="NoPol" name="NoPol">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <input type="submit" class="btn btn-primary " >
          </div>
          <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
              <div class="card-header">
                <h4>Seal</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                   <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                      <label class="custom-control-label" for="defaultUnchecked">Default unchecked</label>
                   </div>
                </div>
                <div class="form-group">
                   <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="defaultUnchecked2">
                      <label class="custom-control-label" for="defaultUnchecked2">Default unchecked</label>
                   </div>
                </div>
                <div class="form-group">
                   <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="defaultUnchecked3">
                      <label class="custom-control-label" for="defaultUnchecked3">Default unchecked</label>
                   </div>
                </div>                    
              </div>
            </div>
          </div>
        </div>
        </form>
      </div>

@endsection