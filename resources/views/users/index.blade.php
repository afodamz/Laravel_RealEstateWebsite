@extends('layouts.app', ['activePage' => 'profile', 'titlePage' => __('User Profile')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Users</h4>
            <p class="card-category"> Here you can manage users</p>
          </div>
          <div class="card-body">
            <div class="row">


              <div class="col-12 text-right">
                <div class="panel-body">
                  <button class="btn btn-primary btn" data-toggle="modal" data-target="#myModal1">
                    Add New Admin
                  </button>
                  <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="myModalLabel">Add the User name and Password</h4>
                        </div>
                        <form class="form" method="POST" action="{{ route('register') }}">
                          @csrf

                          <div class="modal-body">
                            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                              <div class="input-group">
                                <input type="text" name="name" class="form-control" placeholder="{{ __('Name...') }}" value="{{ old('name') }}" required>
                              </div>
                              @if ($errors->has('name'))
                              <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                                <strong>{{ $errors->first('name') }}</strong>
                              </div>
                              @endif
                            </div>
                          </div>
                          <div class="modal-body">
                            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }} mt-3">
                              <div class="input-group">
                                <input type="email" name="email" class="form-control" placeholder="{{ __('Email...') }}" value="{{ old('email') }}" required>
                              </div>
                              @if ($errors->has('email'))
                              <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                                <strong>{{ $errors->first('email') }}</strong>
                              </div>
                              @endif
                            </div>
                          </div>

                          <div class="modal-body">
                            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
                              <div class="input-group">
                                <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password...') }}" required>
                              </div>
                              @if ($errors->has('password'))
                              <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                                <strong>{{ $errors->first('password') }}</strong>
                              </div>
                              @endif
                            </div>
                          </div>

                          <div class="modal-body">
                            <div class="bmd-form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }} mt-3">
                              <div class="input-group">
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Confirm Password...') }}" required>
                              </div>
                              @if ($errors->has('password_confirmation'))
                              <div id="password_confirmation-error" class="error text-danger pl-3" for="password_confirmation" style="display: block;">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                              </div>
                              @endif
                            </div>
                          </div>

                          <div class="modal-body">
                            <div class="form-check mr-auto ml-3 mt-3">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" id="policy" name="policy" {{ old('policy', 1) ? 'checked' : '' }}>
                                <span class="form-check-sign">
                                  <span class="check"></span>
                                </span>
                                {{ __('I agree with the ') }} <a href="#">{{ __('Privacy Policy') }}</a>
                              </label>
                            </div>
                          </div>

                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>


                            <div class="card-footer justify-content-center">
                              <button type="submit" name="in" class="btn btn-primary btn-link btn-lg">{{ __('Create account') }}</button>
                            </div>
                        </form>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>



          </div>
        </div>
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <tr>
                <th>
                  Name
                </th>
                <th>
                  Email
                </th>
                <th>
                  Creation date
                </th>
                <th class="text-right">
                  Actions
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  Admin Admin
                </td>
                <td>
                  admin@material.com
                </td>
                <td>
                  2020-02-24
                </td>
                <td class="td-actions text-right">
                  <div class="panel-body">
                    <button class="btn btn-primary btn" data-toggle="modal" data-target="#myModal1">
                      Edit
                    </button>
                    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Add the User name and Password</h4>
                          </div>
                          <form method="post">
                            <div class="modal-body">
                              <div class="form-group">
                                <label>Add new User name</label>
                                <input name="newus" class="form-control" placeholder="Enter User name">
                              </div>
                            </div>
                            <div class="modal-body">
                              <div class="form-group">
                                <label>New Password</label>
                                <input name="newps" class="form-control" placeholder="Enter Password">
                              </div>
                            </div>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                              <input type="submit" name="in" value="Add" class="btn btn-primary">
                          </form>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="ripple-container"></div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
</div>
</div>
</div>
@endsection