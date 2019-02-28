@extends('app.layouts.dashboard_layout')

@section('content')

	<div class="section-header">
        <h1>DP In</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item">Operation In</div>
          <div class="breadcrumb-item">DP In </div>
        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">DP In Form</h2>
        <p class="section-lead">Masukkan DP In </p>
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
		                    <div class="col-12 col-md-6 col-sm-6">
			                  <div class="row">
			                    <div class="col-12 col-md-12 col-sm-12">
			                    	<label>Customer Code</label>
			                  		<input type="text" class="form-control" id="customerCode" name="customerCode">
			                  	</div>
			                  </div>
			                </div>
			                <div class="col-12 col-md-6 col-sm-6">
			                  <div class="row">
			                    <div class="col-12 col-md-12 col-sm-12">
			                    	<label>Exp. Date BL</label>
			                  		<input type="text" class="form-control" id="expDate" name="expDate">
			                  	</div>
			                  </div>
			                </div>
			              </div>
			              <div class="row">
		                    <div class="col-12 col-md-6 col-sm-6">
			                  <div class="row">
			                    <div class="col-12 col-md-12 col-sm-12">
			                    	<label>Consignee</label>
			                  		<input type="text" class="form-control" id="consignee" name="consignee">
			                  	</div>
			                  </div>
			                </div>
			                <div class="col-12 col-md-6 col-sm-6">
			                  <div class="row">
			                    <div class="col-12 col-md-5 col-sm-5">
			                      <label>Container 20</label>
			                      <input type="text" class="form-control" id="container" name="container"> 
			                    </div>
			                    <div class="col-12 col-md-4 col-sm-4">
			                      <label>ISO Check</label>
			                      <input type="text" class="form-control" id="isoCheck" name="isoCheck" disabled>
			                    </div>
			                    <div class="col-12 col-md-3 col-sm-3">
			                      <button class="btn btn-info" style="margin-top:2.7em;width:50%">ADD</button>
			                    </div>
			                  </div>
			                </div>
			              </div>
			              <div class="row">
		                    <div class="col-12 col-md-6 col-sm-6">
			                  <div class="row">
			                    <div class="col-12 col-md-12 col-sm-12">
			                    	<label>Act In</label>
			                  		<input type="text" class="form-control" id="actIn" name="actIn">
			                  	</div>
			                  </div>
			                </div>
			                <div class="col-12 col-md-6 col-sm-6">
			                  <div class="row">
			                   <div class="col-12 col-md-5 col-sm-5">
			                      <label>Container 40</label>
			                      <input type="text" class="form-control" id="container" name="container"> 
			                    </div>
			                    <div class="col-12 col-md-4 col-sm-4">
			                      <label>ISO Check</label>
			                      <input type="text" class="form-control" id="isoCheck" name="isoCheck" disabled>
			                    </div>
			                    <div class="col-12 col-md-3 col-sm-3">
			                      <button class="btn btn-info" style="margin-top:2.7em;width:50%">ADD</button>
			                    </div> 
			                  </div>
			                </div>
			              </div>
			              <div class="row">
		                    <div class="col-12 col-md-6 col-sm-6">
			                  <div class="row">
			                    <div class="col-12 col-md-12 col-sm-12">
			                    	<label>Washing</label>
			                  		<input type="text" class="form-control" id="washing" name="washing">
			                  	</div>
			                  </div>
			                </div>
			                <div class="col-12 col-md-6 col-sm-6">
			                  <div class="row">
			                    <div class="col-12 col-md-5 col-sm-5">
			                      <label>Container 45</label>
			                      <input type="text" class="form-control" id="container" name="container"> 
			                    </div>
			                    <div class="col-12 col-md-4 col-sm-4">
			                      <label>ISO Check</label>
			                      <input type="text" class="form-control" id="isoCheck" name="isoCheck" disabled>
			                    </div>
			                    <div class="col-12 col-md-3 col-sm-3">
			                      <button class="btn btn-info" style="margin-top:2.7em;width:50%">ADD</button>
			                    </div> 
			                  </div>
			                </div>
			              </div>
			              <div class="row">
		                    <div class="col-12 col-md-6 col-sm-6">
			                  <div class="row">
			                    <div class="col-12 col-md-4 col-sm-4">
			                      <label>Ex Vessel</label>
			                      <input type="text" class="form-control" id="exVessel" name="exVessel"> 
			                    </div>
			                    <div class="col-12 col-md-8 col-sm-8">
			                      <input type="text" class="form-control" id="exVessel2" name="exVessel2" style="margin-top:2em;width:100%">
			                    </div>
			                  </div>
			                </div>
			                <div class="col-12 col-md-6 col-sm-6">
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
			                </div>
			              </div>
			              <div class="row">
		                    <div class="col-12 col-md-6 col-sm-6">
			                  <div class="row">
			                    <div class="col-12 col-md-12 col-sm-12">
			                    	<label>Commodity</label>
			                  		<input type="text" class="form-control" id="Commodity" name="Commodity">
			                  	</div>
			                  </div>
			                </div>
			                <div class="col-12 col-md-6 col-sm-6">
			                  <div class="row">
				                <div class="col-12 col-md-10 col-sm-10">
				                  <label>Storage</label>
				                  <input type="text" class="form-control" id="day" name="day"> 
				                </div>
				                <div class="col-12 col-md-2 col-sm-2">
				                  <label style="margin-top:2.7em;width:100%">Day</label>
				              	</div>
				              </div>
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