@extends('app.layouts.dashboard_layout')

@section('content')

    <div class="section-header">
        <h1>Cancellation</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Forms</a></div>
            <div class="breadcrumb-item">Cancellation</div>
        </div>
    </div>

    <div class="section-body">

        <div class="card">
            <div class="card-header">
                <h4>Invoice Information</h4>
            </div>
            <div class="card-body">

                <div class="form-group row">
                    <div class="col-md-3">
                        <label>No Invoice</label>
                    </div>
                    <div class="col-md-7">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary btn-block">LOAD</button>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label>Cust. Code / DO Number</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" disabled>
                    </div>
                    <div class="col-md-5">
                        <input type="text" class="form-control" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-3"><br>
                        <label>Party</label>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center">
                            <label>20'</label>
                        </div>
                        <input type="text" class="form-control" disabled>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center">
                            <label>40'</label>
                        </div>
                        <input type="text" class="form-control" disabled>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center">
                            <label>45'</label>
                        </div>
                        <input type="text" class="form-control" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label>Lift On/Admin/Seal</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" disabled>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" disabled>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label>Plugging</label>
                    </div>
                    <div class="col-md-3 form-inline">
                        <input type="text" class="form-control" disabled> &nbsp; <span class="text-muted">Shift</span>
                    </div>
                    <div class="col-md-3 form-inline">
                        <input type="text" class="form-control" disabled> &nbsp; <span class="text-muted">Day</span>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label>Storage</label>
                    </div>
                    <div class="col-md-4 form-inline">
                        <input type="text" class="form-control" disabled> &nbsp; <span class="text-muted">Day</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>Refund Information</h4>
            </div>
            <div class="card-body">

                <div class="form-group row">
                    <div class="col-md-3"><br>
                        <label>Party</label>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center">
                            <label>20'</label>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <div class="text-center">
                            <label>40'</label>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <div class="text-center">
                            <label>45'</label>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label>Lift On/Admin/Seal</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label>Contact Person</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control">
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col-md-3">
                        <label>Plugging</label>
                    </div>
                    <div class="col-md-3 form-inline">
                        <input type="text" class="form-control"> &nbsp; <span class="text-muted">Shift</span>
                    </div>
                    <div class="col-md-3 form-inline">
                        <input type="text" class="form-control"> &nbsp; <span class="text-muted">Day</span>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label>Storage</label>
                    </div>
                    <div class="col-md-4 form-inline">
                        <input type="text" class="form-control"> &nbsp; <span class="text-muted">Day</span>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-3">
                        <label>Contact Person</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group text-md-right">
                    <button class="btn btn-info">RE-PRINT</button>
                    <button class="btn btn-light">&nbsp; NEW &nbsp;</button>
                    <button class="btn btn-primary">SAVE</button>
                </div>
            </div>
        </div>
    </div>

@endsection