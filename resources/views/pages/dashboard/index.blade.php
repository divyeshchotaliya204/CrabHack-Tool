@extends('app')

@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <h5 style="margin-bottom:0px;">Hi, Michael.</h5><small class="text-muted">Last logged in on 1 Nov 2022 at
                    2.22pm</small>
            </div>
            <div class="ms-auto widget-user-list mx-2">
                <div class="widget-user-list-item"><a href="#" class="widget-user-list-link"><img
                            src="assets/img/user/user-1.jpg" alt="" /></a></div>
                <div class="widget-user-list-item"><a href="#" class="widget-user-list-link"><img
                            src="assets/img/user/user-2.jpg" alt="" /></a></div>
                <div class="widget-user-list-item"><a href="#" class="widget-user-list-link"><img
                            src="assets/img/user/user-3.jpg" alt="" /></a></div>
                <div class="widget-user-list-item"><a href="#"
                        class="widget-user-list-link bg-gray-200 text-gray-500 fs-12px font-weight-600">+6</a></div>
            </div>
            <div class="btn-group" role="group">
                <button id="btnGroupIndex1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fa fa-plus-circle fa-fw me-1"></i>
                    Create New
                </button>
                <ul class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="btnGroupIndex1" style="right:0;">
                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#newTimeEntry">Time
                            Entry</a></li>
                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                            data-bs-target="#newExpenseEntry">Expense Entry</a></li>
                    <li><a class="dropdown-item" href="create_matter.html">Lead</a></li>
                    <li><a class="dropdown-item" href="create_contact.html">Contact</a></li>
                    <li><a class="dropdown-item" href="create_matter.html">Matter</a></li>
                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                            data-bs-target="#newTaskTest">Deadline</a></li>
                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                            data-bs-target="#newMeeting">Meeting</a></li>
                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#newNote">Notes</a>
                    </li>
                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#fundRequest">Fund
                            Request</a></li>
                    <li><a class="dropdown-item" href="pay_invoice.html">Record Payment</a></li>
                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                            data-bs-target="#TransferFund">Transfer Fund</a></li>
                </ul>
            </div>
        </div>

        <div class="card">
            <ul class="nav nav-tabs nav-tabs-v2 px-4">
                <li class="nav-item me-3"><a href="#allTab" class="nav-link active px-2" data-bs-toggle="tab">Important
                        Deadlines</a>
                </li>
                <li class="nav-item me-3"><a href="#personalTab" class="nav-link px-2" data-bs-toggle="tab">Personal</a>
                </li>
                <li class="nav-item me-3"><a href="#practice" class="nav-link px-2" data-bs-toggle="tab">My Practice</a>
                </li>
            </ul>
            <div class="tab-content p-4">
                <div class="tab-pane fade show active" id="allTab">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <div class="card-header fw-600">Today, Nov 28</div>
                                        <div class="widget-reminder">
                                            <div class="widget-reminder-item">
                                                <div class="widget-reminder-time">09:30<br>10:30</div>
                                                <div class="widget-reminder-divider" style="background-color: #663399;">
                                                </div>
                                                <div class="widget-reminder-content">
                                                    <div class="fw-600">Team Check-in Meeting</div>
                                                    <div class="fs-13px"> - Conference Room</div>
                                                </div>
                                            </div>
                                            <div class="widget-reminder-item">
                                                <div class="widget-reminder-time">12:30<br>10:30</div>
                                                <div class="widget-reminder-divider bg-success"></div>
                                                <div class="widget-reminder-content">
                                                    <div class="fw-600">Lunch with Senior Partners</div>
                                                    <div class="fs-13px"> - Conference Room</div>
                                                </div>
                                            </div>
                                            <div class="widget-reminder-item">
                                                <div class="widget-reminder-time">14:00<br>16:00</div>
                                                <div class="widget-reminder-divider" style="background-color:#ffe300;">
                                                </div>
                                                <div class="widget-reminder-content">
                                                    <div class="fw-600">Review Matter #004</div>
                                                    <div class="fs-13px"> - Conference Room</div>
                                                    <div class="d-flex align-items-center fs-13px mt-2">
                                                        <div class="flex-fill d-flex align-items-center">
                                                            <img src="assets/img/user/user-3.jpg" alt=""
                                                                width="16" class="rounded-circle me-2" /> Richard
                                                            Leong
                                                        </div>
                                                        <a href="#" class="ms-auto">Contact</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-header fw-600">Tomorrow, Nov 29</div>
                                        <div class="widget-reminder">
                                            <div class="widget-reminder-item">
                                                <div class="widget-reminder-time">All day</div>
                                                <div class="widget-reminder-divider bg-gray-300"></div>
                                                <div class="widget-reminder-content">
                                                    <div class="fw-600">Scott Birthday</div>
                                                </div>
                                            </div>
                                            <div class="widget-reminder-item">
                                                <div class="widget-reminder-time">09:00<br />12:30</div>
                                                <div class="widget-reminder-divider bg-warning"></div>
                                                <div class="widget-reminder-content">
                                                    <div class="fw-600">Court Hearing - Matter #0121</div>
                                                    <div class="fs-13px"> - Centre County District Court</div>
                                                </div>
                                            </div>
                                            <div class="widget-reminder-item">
                                                <div class="widget-reminder-time">02:30<br />03:45</div>
                                                <div class="widget-reminder-divider" style="background-color:#39b1d8;">
                                                </div>
                                                <div class="widget-reminder-content">
                                                    <div class="fw-600">Team Debrief - Matter #0121</div>
                                                    <div class="fs-13px"> - Conference Room</div>
                                                </div>
                                            </div>
                                            <div class="widget-reminder-item">
                                                <div class="widget-reminder-time">05:30<br />06:30</div>
                                                <div class="widget-reminder-divider" style="background-color:#1CBD36;">
                                                </div>
                                                <div class="widget-reminder-content">
                                                    <div class="fw-600">Client Appt - Ms Nicole Kidman</div>
                                                    <div class="fs-13px"> - Panera Cafe</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 mb-3">
                                    <div class="card">
                                        <div class="card-header"><strong>Deadlines to settle in the next 30 days</strong>
                                        </div>
                                        <div class="card-body">
                                            <dl class="row">
                                                <dt class="col-sm-3">11 Nov 2022</dt>
                                                <dd class="col-sm-9"><a href="#"
                                                        class="text-decoration-none">Plaintiff to file affidavit</a> -
                                                    Matter #001 [Ms Carolyn Wise]</dd>
                                                <dt class="col-sm-3">11 Nov 2022</dt>
                                                <dd class="col-sm-9"><a href="#"
                                                        class="text-decoration-none">Defendant to file rebuttal</a> -
                                                    Matter #012 [Harrison & Sons Co]</dd>
                                                <dt class="col-sm-3">20 Nov 2022</dt>
                                                <dd class="col-sm-9"><a href="#"
                                                        class="text-decoration-none">Parties to file submission</a> -
                                                    Matter #010 [Mr Kyle Adam]</dd>
                                                <br>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="personalTab">
                    <!-- BEGIN row -->
                    <div class="row" data-masonry='{"percentPosition": true }'>
                        <div class="col-xl-12">
                            <!-- BEGIN row -->
                            <div class="row">
                                <!-- BEGIN col-6 -->
                                <div class="col-sm-4">
                                    <!-- BEGIN card -->
                                    <div class="card mb-4 overflow-hidden fs-13px border-0" style="min-height: 199px;">
                                        <!-- BEGIN card-img-overlay -->
                                        <div id="chartHour">

                                        </div>
                                        <!-- BEGIN card-body -->
                                    </div>
                                    <!-- END card -->

                                    <!-- BEGIN card -->
                                    <div class="card mb-4 overflow-hidden fs-13px border-0" style="min-height: 199px;">
                                        <div id="chartCollection"></div>
                                    </div>
                                    <!-- END card -->
                                </div>

                                <div class="col-sm-4">
                                    <!-- BEGIN card -->
                                    <div class="card mb-4 overflow-hidden fs-13px border-0" style="min-height: 199px;">
                                        <div id="barchart"></div>
                                    </div>
                                    <!-- END card -->

                                    <!-- BEGIN card -->
                                    <div class="card mb-4 overflow-hidden fs-13px" style="min-height: 199px;">
                                        <div class="card-body">
                                            <!-- title -->
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="flex-fill fw-600 fs-16px">Clients Owe me</div>
                                            </div>

                                            <!-- list -->
                                            <div>
                                                <div class="row mb-2">
                                                    <div class="col-6">Acme Creative Inc.</div>
                                                    <div class="col-6 text-end">$5,400.00</div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6">Harrington & Son Co</div>
                                                    <div class="col-6 text-end">$6,000.00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END card -->
                                </div>
                                <div class="col-sm-4">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="d-flex mb-3">
                                                <div class="flex-grow-1">
                                                    <h5 class="mb-1">Quote to Follow Up</h5>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <h3 class="mb-1">5</h3>
                                                    <div class="text-success fw-600 fs-13px">
                                                        <i class="fa fa-caret-up"></i> +10.00%
                                                    </div>
                                                </div>
                                                <div
                                                    class="w-50px h-50px bg-warning-transparent-2 rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="fas fa-file-invoice fa-lg text-warning"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="d-flex mb-3">
                                                <div class="flex-grow-1">
                                                    <h5 class="mb-1">Bill Awaiting Payment</h5>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <h3 class="mb-1 text-">7</h3>
                                                    <div class="text-danger fw-600 fs-13px">
                                                        <i class="fa fa-caret-up"></i> +15.5%
                                                    </div>
                                                </div>
                                                <div
                                                    class="w-50px h-50px bg-success-transparent-2 rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="fas fa-file-invoice-dollar fa-lg text-success"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-3 bg-red border-0">
                                        <div class="card-body">
                                            <div class="d-flex mb-3">
                                                <div class="flex-grow-1">
                                                    <h5 class="mb-1 text-white">Bill Overdue</h5>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <h3 class="mb-1 text-white">5</h3>
                                                    <div class="text-white fw-600 fs-13px">
                                                        <i class="fa fa-caret-up"></i> +13.59%
                                                    </div>
                                                </div>
                                                <div
                                                    class="w-50px h-50px bg-primary-transparent-2 rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="fas fa-file-invoice-dollar fa-lg text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END row -->

                            <!-- 								<div class="row">
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <div class="d-flex mb-3">
                                                    <div class="flex-grow-1">
                                                        <h5 class="mb-1">Quote to Follow Up</h5>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <h3 class="mb-1">5</h3>
                                                        <div class="text-success fw-600 fs-13px">
                                                            <i class="fa fa-caret-up"></i> +10.00%
                                                        </div>
                                                    </div>
                                                    <div class="w-50px h-50px bg-warning-transparent-2 rounded-circle d-flex align-items-center justify-content-center"><i class="fas fa-file-invoice fa-lg text-warning"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <div class="d-flex mb-3">
                                                    <div class="flex-grow-1">
                                                        <h5 class="mb-1">Bill Awaiting Payment</h5>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <h3 class="mb-1 text-">7</h3>
                                                        <div class="text-danger fw-600 fs-13px">
                                                            <i class="fa fa-caret-up"></i> +15.5%
                                                        </div>
                                                    </div>
                                                    <div class="w-50px h-50px bg-success-transparent-2 rounded-circle d-flex align-items-center justify-content-center"><i class="fas fa-file-invoice-dollar fa-lg text-success"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3 bg-red border-0">
                                            <div class="card-body">
                                                <div class="d-flex mb-3">
                                                    <div class="flex-grow-1">
                                                        <h5 class="mb-1 text-white">Bill Overdue</h5>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <h3 class="mb-1 text-white">5</h3>
                                                        <div class="text-white fw-600 fs-13px">
                                                            <i class="fa fa-caret-up"></i> +13.59%
                                                        </div>
                                                    </div>
                                                    <div class="w-50px h-50px bg-primary-transparent-2 rounded-circle d-flex align-items-center justify-content-center"><i class="fas fa-file-invoice-dollar fa-lg text-white"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                        </div>

                    </div>
                    <!-- END row -->
                </div>
                <div class="tab-pane fade show" id="practice">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card mb-3 bg-red">
                                        <div class="card-body">
                                            <div class="d-flex mb-3">
                                                <div class="flex-grow-1">
                                                    <h5 class="mb-1 text-white">Overdue Payment</h5>
                                                    <div class="text-white text-white-transparent-5">Value of overdue
                                                        invoices</div>
                                                </div>
                                                <a href="#" data-bs-toggle="dropdown" class="text-muted"><i
                                                        class="fa fa-redo"></i></a>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <h3 class="mb-1 text-white">$14,230.00</h3>
                                                    <div class="text-white fw-600 fs-13px">
                                                        <i class="fa fa-caret-up"></i> +13.59%
                                                    </div>
                                                </div>
                                                <div
                                                    class="w-50px h-50px bg-primary-transparent-2 rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="fas fa-file-invoice-dollar fa-lg text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="d-flex mb-3">
                                                <div class="flex-grow-1">
                                                    <h5 class="mb-1">Awaiting Payment Invoice</h5>
                                                    <div class="text-muted">Follow up with clients ASAP</div>
                                                </div>
                                                <a href="#" data-bs-toggle="dropdown" class="text-muted"><i
                                                        class="fa fa-redo"></i></a>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <h3 class="mb-1">$145,800.00</h3>
                                                    <div class="text-success fw-600 fs-13px">
                                                        <i class="fa fa-caret-up"></i> +43.59%
                                                    </div>
                                                </div>
                                                <div
                                                    class="w-50px h-50px bg-primary-transparent-2 rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="fas fa-file-invoice-dollar fa-lg text-primary"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="d-flex mb-3">
                                                <div class="flex-grow-1">
                                                    <h5 class="mb-1">Cash Collection</h5>
                                                    <div class="text-muted">Payment received this month</div>
                                                </div>
                                                <a href="#" data-bs-toggle="dropdown" class="text-muted"><i
                                                        class="fa fa-redo"></i></a>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <h3 class="mb-1">$46,890.00</h3>
                                                    <div class="text-success fw-600 fs-13px">
                                                        <i class="fa fa-caret-up"></i> +38.00%
                                                    </div>
                                                </div>
                                                <div
                                                    class="w-50px h-50px bg-success-transparent-2 rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="fas fa-file-invoice-dollar fa-lg text-success"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card mb-3">
                                        <div class="py-2" id="pieNewMatter"></div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card mb-3">
                                        <div class="py-2" id="chartLitigation"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <!-- title -->
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="flex-fill fw-600 fs-16px">Attorneys by Opened Matter this month
                                                </div>
                                            </div>

                                            <!-- list -->
                                            <div>
                                                <div class="row mb-2">
                                                    <div class="col-6">Michael Douglas</div>
                                                    <div class="col-6 text-end">5</div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6">Michael Choamsky</div>
                                                    <div class="col-6 text-end">6</div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6">Liam Neeson</div>
                                                    <div class="col-6 text-end">3</div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6">Scott Hallbrand</div>
                                                    <div class="col-6 text-end">2</div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6">Sarah Nelson</div>
                                                    <div class="col-6 text-end">7</div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6">Jack Dawson</div>
                                                    <div class="col-6 text-end">7</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <!-- title -->
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="flex-fill fw-600 fs-16px">Attorneys by Overdue Invoices</div>
                                            </div>

                                            <!-- list -->
                                            <div>
                                                <div class="row mb-2">
                                                    <div class="col-6">Michael Douglas</div>
                                                    <div class="col-6 text-end text-danger">$5,100.00</div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6">Michael Choamsky</div>
                                                    <div class="col-6 text-end text-danger">$16,200.00</div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6">Liam Neeson</div>
                                                    <div class="col-6 text-end text-danger">$3,000.00</div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6">Scott Hallbrand</div>
                                                    <div class="col-6 text-end text-success">0.00</div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6">Sarah Nelson</div>
                                                    <div class="col-6 text-end text-danger">$700.00</div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6">Jack Dawson</div>
                                                    <div class="col-6 text-end text-danger">$17,490.00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <!-- title -->
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="flex-fill fw-600 fs-16px">Attorneys by Collection this Month
                                                </div>
                                            </div>

                                            <!-- list -->
                                            <div>
                                                <div class="row mb-2">
                                                    <div class="col-6">Michael Douglas</div>
                                                    <div class="col-6 text-end">$10,000.00</div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6">Michael Choamsky</div>
                                                    <div class="col-6 text-end">$6,200.00</div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6">Liam Neeson</div>
                                                    <div class="col-6 text-end">$13,050.00</div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6">Scott Hallbrand</div>
                                                    <div class="col-6 text-end">$1,500.00</div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6">Sarah Nelson</div>
                                                    <div class="col-6 text-end">$3,450.00</div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6">Jack Dawson</div>
                                                    <div class="col-6 text-end">$1,490.00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- END #content -->

        <!-- BEGIN btn-scroll-top -->
        <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
        <!-- END btn-scroll-top -->
    </div>
@endsection
