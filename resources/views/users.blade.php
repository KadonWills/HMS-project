@extends('admin')

@section('content')
<section id="main-content">
  <section class="wrapper">
    <h3> Users</h3>
    <div class="row mt">
      <div class="col-lg-12">
        <div style="padding-bottom: 10px;">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          <span class="fas fa-user-plus fa-2x"> </span> 
        </button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          <span class="fas fa-eye fa-2x"> </span> 
        </button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          <span class="fas fa-user-edit fa-2x"> </span> 
        </button>
        </div>
        <div class="content-panel">
          <section id="unseen">
            <div class="table-responsive">
              <table class="table table-striped ">
                <thead>
                  <tr style="background-color: royalblue; color: white;">
                    <th>#</th>
                    <th>First Name</th>
                    <th class="numeric">Last Name</th>
                    <th class="numeric">Login</th>
                    <th class="numeric">Gender</th>
                    <th class="numeric">Date of Birth</th>
                    <th class="numeric">Address</th>
                    <th class="numeric">Speciality</th>
                    <th class="numeric">Email</th>
                    <th class="numeric">Phone</th>
                  </tr>
                </thead>
                <tbody class=".table-hover" style="color:black;">
                  <tr>
                    <td>1</td>
                    <td>AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
                    <td class="numeric">$1.38</td>
                    <td class="numeric">-0.01</td>
                    <td class="numeric">-0.36%</td>
                    <td class="numeric">$1.39</td>
                    <td class="numeric">$1.39</td>
                    <td class="numeric">$1.38</td>
                    <td class="numeric">9,395</td>
                    <td class="numeric">6 985 632 125</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section>
        </div>
        <!-- /content-panel -->
      </div>
      <!-- /col-lg-4 -->
    </div>
  </section>
  <!-- /wrapper -->
</section>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endsection