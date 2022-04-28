@extends('users.layout.user_layout')

@section('content')
    <!-- User -->
    <div class="datatable-toolbar">
        <div class="field has-addons is-disabled">
            <p class="control">
                <button class="button h-button">
                    <span class="icon is-small">
                        <i aria-hidden="true" class="fas fa-check"></i>
                    </span>
                    <span>Promote</span>
                </button>
            </p>
            <p class="control">
                <button class="button h-button">
                    <span class="icon is-small">
                        <i aria-hidden="true" class="fas fa-times"></i>
                    </span>
                    <span>Delete</span>
                </button>
            </p>
            <p class="control">
                <button class="button h-button">
                    <span class="icon is-small">
                        <i aria-hidden="true" class="fas fa-arrow-right"></i>
                    </span>
                    <span>Transfer</span>
                </button>
            </p>
        </div>
        @if ($message = Session::get('success'))
            <div class="message is-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        @if ($errors->any())
            <div class="message is-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="buttons">
            <button class="button h-button is-primary is-elevated h-modal-trigger"
                style="background: #227056; box-shadow:none" data-modal="add-user-form-modal">
                <span class="icon">
                    <i aria-hidden="true" class="fas fa-plus"></i>
                </span>
                <span>Add User</span>
            </button>
        </div>
        <!--Modal Form-->
        <div id="add-user-form-modal" class="modal h-modal is-big">
            <div class="modal-background h-modal-close"></div>
            <div class="modal-content">
                <form action="{{ route('user.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="modal-card">
                        <header class="modal-card-head">
                            <h3>Add User</h3>
                            <button type="button" class="h-modal-close ml-auto" aria-label="close">
                                <i data-feather="x"></i>
                            </button>
                        </header>
                        <div class="modal-card-body">
                            <div class="inner-content">
                                <div class="modal-form">
                                    <div class="columns is-multiline">
                                        <div class="column is-12">
                                            <div class="field">
                                                <div class="control">
                                                    <input type="text" class="input" name="employee_id"
                                                        placeholder="Employee ID *">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="column is-6">
                                            <div class="field">
                                                <div class="control">
                                                    <input type="text" class="input" name="first_name"
                                                        placeholder="First Name *">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column is-6">
                                            <div class="field">
                                                <div class="control">
                                                    <input type="text" class="input" name="last_name"
                                                        placeholder="Last Name *">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="column is-4">
                                            <div class="field">
                                                <div class="control">
                                                    <input type="text" class="input" name="email_id"
                                                        placeholder="Email ID *">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column is-4">
                                            <div class="field">
                                                <div class="control">
                                                    <input type="text" class="input" name="mobile_no"
                                                        placeholder="Mobile No *">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column is-4">
                                            <div class="field">
                                                <div class="control">
                                                    <div class="h-select">
                                                        <div class="select-box">
                                                            <span>Select Role Type *</span>
                                                        </div>
                                                        <div class="select-icon">
                                                            <i data-feather="chevron-down"></i>
                                                        </div>
                                                        <div class="select-drop has-slimscroll-sm">
                                                            <div class="drop-inner">
                                                                <div class="option-row">
                                                                    <input type="radio" name="role_type" value="Super Admin">
                                                                    <div class="option-meta">
                                                                        <span>Super Admin</span>
                                                                    </div>
                                                                </div>
                                                                <div class="option-row">
                                                                    <input type="radio" name="role_type" value="Admin">
                                                                    <div class="option-meta">
                                                                        <span>Admin</span>
                                                                    </div>
                                                                </div>
                                                                <div class="option-row">
                                                                    <input type="radio" name="role_type" value="Employee">
                                                                    <div class="option-meta">
                                                                        <span>Employee</span>
                                                                    </div>
                                                                </div>
                                                                <div class="option-row">
                                                                    <input type="radio" name="role_type" value="HR Admin">
                                                                    <div class="option-meta">
                                                                        <span>HR Admin</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="column is-4">
                                            <div class="field">
                                                <div class="control">
                                                    <input type="text" class="input" name="username"
                                                        placeholder="Username *">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column is-4">
                                            <div class="field">
                                                <div class="control">
                                                    <input type="text" class="input" name="password"
                                                        placeholder="Password *">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column is-4">
                                            <div class="field">
                                                <div class="control">
                                                    <input type="text" class="input" name="password_confirmation"
                                                        placeholder="Confrim Password *">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="column is-12">
                                            <div class="content">
                                                <table>
                                                    <thead class="modal-header">
                                                        <tr>
                                                            <th>Module Permission</th>
                                                            <th>Read</th>
                                                            <th>Write</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <div class="field">
                                                                <td>Super Admin</td>
                                                                <td>
                                                                    <div class="control">
                                                                        <input type="checkbox" name="permission[]" value="read">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="control">
                                                                        <input type="checkbox" name="permission[]" value="write">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="control">
                                                                        <input type="checkbox" name="permission[]" value="delete">
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="field">
                                                                <td> Admin</td>
                                                                <td>
                                                                    <div class="control">
                                                                        <input type="checkbox" checked>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="control">
                                                                        <input type="checkbox" checked>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="control">
                                                                        <input type="checkbox" checked>
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="field">
                                                                <td>Employee</td>
                                                                <td>
                                                                    <div class="control">
                                                                        <input type="checkbox" checked>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="control">
                                                                        <input type="checkbox" checked>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="control">
                                                                        <input type="checkbox" checked>
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="field">
                                                                <td>HR Admin</td>
                                                                <td>
                                                                    <div class="control">
                                                                        <input type="checkbox" checked>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="control">
                                                                        <input type="checkbox" checked>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="control">
                                                                        <input type="checkbox" checked>
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>

                                                    </tbody>
                                                </table>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-card-foot is-end">
                            <button type="submit" class="button h-button is-primary is-raised is-rounded"
                                style="box-shadow:none;background:#0395FF">Add User</button>
                            <button type="button" class="button h-button is-rounded h-modal-close">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="page-content-inner">

        <!-- Datatable -->
        <div class="table-wrapper" data-simplebar>
            <div class="px-3 py-5">
                <h1 style="font-weight:400;font-size:20px">List Users</h1>
            </div>
            <table id="users-datatable" class="table is-datatable is-hoverable table-is-bordered">
                <thead>
                    <tr>
                        <th>
                            <div class="control">
                                <label class="checkbox is-primary is-outlined is-circle">
                                    <input type="checkbox">
                                    <span></span>
                                </label>
                            </div>
                        </th>
                        <th>Picture</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>

        </div>

        <div id="paging-first-datatable" class="pagination datatable-pagination">
            <div class="datatable-info">
                <span></span>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/datatables.js') }}" async></script>
@endpush
