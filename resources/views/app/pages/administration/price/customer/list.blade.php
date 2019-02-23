@extends('app.layouts.dashboard_layout')

@section('content')
<div class="section-header">
    <h1>Customer Price</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
      <div class="breadcrumb-item"><a href="#">Tables</a></div>
      <div class="breadcrumb-item">Customer Price Form</div>
    </div>
  </div>

  <div class="section-body">
    <h2 class="section-title">Customer Price Table</h2>
    <p class="section-lead">Tabel Data Customer Price.</p>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header">
             <div class="row" style="width:100%;">
                <div class="col-12 col-lg-2 col-md-2">
                  <a href="/administration/price/customer/add" style="margin-left:1em;" class="btn btn-primary printbutton float-left"><span class=" fas fa-pencil-alt" ></span> Add</a>
                </div>
                <div class="col-12 col-lg-8 col-md-8">
                  <input class="form-control" id="myInput" type="text" placeholder="Masukkan data yang ingin dicari.." style="">
                </div>
                <div class="col-12 col-lg-2 col-lg-2">
                  <button class="btn btn-success printbutton float-right" onclick="exportTableToExcel('table')">
                    <span class="fas fa-file-export"></span>  Export to Excel
                  </button>
                </div>
              </div>
            </div>
            <div class="card-body ">
              <table class="table table-borderless table-responsive">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Customer Code</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Atterntion</th>
                    <th scope="col">Address</th>
                    <th scope="col">Telp/Fax</th>
                    <th scope="col">Box/Admin</th>
                    <th scope="col">MTYADMIN</th>
                    <th scope="col">MTYLIRTOFF</th>
                    <th scope="col">MTYLIFTON</th>
                    <th scope="col">MTYWASSHING</th>
                    <th scope="col">FCLADMIN</th>
                    <th scope="col">FCLLIFTOFF</th>
                    <th scope="col">FCLLIFTON</th>
                    <th scope="col">STORAGE</th>
                    <th scope="col">SEALFEE</th>
                    <th scope="col">PLUGGING</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                  </tr>
                </tbody>
              </table>
          </div>
        </div>    
      </div>
  </div>

@endsection