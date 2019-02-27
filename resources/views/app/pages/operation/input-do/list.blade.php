@extends('app.layouts.dashboard_layout')

@section('content')

    <div class="section-header">
        <h1>Consignee Price</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Forms</a></div>
          <div class="breadcrumb-item">Input DO </div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">Input DO Form</h2>
        <p class="section-lead">Masukkan Input DO </p>
        <form>
        <div class="row">
          <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
              <div class="card-header">
                <h4>Add Data</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>ACT IN</label>
                  <input type="text" class="form-control" id="ActIn" name="ActIn">
                  <div class="row">
                    <div class="col-12 col-md-8 col-sm-8">
                      <label>Container No.</label>
                      <input type="text" class="form-control" id="ContainerNo" name="ContainerNo"> 
                    </div>
                    <div class="col-12 col-md-4 col-sm-4">
                      <label>Iso Check</label>
                      <input type="text" class="form-control" id="Iso" name="Iso">
                    </div>
                  </div>
                  <label>BL</label>
                  <input type="text" class="form-control" id="bl" name="bl">
                  <label>Customer Code</label>
                  <input type="text" class="form-control" id="CustomerCode" name="CustomerCode">
                  <div class="row">
                    <div class="col-12 col-md-6 col-sm-6">
                      <label>Size</label>
                      <input type="text" class="form-control" id="Size" name="Size"> 
                    </div>
                    <div class="col-12 col-md-6 col-sm-6">
                      <label>Type</label>
                      <input type="text" class="form-control" id="Type" name="Type">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-md-6 col-sm-6">
                      <label>Condition</label>
                      <input type="text" class="form-control" id="Condition" name="Condition"> 
                    </div>
                    <div class="col-12 col-md-6 col-sm-6">
                      <label>Wash</label>
                      <input type="text" class="form-control" id="Wash" name="Wash">
                    </div>
                  </div>
                  <label>Commodity</label>
                  <input type="text" class="form-control" id="Commodity" name="Commodity">
                </div>
              </div>
            </div>
            <input type="submit" class="btn btn-primary " >
          </div>
          <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
              <div class="card-header">
                <h4>Add Data</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Consignee</label>
                  <input type="text" class="form-control" id="Consignee" name="Consignee">
                  <label>Ex Vessel</label>
                  <input type="text" class="form-control" id="ExVessel" name="ExVessel"> 
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
                  <div class="row">
                    <div class="col-12 col-md-4 col-sm-4">
                      <label>Tare</label>
                      <input type="text" class="form-control" id="Tare" name="Tare"> 
                    </div>
                    <div class="col-12 col-md-4 col-sm-4">
                      <label>Payload</label>
                      <input type="text" class="form-control" id="Payload" name="Payload">
                    </div>
                    <div class="col-12 col-md-4 col-sm-4">
                      <label>Weight</label>
                      <input type="text" class="form-control" id="Weight" name="Weight">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-md-6 col-sm-6">
                      <label>MNF</label>
                      <input type="text" class="form-control" id="MNF" name="MNF"> 
                    </div>
                    <div class="col-12 col-md-6 col-sm-6">
                      <label>Grade</label>
                      <input type="text" class="form-control" id="Grade" name="Grade">
                    </div>
                  </div>
                  <label>Reefer Machine</label>
                  <input type="text" class="form-control" id="ReeferMachine" name="ReeferMachine"> 
                  <label>Remarks</label>
                  <input type="text" class="form-control" id="Remarks" name="Remarks"> 
                </div>                    
              </div>
            </div>
          </div>
        </div>
        </form>
      </div>

@endsection