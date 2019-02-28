@extends('app.layouts.dashboard_layout')

@section('content')

	<div class="section-header">
        <h1>Data In</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item">Operation In</div>
          <div class="breadcrumb-item">Data In </div>
        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Data In Form</h2>
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
			                    	<label>Act In</label>
			                  		<input type="text" class="form-control" id="customerCode" name="customerCode">
			                  	</div>
			                  </div>
			                </div>
			                <div class="col-12 col-md-6 col-sm-6">
			                  <div class="row">
			                    <div class="col-12 col-md-12 col-sm-12">
			                    	<label>Container No.</label>
			                  		<input type="text" class="form-control" id="expDate" name="expDate">
			                  	</div>
			                  </div>
			                </div>
			              </div>
			              <div class="row">
		                    <div class="col-12 col-md-6 col-sm-6">
			                  <div class="row">
			                    <div class="col-12 col-md-12 col-sm-12">
			                    	<label>BL</label>
			                  		<input type="text" class="form-control" id="consignee" name="consignee">
			                  	</div>
			                  </div>
			                </div>
			                <div class="col-12 col-md-6 col-sm-6">
			                  <div class="row">
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
			                    	<label>Customer Code</label>
			                  		<input type="text" class="form-control" id="actIn" name="actIn">
			                  	</div>
			                  </div>
			                </div>
			              </div>
			              <div class="row">
		                    <div class="col-12 col-md-6 col-sm-6">
			                  <div class="row">
                                <div class="col-12 col-md-5 col-sm-5">
                                    <label>Size</label>
                                    <input type="text" class="form-control" id="container" name="container">
                                </div>
                                <div class="col-12 col-md-4 col-sm-4">
                                    <label>Type</label>
                                    <input type="text" class="form-control" id="isoCheck" name="isoCheck">
                                </div>
			                  </div>
			                </div>
			              </div>
			              <div class="row">
		                    <div class="col-12 col-md-6 col-sm-6">
			                  <div class="row">
                                <div class="col-12 col-md-5 col-sm-5">
                                    <label>Condition </label>
                                    <input type="text" class="form-control" id="container" name="container">
                                </div>
                                <div class="col-12 col-md-4 col-sm-4">
                                    <label>Wash</label>
                                    <input type="text" class="form-control" id="isoCheck" name="isoCheck">
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
                          </div>
			              <div class="row">
		                    <div class="col-12 col-md-6 col-sm-6">
			                  <div class="row">
			                    <div class="col-12 col-md-12 col-sm-12">
			                    	<label>Consignee</label>
			                  		<input type="text" class="form-control" id="Commodity" name="Commodity">
			                  	</div>
			                  </div>
			                </div>
                          </div>

                            <div class="row">
                                <div class="col-12 col-md-6 col-sm-6">
                                    <div class="row">
                                        <div class="col-12 col-md-5 col-sm-5">
                                            <label>Ex Vessel </label>
                                            <input type="text" class="form-control" id="container" name="container">
                                        </div>
                                        <div class="col-12 col-md-4 col-sm-4">
                                            <input type="text" class="form-control" id="isoCheck" name="isoCheck">
                                        </div>
                                    </div>
                                </div>
                            </div>

			                <div class="row">
                                <div class="col-12 col-md-6 col-sm-6">
                                    <div class="row">
                                        <div class="col-12 col-md-5 col-sm-5">
                                            <label>Transport </label>
                                            <input type="text" class="form-control" id="container" name="container">
                                        </div>
                                        <div class="col-12 col-md-4 col-sm-4">
                                                <label>No. Pol </label>
                                            <input type="text" class="form-control" id="isoCheck" name="isoCheck">
                                        </div>
                                    </div>
                                </div>
                            </div>

			                <div class="row">
                                <div class="col-12 col-md-6 col-sm-6">
                                    <div class="row">
                                        <div class="col-12 col-md-5 col-sm-5">
                                            <label>Tare </label>
                                            <input type="text" class="form-control" id="container" name="container">
                                        </div>
                                        <div class="col-12 col-md-4 col-sm-4">
                                                <label>Payload </label>
                                            <input type="text" class="form-control" id="isoCheck" name="isoCheck">
                                        </div>
                                        <div class="col-12 col-md-4 col-sm-4">
                                                <label>Weight</label>
                                            <input type="text" class="form-control" id="isoCheck" name="isoCheck">
                                        </div>
                                    </div>
                                </div>
                            </div>

			                <div class="row">
                                    <div class="col-12 col-md-6 col-sm-6">
                                        <div class="row">
                                            <div class="col-12 col-md-5 col-sm-5">
                                                <label>MNF </label>
                                                <input type="text" class="form-control" id="container" name="container">
                                            </div>
                                            <div class="col-12 col-md-4 col-sm-4">
                                                    <label>Grade </label>
                                                <input type="text" class="form-control" id="isoCheck" name="isoCheck">
                                            </div>
                                        </div>
                                    </div>
                                </div>

			                <div class="row">
                                <div class="col-12 col-md-6 col-sm-6">
                                    <div class="row">
                                    <div class="col-12 col-md-12 col-sm-12">
                                        <label>Reefer Mechine</label>
                                            <input type="text" class="form-control" id="Commodity" name="Commodity">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-6 col-sm-6">
                                    <div class="row">
                                    <div class="col-12 col-md-12 col-sm-12">
                                        <label>Remarks</label>
                                            <input type="text" class="form-control" id="Commodity" name="Commodity">
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
