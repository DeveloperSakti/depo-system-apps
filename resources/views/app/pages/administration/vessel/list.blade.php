@extends('app.layouts.dashboard_layout')

@section('content')
    <div class="section-header">
    <h1>Vessel Register</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                <h4><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> New Vessel Register</button></h4>
                <div class="card-header-form">
                    <form>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                    <tr>
                        <th>No.</th>
                        <th>Customer Code</th>
                        <th>Vessel Code</th>
                        <th>Vessel Register</th>
                        <th colspan="2">Action</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>MSK</td>
                        <td>S3D</td>
                        <td>SINAR MAS</td>
                        <td align="center"><button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Edit</a></td>
                        <td align="center"><a href="#" class="btn btn-danger">Delete</a></td>
                    </tr>
                    </table>
                </div>
                </div>
                <div class="card-footer text-right">
                <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                    </li>
                    </ul>
                </nav>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

    <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <form method="" action="">
                <div class="modal-header">
                <h5 class="modal-title">Form Vessel Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <div class="card-body">
                    <div class="form-group">
                    <label class="d-block">Code Customer</label>
                    <div class="form-text form-text-inline">
                        <input type="text" name="code-cust" class="form-control">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="d-block">Vessel Code</label>
                    <div class="form-text form-text-inline">
                        <input type="text" name="code-vessel" class="form-control">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="d-block">Vessel Name</label>
                    <div class="form-text form-text-inline">
                        <input type="text" name="name-vessel" class="form-control">
                    </div>
                    </div>
                </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </form>
            </div>
        </div>
    </div>
          
@endsection