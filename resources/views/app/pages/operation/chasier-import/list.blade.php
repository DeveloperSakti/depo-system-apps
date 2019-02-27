@extends('app.layouts.dashboard_layout')

@section('content')
<div class="section-header">
  <h1>Chasier Import</h1>
</div>

<div class="section-body">
  <div class="row">
    <div class="col-12 col-md-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>
            <form action="/operation/chasier-import/form">
              <button class="btn btn-primary"><i class="fas fa-plus"></i> New Chasier Import</button>
            </form>
          </h4>
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
                <th>No. Invoice</th>
                <th>LIFT OFF / WASH</th>
                <th>Consignee</th>
                <th>Plugging</th>
                <th>Storage</th>
                <th colspan="2">Print</th>
                <th>Action</th>
              </tr>
              <tr>
                <td>1</td>
                <td>xxxxxx</td>
                <td>xxxxxx</td>
                <td>xxxxxx</td>
                <td>xxxxxx</td>
                <td align="center"><button class="btn btn-success">Print Invoice</a></td>
                <td align="center"><a href="#" class="btn btn-warning">Print Ban Bongkar</a></td>
                <td align="center"><a href="#" class="btn btn-primary">Detail</a></td>
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
@endsection