@extends('app')

@section('content')
    <!-- BEGIN #content -->
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">

            <div>
                <h1 class="page-header mb-0">Users</h1>
            </div>

            <!-- <div class="ms-auto">
                                                                                                            <a href="create_task.html" class="btn btn-primary"><i class="fa fa-plus-circle fa-fw me-1"></i> Create Task</a>
                                                                                                        </div> -->

            <div class="ms-auto d-none d-sm-block">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUser"><i
                        class="fa fa-plus-circle fa-fw me-1"></i> Add New User
                </button>
            </div>

            <div class="d-none d-sm-block" style="margin-left: 4px;">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#"><i
                        class="fas fa-sign-out-alt"></i> Sign Out All Users
                </button>
            </div>

            <div class="d-none d-sm-block" style="margin-left: 4px;">
                <a href="tasks.html" class="btn btn-danger"><i class="fas fa-trash-alt fa-fw me-1"></i> Delete </a>
            </div>

            <div class="ms-auto d-block d-sm-none">
                <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addUser">New User</a></li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#">Sign Out All Users</a></li>
                        <li><a class="dropdown-item" href="#">Delete</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card">
            <ul class="nav nav-tabs nav-tabs-v2 px-4">
                <li class="nav-item me-3"><a href="#allTab" class="nav-link active px-2" data-bs-toggle="tab">All</a></li>
                <li class="nav-item me-3"><a href="#deletedTab" class="nav-link px-2" data-bs-toggle="tab">Active</a></li>
                <li class="nav-item me-3"><a href="#deletedTab" class="nav-link px-2" data-bs-toggle="tab">Suspended</a>
                </li>
            </ul>
            <div class="tab-content p-4">
                <div class="tab-pane fade show active" id="allTab">
                    <!-- BEGIN input-group -->
                    <div class="d-none d-md-block d-lg-block">
                        <div class="input-group mb-4">
                            <div class="flex-fill position-relative">
                                <div class="input-group">
                                    <input type="text" class="form-control ps-35px" placeholder="Search in tasks..." />
                                    <div class="input-group-text position-absolute top-0 bottom-0 bg-none border-0 pe-0"
                                        style="z-index: 1020;">
                                        <i class="fa fa-search opacity-5"></i>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-default dropdown-toggle" type="button" data-bs-toggle="dropdown"><span
                                    class="d-none d-md-inline">Designation</span><span class="d-inline d-md-none"><i
                                        class="fa fa-credit-card"></i></span> &nbsp;</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Partner</a>
                                <a class="dropdown-item" href="#">Associate</a>
                                <a class="dropdown-item" href="#">Legal Assitance</a>
                                <a class="dropdown-item" href="#">Secretary or Clerk</a>
                                <a class="dropdown-item" href="#">Paralegal</a>
                                <a class="dropdown-item" href="#">Intern</a>
                            </div>
                            <button class="btn btn-primary" type="button"><span
                                    class="d-none d-md-inline">Search</span><span class="d-inline d-md-none"><i
                                        class="fa fa-check"></i></span></button>
                            <button class="btn btn-default" type="button">Clear</button>
                        </div>
                    </div>
                    <!-- END input-group -->

                    <!-- BEGIN table -->
                    <div class="table-responsive">
                        <table class="table table-hover text-nowrap" style="font-size:0.85em;">
                            <thead>
                                <tr>
                                    <th class="border-top-0 pt-0 pb-2"></th>
                                    <th class="border-top-0 pt-0 pb-2">Action</th>
                                    <th class="border-top-0 pt-0 pb-2">Name</th>
                                    <th class="border-top-0 pt-0 pb-2">Email</th>
                                    <th class="border-top-0 pt-0 pb-2">Billing Rate</th>
                                    <th class="border-top-0 pt-0 pb-2">Designation</th>
                                    <th class="border-top-0 pt-0 pb-2">Practice Area</th>
                                    <th class="border-top-0 pt-0 pb-2">Status</th>
                                    <th class="border-top-0 pt-0 pb-2 text-end">Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td class="w-10px align-middle">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="product1">
                                            <label class="form-check-label" for="product1"></label>
                                        </div>
                                    </td>
                                    <td class="align-right">
                                        <div class="btn-group" role="group" aria-label="...">
                                            <button type="button" class="btn btn-default btn-sm"><i
                                                    class="far fa-edit"></i></button>
                                            <button type="button" class="btn btn-default btn-sm"><i
                                                    class="far fa-trash-alt text-red"></i></button>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        @if($user->full_name)
                                        <i class="fas fa-circle text-success fa-xs"></i>
                                        @endif
                                        <a href="user_show.html" class="text-decoration-none">{{ $user->full_name ?? '-' }}</a></td>
                                    <td class="align-middle">{{ $user->email }}</td>
                                    <td class="align-middle">$75.00/hr</td>
                                    <td>Partner</td>
                                    <td>Estate, Family, Wills</td>
                                    <td><span class="badge bg-primary">ACTIVE</span></td>
                                    <td class="align-middle">{{ $user->created_date }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- END table -->
                </div>
            </div>
        </div>
    </div>
    <!-- END #content -->

    <!-- Start of New User Modal -->
    <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUser" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addUser">Add New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="add_new_user_form">
                    <div class="modal-body">
                        <p class="alert alert-sm alert-success hidden" id="validation_success_message"></p>
                        <div class="row mb-2">
                            <div class="col-6 mb-1">
                                <label style="margin-bottom:0px;">Email</label>
                                <input type="email" name="email" class="form-control form-control-sm"
                                    placeholder="Enter task name">
                                <p class="mt-1 text-red" data-tag-type="validation-error" id="validation_email"></p>
                            </div>
                            <div class="col-6 mb-1">
                                <label>Subscriber Type</label>
                                <select class="form-select form-select-sm" name="subscrier_type"
                                    aria-label="Default select example">
                                    <option selected>Attorney</option>
                                    <option>Non-attorney</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-6 mb-1">
                                <label>Group</label>
                                <select class="form-select form-select-sm" name="group"
                                    aria-label="Default select example">
                                    <option value="1">Everyone</option>
                                    <option value="2">Group Corporate</option>
                                    <option value="3">Group Family</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label>Permission</label>
                                <select class="form-select form-select-sm" name="permission"
                                    aria-label="Default select example">
                                    <option selected>Administrator</option>
                                    <option value="1">Accounts</option>
                                    <option value="2">Reports</option>
                                    <option value="3">Billings</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" id="send_invitation" class="btn btn-primary">Send Invitation</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End of New User Modal -->
@endsection

@section('script')
    <script>
        const validationErrorInputList = $("[data-tag-type='validation-error']");
        const validationSuccessMessage = $("#validation_success_message");

        $('#datepicker').datepicker({
            autoclose: true
        });

        $("#send_invitation").on("click", function() {
            const formData = $("#add_new_user_form").serializeArray();
            const payload = {};

            formData.forEach((value) => {
                payload[value.name] = value.value;
            });

            validationErrorInputList.each((key, value) => {
                $(value).text("");
            })

            validationSuccessMessage.text("").hide();

            axios.post("{{ route('manage-user.action') }}", payload)
                .then(({
                    data
                }) => {
                    validationSuccessMessage.text(data.message).show();
                })
                .catch(({
                    response: {
                        data
                    }
                }) => {
                    if (data.code === 403) {
                        for (const key in data.data) {
                            $(`#validation_${key}`).text(data.data[key]);
                        }
                    }
                })
        })
    </script>
@endsection
