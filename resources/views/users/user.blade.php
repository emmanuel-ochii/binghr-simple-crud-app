@extends('users.layout.user_layout')

@section('content')

    <div class="datatable-toolbar">

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
            <a href="javascript:void(0);" class="button h-button is-primary is-elevated h-modal-trigger"
                style="background: #227056; box-shadow:none" data-modal="add-user-form-modal">
                <span class="icon">
                    <i aria-hidden="true" class="fas fa-plus"></i>
                </span>
                <span>Add User</span>
            </a>
        </div>
        {{-- Add User Modal --}}
        <div id="add-user-form-modal" class="modal h-modal is-big">
            <div class="modal-background h-modal-close"></div>
            <div class="modal-content">
                <div class="modal-card">
                    <form action="" method="POST" id="postForm">
                        @csrf
                        <input type="hidden" id="id_hidden" name="id" />

                        <header class="modal-card-head">
                            <h3>Add User</h3>
                            <button class="h-modal-close ml-auto" aria-label="close">
                                <i data-feather="x"></i>
                            </button>
                        </header>
                        <div class="modal-card-body">
                            <div class="inner-content">
                                <div class="result"></div>
                                <div class="modal-form">
                                    <div class="columns is-multiline">
                                        <div class="column is-12">
                                            <div class="field">
                                                <div class="control">
                                                    <input type="text" class="input" name="employee_id"
                                                        id="employee_id" placeholder="Employee ID *">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="column is-6">
                                            <div class="field">
                                                <div class="control">
                                                    <input type="text" class="input" name="first_name"
                                                        id="first_name" placeholder="First Name *">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column is-6">
                                            <div class="field">
                                                <div class="control">
                                                    <input type="text" class="input" name="last_name"
                                                        id="last_name" placeholder="Last Name *">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="column is-4">
                                            <div class="field">
                                                <div class="control">
                                                    <input type="text" class="input" name="email_id" id="email_id"
                                                        placeholder="Email ID *">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column is-4">
                                            <div class="field">
                                                <div class="control">
                                                    <input type="text" class="input" name="mobile_no"
                                                        id="mobile_no" placeholder="Mobile No *">
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
                                                                    <input type="radio" name="role_type" id="role_type"
                                                                        value="Super Admin">
                                                                    <div class="option-meta">
                                                                        <span>Super Admin</span>
                                                                    </div>
                                                                </div>
                                                                <div class="option-row">
                                                                    <input type="radio" name="role_type" id="role_type"
                                                                        value="Admin">
                                                                    <div class="option-meta">
                                                                        <span>Admin</span>
                                                                    </div>
                                                                </div>
                                                                <div class="option-row">
                                                                    <input type="radio" name="role_type" id="role_type"
                                                                        value="Employee">
                                                                    <div class="option-meta">
                                                                        <span>Employee</span>
                                                                    </div>
                                                                </div>
                                                                <div class="option-row">
                                                                    <input type="radio" name="role_type" id="role_type"
                                                                        value="HR Admin">
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
                                                    <input type="text" class="input" name="username" id="username"
                                                        placeholder="Username *">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column is-4">
                                            <div class="field">
                                                <div class="control">
                                                    <input type="password" class="input" name="password"
                                                        id="password" placeholder="Password *">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column is-4">
                                            <div class="field">
                                                <div class="control">
                                                    <input type="password" class="input"
                                                        name="password_confirmation" placeholder="Confrim Password *">
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
                                                                        <input type="checkbox" name="permission[]"
                                                                            id="permission[]" value="read">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="control">
                                                                        <input type="checkbox" name="permission[]"
                                                                            id="permission[]" value="write">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="control">
                                                                        <input type="checkbox" name="permission[]"
                                                                            id="permission[]" value="delete">
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>

                                                        <tr>
                                                            <div class="field">
                                                                <td> Admin</td>
                                                                <td>
                                                                    <div class="control">
                                                                        <input type="checkbox" name="permission_admin[]"
                                                                            id="permission_admin[]" value="read">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="control">
                                                                        <input type="checkbox" name="permission_admin[]"
                                                                            id="permission_admin[]" value="write">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="control">
                                                                        <input type="checkbox" name="permission_admin[]"
                                                                            id="permission_admin[]" value="delete">
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>

                                                        <tr>
                                                            <div class="field">
                                                                <td>Employee</td>
                                                                <td>
                                                                    <div class="control">
                                                                        <input type="checkbox" name="permission_employee[]"
                                                                            id="permission_employee[]" value="read">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="control">
                                                                        <input type="checkbox" name="permission_employee[]"
                                                                            id="permission_employee[]" value="write">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="control">
                                                                        <input type="checkbox" name="permission_employee[]"
                                                                            id="permission_employee[]" value="delete">
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>

                                                        <tr>
                                                            <div class="field">
                                                                <td>HR Admin</td>
                                                                <td>
                                                                    <div class="control">
                                                                        <input type="checkbox" name="permission_hr[]"
                                                                            id="permission_hr[]" value="read">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="control">
                                                                        <input type="checkbox" name="permission_hr[]"
                                                                            id="permission_hr[]" value="write">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="control">
                                                                        <input type="checkbox" name="permission_hr[]"
                                                                            id="permission_hr[]" value="delete">
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
                    </form>
                    <div class="modal-card-foot is-end">
                        <button type="submit" class="button h-button is-primary is-raised is-rounded"
                            style="box-shadow:none;background:#0395FF" id="createBtn">Add User</button>
                        <button type="button" class="button h-button is-rounded h-modal-close">Cancel</button>

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
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="page-content-inner">

        <!-- Datatable -->
        <div class="table-wrapper" data-simplebar>
            <h3 class="list-users px-6 py-5">List Users</h3>

            <table id="" class="table is-datatable is-hoverable table-is-bordered">
                <thead class="usertable">
                    <tr>
                        <th>Name</th>
                        <th style="width: fit-content"></th>
                        <th>Created Date</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($users) > 0)
                        @foreach ($users as $user)
                            <tr>
                                <td>
                                    <div class="flex-media">
                                        <div class="h-avatar is-small">
                                            <img class="avatar" src="https://via.placeholder.com/150x150"
                                                data-demo-src="/img/avatars/photos/7.jpg" alt="">
                                        </div>
                                        <div class="meta">
                                            <span style="font-size: 14px;font-weight:bold">{{ $user->first_name }}
                                                {{ $user->last_name }}</span>
                                            <span style="font-size: 12px">{{ $user->email_id }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    @if ($user->role_type === 'Super Admin')
                                        <span class="tag is-danger">Super Admin</span>
                                    @elseif ($user->role_type === 'Admin')
                                        <span class="tag is-info">Admin</span>
                                    @elseif ($user->role_type === 'Employee')
                                        <span class="tag is-success"> Employee</span>
                                    @else
                                        <span class="tag is-default">HR Admin</span>
                                    @endif
                                </td>
                                <td>{{ $user->created_at->format('d M, Y') }}</td>
                                <td>{{ $user->role_type }}</td>
                                <td>
                                    {{-- <a href="javascript:void(0);" type="button" class="button h-button h-modal-trigger"
                                        style="border: 0" data-modal="add-user-form-modal" value="{{ $user->id }}">
                                        <span class="icon">
                                            <i data-feather="edit-3"></i>
                                        </span>
                                    </a> --}}

                                    <a href="javascript:void(0);" class="button h-button h-modal-trigger" style="border: 0" data-modal="add-user-form-modal" data-id="{{ $user->id }}" data-title="{{ $user->employee_id }}" data-description="{{ $user->first_name }}" data-action="view">
                                        <span class="icon">
                                            <i data-feather="edit-3"></i>
                                        </span>
                                    </a>

                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#add-user-form-modal"
                                        data-id="{{ $user->id }}" data-title="{{ $user->employee_id }}"
                                        data-description="{{ $user->first_name }}" data-action="view"
                                        class="btn btn-info btn-sm"> View </a>


                                    <a href="javascript:void(0);" onclick="deletePost({{$user->id}})" class="button h-button" style="border: 0">
                                        <span class="icon">
                                            <i data-feather="trash-2"></i>
                                        </span>
                                    </a>

                                 

                                </td>
                            </tr>
                        @endforeach
                    @else
                        <div class="content mx-auto" style="width: 50%; text-align:center">
                            <blockquote>
                                <p>Oops !! No user details available.</p>
                            </blockquote>
                        </div>
                    @endif
                </tbody>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script src="{{ asset('js/ajax.js') }}"></script>
@endpush
