@extends('admin.layouts.layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">User Types</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#crateUserTypeModal" title="Add New User Type">
                                  <i class="fa fa-plus-square"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                  <i class="fas fa-minus"></i>
                                </button>
                              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                  <i class="fas fa-times"></i>
                              </button>
                            </div>
                        </div>
                        <div class="card-body">
                        <!-- User Types -->
                        <div class="card card-primary card-outline card-tabs">
                            <div class="card-header p-0 pt-1 border-bottom-0">
                                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-three-Active-tab" data-toggle="pill" href="#custom-tabs-three-Active" role="tab" aria-controls="custom-tabs-three-Active" aria-selected="true">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-Deleted-tab" data-toggle="pill" href="#custom-tabs-three-Deleted" role="tab" aria-controls="custom-tabs-three-Deleted" aria-selected="false">Deleted</a>
                                </li>

                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-three-tabContent">
                                    <div class="tab-pane fade show active" id="custom-tabs-three-Active" role="tabpanel" aria-labelledby="custom-tabs-three-Active-tab">
                                        <table id="active_user_table" class="table table-bordered table-striped">
                                          <thead>
                                          <tr>
                                            <th>Id</th>
                                            <th>Type</th>
                                            <th>Action</th>
                                          </tr>
                                          </thead>
                                          <tbody>

                                          </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-three-Deleted" role="tabpanel" aria-labelledby="custom-tabs-three-Deleted-tab">
                                        <table id="deleted_user_table" class="table table-bordered table-striped">
                                          <thead>
                                          <tr>
                                            <th>Id</th>
                                            <th>Type</th>
                                            <th>Action</th>
                                          </tr>
                                          </thead>
                                          <tbody>

                                          </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        <!-- /.card -->
                        </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Permissions</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#cratePermissionModal" title="Add New Permission">
                                  <i class="fa fa-list"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                  <i class="fas fa-minus"></i>
                                </button>
                              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                  <i class="fas fa-times"></i>
                              </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- User Permission -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">DataTable with default features</h3>
                  <div class="card-tools">
                      <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#crateUserModal" title="Add New User">
                        <i class="fa fa-user-plus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.0
                    </td>
                    <td>Win 95+</td>
                    <td>5</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.5
                    </td>
                    <td>Win 95+</td>
                    <td>5.5</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 6
                    </td>
                    <td>Win 98+</td>
                    <td>6</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet Explorer 7</td>
                    <td>Win XP SP2+</td>
                    <td>7</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>AOL browser (AOL desktop)</td>
                    <td>Win XP</td>
                    <td>6</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 1.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.7</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 1.5</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 2.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 3.0</td>
                    <td>Win 2k+ / OSX.3+</td>
                    <td>1.9</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Camino 1.0</td>
                    <td>OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Camino 1.5</td>
                    <td>OSX.3+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Netscape 7.2</td>
                    <td>Win 95+ / Mac OS 8.6-9.2</td>
                    <td>1.7</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Netscape Browser 8</td>
                    <td>Win 98SE+</td>
                    <td>1.7</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Netscape Navigator 9</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.0</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.1</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.1</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.2</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.2</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.3</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.3</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.4</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.4</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.5</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.5</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.6</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.6</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.7</td>
                    <td>Win 98+ / OSX.1+</td>
                    <td>1.7</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.8</td>
                    <td>Win 98+ / OSX.1+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Seamonkey 1.1</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Epiphany 2.20</td>
                    <td>Gnome</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>Safari 1.2</td>
                    <td>OSX.3</td>
                    <td>125.5</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>Safari 1.3</td>
                    <td>OSX.3</td>
                    <td>312.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>Safari 2.0</td>
                    <td>OSX.4+</td>
                    <td>419.3</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>Safari 3.0</td>
                    <td>OSX.4+</td>
                    <td>522.1</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>OmniWeb 5.5</td>
                    <td>OSX.4+</td>
                    <td>420</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>iPod Touch / iPhone</td>
                    <td>iPod</td>
                    <td>420.1</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>S60</td>
                    <td>S60</td>
                    <td>413</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 7.0</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>-</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 7.5</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td>-</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 8.0</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td>-</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 8.5</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td>-</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 9.0</td>
                    <td>Win 95+ / OSX.3+</td>
                    <td>-</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 9.2</td>
                    <td>Win 88+ / OSX.3+</td>
                    <td>-</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 9.5</td>
                    <td>Win 88+ / OSX.3+</td>
                    <td>-</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera for Wii</td>
                    <td>Wii</td>
                    <td>-</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Nokia N800</td>
                    <td>N800</td>
                    <td>-</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Nintendo DS browser</td>
                    <td>Nintendo DS</td>
                    <td>8.5</td>
                    <td>C/A<sup>1</sup></td>
                  </tr>
                  <tr>
                    <td>KHTML</td>
                    <td>Konqureror 3.1</td>
                    <td>KDE 3.1</td>
                    <td>3.1</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>KHTML</td>
                    <td>Konqureror 3.3</td>
                    <td>KDE 3.3</td>
                    <td>3.3</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>KHTML</td>
                    <td>Konqureror 3.5</td>
                    <td>KDE 3.5</td>
                    <td>3.5</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Tasman</td>
                    <td>Internet Explorer 4.5</td>
                    <td>Mac OS 8-9</td>
                    <td>-</td>
                    <td>X</td>
                  </tr>
                  <tr>
                    <td>Tasman</td>
                    <td>Internet Explorer 5.1</td>
                    <td>Mac OS 7.6-9</td>
                    <td>1</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>Tasman</td>
                    <td>Internet Explorer 5.2</td>
                    <td>Mac OS 8-X</td>
                    <td>1</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>NetFront 3.1</td>
                    <td>Embedded devices</td>
                    <td>-</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>NetFront 3.4</td>
                    <td>Embedded devices</td>
                    <td>-</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>Dillo 0.8</td>
                    <td>Embedded devices</td>
                    <td>-</td>
                    <td>X</td>
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>Links</td>
                    <td>Text only</td>
                    <td>-</td>
                    <td>X</td>
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>Lynx</td>
                    <td>Text only</td>
                    <td>-</td>
                    <td>X</td>
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>IE Mobile</td>
                    <td>Windows Mobile 6</td>
                    <td>-</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>PSP browser</td>
                    <td>PSP</td>
                    <td>-</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>Other browsers</td>
                    <td>All others</td>
                    <td>-</td>
                    <td>-</td>
                    <td>U</td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>

<!-- Create User Modal -->
<div class="modal fade" id="crateUserModal" tabindex="-1" role="dialog" aria-labelledby="crateuserModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="crateuserModalLabel">Create User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="createUserForm">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select class="form-control" id="role" name="role" required>
                            <option value="">Select Role</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="submitCreateUser">Create User</button>
            </div>
        </div>
    </div>
</div>

<!-- Create User Type Modal -->
<div class="modal fade" id="crateUserTypeModal" tabindex="-1" role="dialog" aria-labelledby="crateUserTypeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="crateUserTypeModalLabel">Create User Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="createUserTypeForm">
                    <div class="form-group">
                        <label for="userTypeName">User Type Name</label>
                        <input type="text" class="form-control" id="userTypeName" name="name" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Create User Type</button>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>

<!-- Create Permission Modal -->
<div class="modal fade" id="cratePermissionModal" tabindex="-1" role="dialog" aria-labelledby="cratePermissionModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cratePermissionModalLabel">Create Permission</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="createPermissionForm">
                    <div class="form-group">
                        <label for="permissionName">Permission Name</label>
                        <input type="text" class="form-control" id="permissionName" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="permissionDescription">Description</label>
                        <textarea class="form-control" id="permissionDescription" name="description" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="submitCreatePermission">Create Permission</button>
            </div>
        </div>
    </div>
</div>


{{-- Edit User Type Form --}}
<div class="modal fade" id="editUserTypeModal" tabindex="-1" role="dialog" aria-labelledby="cratePermissionModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cratePermissionModalLabel">Edit User Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editUserTypeForm">
                    <input type="hidden" id="editUserTypeId" name="id">
                    <div class="form-group">
                        <label for="editUserTypeName">User Type Name</label>
                        <input type="text" class="form-control" id="editUserTypeName" name="name" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update User Type</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


@endsection


@section('scripts')
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });

    $('#active_user_table').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });

    $('#deleted_user_table').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });

    // User Type Loading state
    var userTypeLoadingState = false;
    var userTypes = []

    refreshUserTypes()

    $('#createUserTypeForm').submit(function(e) {

      e.preventDefault();
      var formData = new FormData(this);
      // console.log(e);
      $.ajax({
        url: "/api/user-types",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function(data) {
          console.log(data);
          refreshUserTypes();
        },
        error: function(error) {
          console.log("Error creating user type",error);
          alert("Error creating user type, Please try again");
        }
      });
    });


    function addUserTypeToActiveTable(userType) {
      var actionButtons = '<div><button class="btn btn-sm btn-primary edit-user-type" data-id="' + userType._id + '"><i class="fa fa-edit" aria-hidden="true"></i></button> ' +
                          '<button class="btn btn-sm btn-danger delete-user-type" data-id="' + userType._id + '"><i class="fa fa-trash" aria-hidden="true"></i></button></div>';

      $('#active_user_table').DataTable().row.add([
        userType.index,
        userType.name,
        actionButtons
      ]).draw(false);
    }

    function addUserTypeToDeletedTable(userType) {
      var actionButtons = '<div><button class="btn btn-sm btn-primary restore-user-type" data-id="' + userType._id + '"><i class="fa fa-undo" aria-hidden="true"></i></button> ';

      $('#deleted_user_table').DataTable().row.add([
        userType.index,
        userType.name,
        actionButtons
      ]).draw(false);
    }
    function refreshUserTypes() {
      userTypeLoadingState = true;



      $.ajax({
        url: "/api/user-types",
        method: "GET",
        success: function(response) {
          if(response.status == 'success'){
            // console.log( response.data.deleted);
            $('#active_user_table').DataTable().clear();
            response.data.active.forEach(function(userType) {
              userType.index = response.data.active.indexOf(userType) + 1;
              addUserTypeToActiveTable(userType);
            });
            $('#deleted_user_table').DataTable().clear();
            response.data.deleted.forEach(function(userType) {
              userType.index = response.data.deleted.indexOf(userType) + 1;
              addUserTypeToDeletedTable(userType);
            });

          }
          userTypeLoadingState = false;
        },
        error: function(error) {
          console.log("Error fetching user types", error);
          alert("Error fetching user types. Please try again.");
          userTypeLoadingState = false;
        }
      });
    }

    $(document).on('click', '.edit-user-type', function() {
      var userTypeId = $(this).data('id');
      // Find the row that contains this button
        var row = $(this).closest('tr');

        // Get the DataTable instance
        var table = $('#active_user_table').DataTable();

        // Get the data for this row
        var rowData = table.row(row).data();


        // Open the edit modal and populate it with the user type data
        $('#editUserTypeModal').modal('show');
        $('#editUserTypeId').val(userTypeId);
        $('#editUserTypeName').val(rowData[1]);

        // Handle the form submission for editing
        $('#editUserTypeForm').submit(function(e) {
            e.preventDefault();
            $(document).Toasts('create', {
             class: 'bg-success',
             title: 'Loading',
             subtitle: 'In Progress',
             // body: data.message
             body: '<center><i class="fas fa-2x fa-sync-alt"></i><center>'
           })
            var formData = new FormData(this);

            var data = {'name' : formData.get('name')}

            $.ajax({
                url: "/api/user-types/" + userTypeId,
                type: "PUT",
                data: JSON.stringify(data),
                processData: false,
                contentType: "application/json",
                success: function(data) {
                    // console.log(data);
                     $(document).Toasts('create', {
                      class: 'bg-success',
                      title: 'Success',
                      subtitle: 'Message',
                      body: data.message

                    })
                    $('#editUserTypeModal').modal('hide');
                    refreshUserTypes();
                },
                error: function(error) {
                    console.log("Error updating user type", error);
                    alert("Error updating user type. Please try again.");
                }
            });
        });




    });

    $(document).on('click', '.delete-user-type', function() {
      var userTypeId = $(this).data('id');
      if (confirm("Are you sure you want to delete this user type?")) {
        // Implement delete functionality here
        console.log("Delete user type with ID:", userTypeId);
        $.ajax({
          url: "/api/user-types/" + userTypeId,
          type: "DELETE",
          success: function(data) {
            console.log("User type deleted successfully");
            $(document).Toasts('create', {
              class: 'bg-success',
              title: 'Success',
              subtitle: 'Message',
              body: 'User type deleted successfully'
            });
            refreshUserTypes();
          },
          error: function(error) {
            console.log("Error deleting user type", error);
            $(document).Toasts('create', {
              class: 'bg-danger',
              title: 'Error',
              subtitle: 'Message',
              body: 'Error deleting user type. Please try again.'
            });
          }
        });
      }
    });

    $(document).on('click', '.restore-user-type', function(){
      var userTypeId = $(this).data('id');
      if (confirm("Are you sure you want to restore this user type?")) {
        $.ajax({
          url: "/api/user-types/" + userTypeId + "/restore",
          type: "POST",
          success: function(data) {
            // console.log("User type restored successfully");
            $(document).Toasts('create', {
              class: 'bg-success',
              title: 'Success',
              subtitle: 'Message',
              body: 'User type restored successfully'
            });
            refreshUserTypes();
          },
          error: function(error) {
            console.log("Error restoring user type", error);
            $(document).Toasts('create', {
              class: 'bg-danger',
              title: 'Error',
              subtitle: 'Message',
              body: 'Error restoring user type. Please try again.'
            });
          }
        });
      }

    })

  });


</script>
@endsection
