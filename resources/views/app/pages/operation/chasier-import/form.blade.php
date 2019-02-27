@extends('app.layouts.dashboard_layout')

@section('content')

	<div class="section-header">
        <h1>Chasier Import</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item">Chasier</div>
          <div class="breadcrumb-item">Import</div>
        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Chasier Import Form</h2>
        <p class="section-lead">Masukkan Chasier Import</p>
        <form method="" action="">
        	<div class="row">
          		<div class="col-12 col-md-12 col-lg-12">
            		<div class="card">
		              <div class="card-header">
		                <h4>Add Data</h4>
		              </div>
		              <div class="card-body">
		                <div class="form-group">
		                  <div class="row">
		                    <div class="col-12 col-md-4 col-sm-4">
		                      <label>LIFT OFF / WASH</label>
		                      <input type="text" class="form-control" id="low" name="low"> 
		                    </div>
		                    <div class="col-12 col-md-8 col-sm-8">
		                      <input type="text" class="form-control" id="low2" name="low2" style="margin-top:2em;width:100%">
		                    </div>
		                  </div>
		                  <div class="row">
		                    <div class="col-12 col-md-12 col-sm-12">
		                    	<label>Admin</label>
		                  		<input type="text" class="form-control" id="admin" name="admin">
		                  	</div>
		                  </div>
		                  <div class="row">
		                    <div class="col-12 col-md-12 col-sm-12">
		                    	<label>PPN</label>
		                  		<input type="text" class="form-control" id="ppn" name="ppn">
		                  	</div>
		                  </div>
		                  <div class="row">
		                    <div class="col-12 col-md-12 col-sm-12">
		                    	<label>Consignee</label>
		                  		<input type="text" class="form-control" id="consignee" name="consignee">
		                  	</div>
		                  </div>
		                  <div class="row">
		                    <div class="col-12 col-md-4 col-sm-4">
		                      <label>Plugging</label>
		                      <input type="text" class="form-control" id="shift" name="shift"> 
		                    </div>
		                    <div class="col-12 col-md-2 col-sm-2">
		                      <label style="margin-top:2.7em;width:100%">Shift</label>
		                  	</div>
		                  	<div class="col-12 col-md-4 col-sm-4">
		                      <input type="text" class="form-control" id="day" name="day" style="margin-top:2em;width:100%"> 
		                    </div>
		                    <div class="col-12 col-md-2 col-sm-2">
		                      <label style="margin-top:2.7em;width:100%">Day</label>
		                  	</div>
		                  </div>
		                  <div class="row">
			                <div class="col-12 col-md-10 col-sm-10">
			                  <label>Storage</label>
			                  <input type="text" class="form-control" id="day" name="day"> 
			                </div>
			                <div class="col-12 col-md-2 col-sm-2">
			                  <label style="margin-top:2.7em;width:100%">Day</label>
			              	</div>
			              </div>
			              <div class="row">
		                    <div class="col-12 col-md-12 col-sm-12">
		                    	<label>Uang</label>
		                  		<input type="text" class="form-control" id="uang" name="uang">
		                  	</div>
		                  </div>
		                  <div class="row">
		                    <div class="col-12 col-md-12 col-sm-12">
		                    	<label>Total</label>
		                  		<input type="text" class="form-control" id="total" name="total">
		                  	</div>
		                  </div>
		                  <div class="row">
		                    <div class="col-12 col-md-12 col-sm-12">
		                    	<label>Kembali</label>
		                  		<input type="text" class="form-control" id="kembali" name="kembali">
		                  	</div>
		                  </div>
		                </div>
		              </div>
		              <div class="card-footer"> 
		              	<button type="submit" class="btn btn-primary">Submit</button>
		              </div>      
		          	</div>
            	</div>
        	</div>
    	</form>
  	</div>

@endsection