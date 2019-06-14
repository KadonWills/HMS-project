@extends('admin')

@section('content')
<section id="main-content">
        <section class="wrapper">
          <h3> Users</h3>
          <div class="row mt">
            <div class="col-lg-12">
              <div class="content-panel">
                <section id="unseen">
                        <div class="table-responsive">
                  <table class="table table-bordered table-striped " >
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
                        <td>AAC</td>
                        <td>AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
                        <td class="numeric">$1.38</td>
                        <td class="numeric">-0.01</td>
                        <td class="numeric">-0.36%</td>
                        <td class="numeric">$1.39</td>
                        <td class="numeric">$1.39</td>
                        <td class="numeric">$1.38</td>
                        <td class="numeric">9,395</td>
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
@endsection