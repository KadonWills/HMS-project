@extends('admin/admin')

@section('content')
<section id="main-content">
  <section class="wrapper">
    <h3> Users</h3>
    <div class="row mt">
      <div class="col-xl">
        <div style="padding-bottom: 10px;">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <span class="fas fa-user-plus fa-2x"> </span>
          </button>
        </div>
        <div class="content-panel">
          <section id="unseen">
            <div class="table-responsive">
              <table class="table table-striped table-hover">
                <thead>
                  <tr style="background-color: royalblue; color: white;">
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Login</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Address</th>
                    <th>Speciality</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th> Operations </th>
                  </tr>
                </thead>
                <tbody class=".table-hover" style="color:black;">
                  <tr>
                    <td>1</td>
                    <td>Serge Lea</td>
                    <td>Mbeune Mohammed</td>
                    <td>The best</td>
                    <td>M</td>
                    <td>01/01/1995</td>
                    <td>Awae</td>
                    <td>Doctor</td>
                    <td>sergelea@exemple.cm</td>
                    <td>6 985 632 125</td>
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <span class="fa fa-edit"> </span>
                      </button>
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                        <span class="fa fa-trash"> </span>
                      </button>
                    </td>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="panel-body reg-body">
          <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
              <label for="fname" class="col-md-4 control-label">First Name:</label>

              <div class="col-md-6">
                <input id="fname" type="text" class="form-control" name="fname" value="{{ old('fname') }}" required>

                @if ($errors->has('fname'))
                <span class="help-block">
                  <strong>{{ $errors->first('fname') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
              <label for="lname" class="col-md-4 control-label">Last Name:</label>

              <div class="col-md-6">
                <input id="lname" type="text" class="form-control" name="lname" value="{{ old('lname') }}" required>

                @if ($errors->has('lname'))
                <span class="help-block">
                  <strong>{{ $errors->first('lname') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
              <label for="dob" class="col-md-4 control-label">Date of Birth:</label>

              <div class="col-md-6">
                <input id="dob" type="date" class="form-control" name="dob" value="{{ old('dob') }}" required>

                @if ($errors->has('dob'))
                <span class="help-block">
                  <strong>{{ $errors->first('dob') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
              <label for="sex" class="col-md-4 control-label">Gender:</label>

              <div class="col-md-6">
                <select id="sex" name="sex" class="form-control" value="{{ old('dob') }}" required>
                  <option value=""></option>
                  <option value="saab">Female</option>
                  <option value="fiat">Male</option>
                </select>

                @if ($errors->has('sex'))
                <span class="help-block">
                  <strong>{{ $errors->first('sex') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('speciality') ? ' has-error' : '' }}">
              <label for="speciality" class="col-md-4 control-label">Speciality:</label>

              <div class="col-md-6">
                <select id="speciality" name="speciality" class="form-control" value="{{ old('dob') }}" required>
                  <option value=""></option>
                  <option value="saab">Doctor</option>
                  <option value="fiat">Nurse</option>
                  <option value="audi">Parameter Nurse</option>
                  <option value="audi">Laboratory Nurse</option>
                </select>

                @if ($errors->has('speciality'))
                <span class="help-block">
                  <strong>{{ $errors->first('speciality') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('phonenum') ? ' has-error' : '' }}">
              <label for="phonenum" class="col-md-4 control-label">Phone:</label>

              <div class="col-md-6">
                <input id="phonenum" type="tel" class="form-control" name="phonenum" value="{{ old('phonenum') }}"
                  required>

                @if ($errors->has('phonenum'))
                <span class="help-block">
                  <strong>{{ $errors->first('phonenum') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
              <label for="address" class="col-md-4 control-label">Address:</label>

              <div class="col-md-6">
                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}"
                  required>

                @if ($errors->has('address'))
                <span class="help-block">
                  <strong>{{ $errors->first('address') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('login') ? ' has-error' : '' }}">
              <label for="login" class="col-md-4 control-label">Login</label>

              <div class="col-md-6">
                <input id="login" type="text" class="form-control" name="login" value="{{ old('login') }}" required
                  autofocus>

                @if ($errors->has('login'))
                <span class="help-block">
                  <strong>{{ $errors->first('login') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 control-label">E-Mail Address:</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('login') ? ' has-error' : '' }}">
              <label for="login" class="col-md-4 control-label">Username:</label>

              <div class="col-md-6">
                <input id="login" type="text" class="form-control" name="login" value="{{ old('login') }}" required>

                @if ($errors->has('login'))
                <span class="help-block">
                  <strong>{{ $errors->first('login') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="col-md-4 control-label">Password:</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="password-confirm" class="col-md-4 control-label">Confirm
                Password:</label>

              <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
              </div>
            </div>

            <div class="modal-footer">
              <div class="form-group">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">
                    Register
                  </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection