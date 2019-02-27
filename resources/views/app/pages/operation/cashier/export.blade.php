@extends('app.layouts.dashboard_layout')

@section('content')

    <div class="section-header">
        <h1>Cashier Export</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Forms</a></div>
            <div class="breadcrumb-item">Cancellation</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Cash</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label>Cust. Code / DO Number</label>
                            </div>
                            <div class="col-6 col-md-4">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-6 col-md-5">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3"><br>
                                <label class="col-form-label">Party</label>
                            </div>
                            <div class="col-4 col-md-3">
                                <div class="text-center">
                                    <label>20'</label>
                                </div>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-4 col-md-3">
                                <div class="text-center">
                                    <label>40'</label>
                                </div>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-4 col-md-3">
                                <div class="text-center">
                                    <label>45'</label>
                                </div>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3">
                                <label class="col-form-label">Define Seal</label>
                            </div>
                            <div class="col-md-9">
                                <input class="form-control" placeholder="Asign Seal">
                                <br>
                                <table class="table table-sm table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Seal</th>
                                        <th>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="defaultCheck3">
                                                <label class="form-check-label" for="defaultCheck3">
                                                    Choose
                                                </label>
                                            </div>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>zax 1234</td>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>zax 1235</td>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="form-group text-right">
                            <button class="btn btn-light">Cancel</button>
                            <button class="btn btn-primary"> &nbsp; OK &nbsp;</button>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3">
                                <label>Contact Person</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                        <fieldset class="border p-2">
                            <legend class="w-auto"><span class="text-muted">Re Print</span></legend>
                                <div class="row">
                                    <div class="col-md-3">No Invoice</div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <button class="btn btn-primary btn-block">LOAD</button>
                                    </div>
                                </div>
                        </fieldset>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-warning btn-block">Print Invoice</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-danger btn-block">Print Bon Muat</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Do Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label>Cust. Code / ACT OUT</label>
                            </div>
                            <div class="col-6 col-md-4">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-6 col-md-5">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3">
                                <label class="col-form-label">DO Number</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3">
                                <label class="col-form-label">Shipper</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3">
                                <label class="col-form-label">Vessel Name</label>
                            </div>
                            <div class="col-6 col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-6 col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3">
                                <label class="col-form-label">Destination</label>
                            </div>
                            <div class="col-6 col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-6 col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3">
                                <label class="col-form-label">Commodity</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3">
                                <label class="col-form-label">Remarks</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3"><br>
                                <label class="col-form-label">Party</label>
                            </div>
                            <div class="col-4 col-md-3">
                                <div class="text-center">
                                    <label>20'</label>
                                </div>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-4 col-md-3">
                                <div class="text-center">
                                    <label>40'</label>
                                </div>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-4 col-md-3">
                                <div class="text-center">
                                    <label>45'</label>
                                </div>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-3">
                        <h4 class="col-form-label">UANG</h4>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-3">
                        <h4 class="col-form-label">TOTAL</h4>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-3">
                        <h4 class="col-form-label">KEMBALI</h4>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <button class="btn btn-light btn-block">New</button>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-primary btn-block">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label class="col-form-label">No Invoice</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-primary btn-block">LOAD</button>
                            </div>
                        </div>

                        <table class="table table-bordered table-sm table-responsive">
                            <thead>
                            <tr>
                                <th>List Container</th>
                                <th class="text-center">Detail Payment</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                </td>
                                <td>
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <label>Plugging</label>
                                        </div>
                                        <div class="col-md-4"> &nbsp; <span class="text-muted">Shift</span>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-4"> &nbsp; <span class="text-muted">Day</span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-3">
                                            <label>Storage</label>
                                        </div>
                                        <div class="col-9"><span class="text-muted">Day</span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-primary">Check Payment</button>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <label>Plugging</label>
                                        </div>
                                        <div class="col-md-4"> &nbsp; <span class="text-muted">Shift</span>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-4"> &nbsp; <span class="text-muted">Day</span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-3">
                                            <label>Storage</label>
                                        </div>
                                        <div class="col-9"><span class="text-muted">Day</span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="col-md-5">

                        <div class="form-group row">
                            <div class="col-md-3">
                                <h5 class="col-form-label">UANG</h5>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3">
                                <h5 class="col-form-label">TOTAL</h5>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3">
                                <h5 class="col-form-label">KEMBALI</h5>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3">
                                <label class="col-form-label">Contact Person</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-light btn-block">New</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-primary btn-block">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection