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

        <div class="buttons">
            <a class="button h-button is-primary is-elevated h-modal-trigger" style="background: #227056; box-shadow:none" data-modal="add-user-form-modal">
                <span class="icon">
                  <i aria-hidden="true" class="fas fa-plus"></i>
              </span>
                <span>Add User</span>
            </a>
        </div>
        <!--Modal Form-->
        <div id="add-user-form-modal" class="modal h-modal is-big" >
            <div class="modal-background h-modal-close"></div>
            <div class="modal-content">
                <div class="modal-card">
                    <header class="modal-card-head">
                        <h3>Create Project</h3>
                        <button class="h-modal-close ml-auto" aria-label="close">
                            <i data-feather="x"></i>
                        </button>
                    </header>
                    <div class="modal-card-body">
                        <div class="inner-content">
                            <div class="modal-form">
                                <div class="columns is-multiline">
                                    <div class="column is-12">
                                        <div class="field">
                                            <label>Project Name *</label>
                                            <div class="control">
                                                <input type="text" class="input" placeholder="Ex: A cool project">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-6">
                                        <div class="field">
                                            <label>Project Members</label>
                                            <div class="control is-combo">
                                                <div class="stacked-combo-box has-rounded-images">
                                                    <div class="box-inner">
                                                        <div class="combo-item">
                                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/placeholder.jpg" alt="">
                                                            <span class="selected-item">Add people</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-chevron">
                                                        <i data-feather="chevron-down"></i>
                                                    </div>
                                                    <div class="box-dropdown">
                                                        <div class="dropdown-inner has-slimscroll">
                                                            <ul>
                                                                <li>
                                                                    <span class="item-icon">
                                                                      <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/22.jpg" alt="">
                                                                  </span>
                                                                    <span class="item-name">Jimmy H.</span>
                                                                    <span class="checkmark">
                                                                      <i data-feather="check"></i>
                                                                  </span>
                                                                </li>
                                                                <li>
                                                                    <span class="item-icon">
                                                                      <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/8.jpg" alt="">
                                                                  </span>
                                                                    <span class="item-name">Erik K.</span>
                                                                    <span class="checkmark">
                                                                      <i data-feather="check"></i>
                                                                  </span>
                                                                </li>
                                                                <li>
                                                                    <span class="item-icon">
                                                                      <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/7.jpg" alt="">
                                                                  </span>
                                                                    <span class="item-name">Alice C.</span>
                                                                    <span class="checkmark">
                                                                      <i data-feather="check"></i>
                                                                  </span>
                                                                </li>
                                                                <li>
                                                                    <span class="item-icon">
                                                                      <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/25.jpg" alt="">
                                                                  </span>
                                                                    <span class="item-name">Melany W.</span>
                                                                    <span class="checkmark">
                                                                      <i data-feather="check"></i>
                                                                  </span>
                                                                </li>
                                                                <li>
                                                                    <span class="item-icon">
                                                                      <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/12.jpg" alt="">
                                                                  </span>
                                                                    <span class="item-name">Joshua S.</span>
                                                                    <span class="checkmark">
                                                                      <i data-feather="check"></i>
                                                                  </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-6">
                                        <div class="field">
                                            <label>Project Type *</label>
                                            <div class="control">
                                                <div class="h-select">
                                                    <div class="select-box">
                                                        <span>Select a type</span>
                                                    </div>
                                                    <div class="select-icon">
                                                        <i data-feather="chevron-down"></i>
                                                    </div>
                                                    <div class="select-drop has-slimscroll-sm">
                                                        <div class="drop-inner">
                                                            <div class="option-row">
                                                                <input type="radio" name="project_type">
                                                                <div class="option-meta">
                                                                    <span>Web development</span>
                                                                </div>
                                                            </div>
                                                            <div class="option-row">
                                                                <input type="radio" name="project_type">
                                                                <div class="option-meta">
                                                                    <span>Design</span>
                                                                </div>
                                                            </div>
                                                            <div class="option-row">
                                                                <input type="radio" name="project_type">
                                                                <div class="option-meta">
                                                                    <span>Marketing</span>
                                                                </div>
                                                            </div>
                                                            <div class="option-row">
                                                                <input type="radio" name="project_type">
                                                                <div class="option-meta">
                                                                    <span>Software</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-6">
                                        <div class="field">
                                            <label>Project Budget *</label>
                                            <div class="control">
                                                <input type="text" class="input" placeholder="Ex: $3,500">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-6">
                                        <div class="field">
                                            <label>Project URL *</label>
                                            <div class="control">
                                                <input type="text" class="input" placeholder="Ex: https://project.com">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-12">
                                        <div class="field">
                                            <label>Description *</label>
                                            <div class="control">
                                                <textarea class="textarea" rows="3" placeholder="Details about the project..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-card-foot is-end">
                        <a class="button h-button is-primary is-raised is-rounded" style="box-shadow:none;background:#0395FF" >Add User</a>
                        <a class="button h-button is-rounded h-modal-close">Cancel</a>
                    </div>
                </div>
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
<script src="{{asset('js/datatables.js')}}" async></script>
@endpush
