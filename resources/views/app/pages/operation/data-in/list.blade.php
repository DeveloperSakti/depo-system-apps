@extends('app.layouts.dashboard_layout')

@section('content')

    <div class="section-header">
        <h1>Consignee Price</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Forms</a></div>
          <div class="breadcrumb-item">Consignee Price </div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">Data In Form</h2>
        <p class="section-lead">Masukkan Data In Dengan Benar.</p>
        <form>
        <div class="row">
          <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
              <div class="card-header">
                <h4>Add Data</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Consignee Name</label>
                  <input type="text" class="form-control" id="CustomerCode" name="CustomerCode">
                  <label>Customer Code</label>
                  <input type="text" class="form-control" id="CustomerName" name="CustomerName">
                  <label>NPWP</label>
                  <input type="text" class="form-control" id="Attention" name="Attention">
                </div>                    
              </div>
            </div>
            <input type="submit" class="btn btn-primary " >
          </div>
          <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
              <div class="card-header">
                <h4>Add Tarif</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>MTYADMIN</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        Rp.
                      </div>
                    </div>
                    <input type="text" class="form-control currency">
                  </div>
                  <label>MTYLIFTOFF</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        Rp.
                      </div>
                    </div>
                    <input type="text" class="form-control currency">
                  </div>
                  <label>MTYLIFTON</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        Rp.
                      </div>
                    </div>
                    <input type="text" class="form-control currency">
                  </div>
                  <label>MTYWASHING</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        Rp.
                      </div>
                    </div>
                    <input type="text" class="form-control currency">
                  </div>
                  <label>FCLADMIN</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        Rp.
                      </div>
                    </div>
                    <input type="text" class="form-control currency">
                  </div>
                  <label>FCLLIFTOFF</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        Rp.
                      </div>
                    </div>
                    <input type="text" class="form-control currency">
                  </div>
                  <label>FCLLIFTON</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        Rp.
                      </div>
                    </div>
                    <input type="text" class="form-control currency">
                  </div>
                  <label>STORAGE</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        Rp.
                      </div>
                    </div>
                    <input type="text" class="form-control currency">
                  </div>
                  <label>SEALFEE</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        Rp.
                      </div>
                    </div>
                    <input type="text" class="form-control currency">
                  </div>
                  <label>PLUGGING</label>
                 <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        Rp.
                      </div>
                    </div>
                    <input type="text" class="form-control currency">
                  </div>
                </div>                    
              </div>
            </div>
          </div>
        </div>
        </form>
      </div>

@endsection