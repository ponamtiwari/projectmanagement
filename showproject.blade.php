@extends('layouts.frontmaster')
@section('main-content')
<div class="main_content_iner overly_inner ">
    <div class="container-fluid p-0 ">

        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex align-items-center justify-content-between">
                    <div class="page_title_left">
                        <h3 class="f_s_30 f_w_700 text_white">Board</h3>
                        <ol class="breadcrumb page_bradcam mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Salessa </a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Board</li>
                        </ol>
                    </div>
                    <a href="#" class="white_btn3">Create Report</a>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-12">
                <div class="white_card">
                    <div class="card-body">
                        <div class="board_wrapper">

                            <div class="single_board">
                                <div class="main_board_card">
                                    <div class="white_card_header ps-0 pe-0 pt-0">
                                        <div class="box_header m-0">
                                            <div class="main-title">
                                                <h3 class="m-0">To Do</h3>
                                            </div>
                                            <div class="header_more_tool">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle" id="dropdownMenuButton"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ti-more-alt"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuButton"
                                                        x-placement="bottom-end"
                                                        style="position: absolute; transform: translate3d(-148px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                        <a class="dropdown-item" href="#"> <i
                                                                class="ti-eye"></i> Action</a>
                                                        <a class="dropdown-item" href="#"> <i
                                                                class="ti-trash"></i> Delete</a>
                                                        <a class="dropdown-item" href="#"> <i
                                                                class="fas fa-edit"></i> Edit</a>
                                                        <a class="dropdown-item" href="#"> <i
                                                                class="ti-printer"></i> Print</a>
                                                        <a class="dropdown-item" href="#"> <i
                                                                class="fa fa-download"></i> Download</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="board_card_list">
                                        <div class="card border-0">
                                            <div class="card-body">
                                                <div
                                                    class="card_head d-flex justify-content-between align-items-center ">
                                                    <i class="far fa-circle f_s_14 text_color_4"></i>
                                                    <div class="header_more_tool">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle"
                                                                id="dropdownMenuButton"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ti-more-alt"></i>
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                                aria-labelledby="dropdownMenuButton"
                                                                x-placement="bottom-end"
                                                                style="position: absolute; transform: translate3d(-148px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-eye"></i> Action</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-trash"></i> Delete</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="fas fa-edit"></i> Edit</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-printer"></i> Print</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="fa fa-download"></i> Download</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="f_s_16 f_w_500 mb-0">Mobile Account Setting</h5>
                                                <p class="text-muted mb-2">Mobile App</p>
                                                <div class="row justify-content-center align-items-center">
                                                    <div class="col-6 align-self-center">
                                                        <ul class="list-inline mb-0 d-flex align-items-center">
                                                            <li class="list-item d-inline-block me-2">
                                                                <a class="d-flex align-items-center" href="#">
                                                                    <i
                                                                        class="ti-menu-alt text-muted ms-1 me-1"></i>
                                                                    <span class="text-muted fw-bold">0/5</span>
                                                                </a>
                                                            </li>
                                                            <li
                                                                class="list-item d-inline-block d-flex align-items-center">
                                                                <a class="d-flex align-items-center" href="#">
                                                                    <i
                                                                        class="ti-comment text-muted ms-1 me-1"></i>
                                                                    <span class="text-muted fw-bold">3</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-6 align-self-center">
                                                        <a class="float-end" href="#">
                                                            <div class="thumb_34 ms-1 mt-0"><img
                                                                    class="img-fluid radius_50"
                                                                    src="img/customers/1.png" alt></div>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-0">
                                            <div class="card-body">
                                                <div
                                                    class="card_head d-flex justify-content-between align-items-center ">
                                                    <i class="far fa-circle f_s_14 text_color_4"></i>
                                                    <div class="header_more_tool">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle"
                                                                id="dropdownMenuButton"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ti-more-alt"></i>
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                                aria-labelledby="dropdownMenuButton"
                                                                x-placement="bottom-end"
                                                                style="position: absolute; transform: translate3d(-148px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-eye"></i> Action</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-trash"></i> Delete</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="fas fa-edit"></i> Edit</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-printer"></i> Print</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="fa fa-download"></i> Download</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="f_s_16 f_w_500 mb-0">Mobile Account Setting</h5>
                                                <p class="text-muted mb-2">Mobile App</p>
                                                <div class="row justify-content-center align-items-center">
                                                    <div class="col-6 align-self-center">
                                                        <ul class="list-inline mb-0 d-flex align-items-center">
                                                            <li class="list-item d-inline-block me-2">
                                                                <a class="d-flex align-items-center" href="#">
                                                                    <i
                                                                        class="ti-menu-alt text-muted ms-1 me-1"></i>
                                                                    <span class="text-muted fw-bold">0/5</span>
                                                                </a>
                                                            </li>
                                                            <li
                                                                class="list-item d-inline-block d-flex align-items-center">
                                                                <a class="d-flex align-items-center" href="#">
                                                                    <i
                                                                        class="ti-comment text-muted ms-1 me-1"></i>
                                                                    <span class="text-muted fw-bold">3</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-6 align-self-center">
                                                        <a class="float-end" href="#">
                                                            <div class="thumb_34 ms-1 mt-0"><img
                                                                    class="img-fluid radius_50"
                                                                    src="img/customers/1.png" alt></div>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-0">
                                            <div class="card-body">
                                                <div
                                                    class="card_head d-flex justify-content-between align-items-center ">
                                                    <i class="far fa-circle f_s_14 text_color_4"></i>
                                                    <div class="header_more_tool">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle"
                                                                id="dropdownMenuButton"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ti-more-alt"></i>
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                                aria-labelledby="dropdownMenuButton"
                                                                x-placement="bottom-end"
                                                                style="position: absolute; transform: translate3d(-148px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-eye"></i> Action</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-trash"></i> Delete</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="fas fa-edit"></i> Edit</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-printer"></i> Print</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="fa fa-download"></i> Download</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="f_s_16 f_w_500 mb-0">Mobile Account Setting</h5>
                                                <p class="text-muted mb-2">Mobile App</p>
                                                <div class="row justify-content-center align-items-center">
                                                    <div class="col-6 align-self-center">
                                                        <ul class="list-inline mb-0 d-flex align-items-center">
                                                            <li class="list-item d-inline-block me-2">
                                                                <a class="d-flex align-items-center" href="#">
                                                                    <i
                                                                        class="ti-menu-alt text-muted ms-1 me-1"></i>
                                                                    <span class="text-muted fw-bold">0/5</span>
                                                                </a>
                                                            </li>
                                                            <li
                                                                class="list-item d-inline-block d-flex align-items-center">
                                                                <a class="d-flex align-items-center" href="#">
                                                                    <i
                                                                        class="ti-comment text-muted ms-1 me-1"></i>
                                                                    <span class="text-muted fw-bold">3</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-6 align-self-center">
                                                        <a class="float-end" href="#">
                                                            <div class="thumb_34 ms-1 mt-0"><img
                                                                    class="img-fluid radius_50"
                                                                    src="img/customers/1.png" alt></div>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <button class="badge_btn_7 border-0 w-100"> Add Task </button>
                                    </div>
                                </div>
                            </div>

                            <div class="single_board">
                                <div class="main_board_card">
                                    <div class="white_card_header ps-0 pe-0 pt-0">
                                        <div class="box_header m-0">
                                            <div class="main-title">
                                                <h3 class="m-0">in progress</h3>
                                            </div>
                                            <div class="header_more_tool">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle" id="dropdownMenuButton"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ti-more-alt"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuButton"
                                                        x-placement="bottom-end"
                                                        style="position: absolute; transform: translate3d(-148px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                        <a class="dropdown-item" href="#"> <i
                                                                class="ti-eye"></i> Action</a>
                                                        <a class="dropdown-item" href="#"> <i
                                                                class="ti-trash"></i> Delete</a>
                                                        <a class="dropdown-item" href="#"> <i
                                                                class="fas fa-edit"></i> Edit</a>
                                                        <a class="dropdown-item" href="#"> <i
                                                                class="ti-printer"></i> Print</a>
                                                        <a class="dropdown-item" href="#"> <i
                                                                class="fa fa-download"></i> Download</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="board_card_list">
                                        <div class="card border-0">
                                            <div class="card-body">
                                                <div
                                                    class="card_head d-flex justify-content-between align-items-center ">
                                                    <i class="far fa-circle f_s_14 text_color_4"></i>
                                                    <div class="header_more_tool">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle"
                                                                id="dropdownMenuButton"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ti-more-alt"></i>
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                                aria-labelledby="dropdownMenuButton"
                                                                x-placement="bottom-end"
                                                                style="position: absolute; transform: translate3d(-148px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-eye"></i> Action</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-trash"></i> Delete</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="fas fa-edit"></i> Edit</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-printer"></i> Print</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="fa fa-download"></i> Download</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="f_s_16 f_w_500 mb-0">Mobile Account Setting</h5>
                                                <p class="text-muted mb-2">Mobile App</p>
                                                <div class="row justify-content-center align-items-center">
                                                    <div class="col-6 align-self-center">
                                                        <ul class="list-inline mb-0 d-flex align-items-center">
                                                            <li class="list-item d-inline-block me-2">
                                                                <a class="d-flex align-items-center" href="#">
                                                                    <i
                                                                        class="ti-menu-alt text-muted ms-1 me-1"></i>
                                                                    <span class="text-muted fw-bold">0/5</span>
                                                                </a>
                                                            </li>
                                                            <li
                                                                class="list-item d-inline-block d-flex align-items-center">
                                                                <a class="d-flex align-items-center" href="#">
                                                                    <i
                                                                        class="ti-comment text-muted ms-1 me-1"></i>
                                                                    <span class="text-muted fw-bold">3</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-6 align-self-center">
                                                        <a class="float-end" href="#">
                                                            <div class="thumb_34 ms-1 mt-0"><img
                                                                    class="img-fluid radius_50"
                                                                    src="img/customers/1.png" alt></div>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-0">
                                            <div class="card-body">
                                                <div
                                                    class="card_head d-flex justify-content-between align-items-center ">
                                                    <i class="far fa-circle f_s_14 text_color_4"></i>
                                                    <div class="header_more_tool">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle"
                                                                id="dropdownMenuButton"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ti-more-alt"></i>
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                                aria-labelledby="dropdownMenuButton"
                                                                x-placement="bottom-end"
                                                                style="position: absolute; transform: translate3d(-148px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-eye"></i> Action</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-trash"></i> Delete</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="fas fa-edit"></i> Edit</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-printer"></i> Print</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="fa fa-download"></i> Download</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="f_s_16 f_w_500 mb-0">Mobile Account Setting</h5>
                                                <p class="text-muted mb-2">Mobile App</p>
                                                <div class="row justify-content-center align-items-center">
                                                    <div class="col-6 align-self-center">
                                                        <ul class="list-inline mb-0 d-flex align-items-center">
                                                            <li class="list-item d-inline-block me-2">
                                                                <a class="d-flex align-items-center" href="#">
                                                                    <i
                                                                        class="ti-menu-alt text-muted ms-1 me-1"></i>
                                                                    <span class="text-muted fw-bold">0/5</span>
                                                                </a>
                                                            </li>
                                                            <li
                                                                class="list-item d-inline-block d-flex align-items-center">
                                                                <a class="d-flex align-items-center" href="#">
                                                                    <i
                                                                        class="ti-comment text-muted ms-1 me-1"></i>
                                                                    <span class="text-muted fw-bold">3</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-6 align-self-center">
                                                        <a class="float-end" href="#">
                                                            <div class="thumb_34 ms-1 mt-0"><img
                                                                    class="img-fluid radius_50"
                                                                    src="img/customers/1.png" alt></div>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-0">
                                            <div class="card-body">
                                                <div
                                                    class="card_head d-flex justify-content-between align-items-center ">
                                                    <i class="far fa-circle f_s_14 text_color_4"></i>
                                                    <div class="header_more_tool">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle"
                                                                id="dropdownMenuButton"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ti-more-alt"></i>
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                                aria-labelledby="dropdownMenuButton"
                                                                x-placement="bottom-end"
                                                                style="position: absolute; transform: translate3d(-148px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-eye"></i> Action</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-trash"></i> Delete</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="fas fa-edit"></i> Edit</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-printer"></i> Print</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="fa fa-download"></i> Download</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="f_s_16 f_w_500 mb-0">Mobile Account Setting</h5>
                                                <p class="text-muted mb-2">Mobile App</p>
                                                <div class="row justify-content-center align-items-center">
                                                    <div class="col-6 align-self-center">
                                                        <ul class="list-inline mb-0 d-flex align-items-center">
                                                            <li class="list-item d-inline-block me-2">
                                                                <a class="d-flex align-items-center" href="#">
                                                                    <i
                                                                        class="ti-menu-alt text-muted ms-1 me-1"></i>
                                                                    <span class="text-muted fw-bold">0/5</span>
                                                                </a>
                                                            </li>
                                                            <li
                                                                class="list-item d-inline-block d-flex align-items-center">
                                                                <a class="d-flex align-items-center" href="#">
                                                                    <i
                                                                        class="ti-comment text-muted ms-1 me-1"></i>
                                                                    <span class="text-muted fw-bold">3</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-6 align-self-center">
                                                        <a class="float-end" href="#">
                                                            <div class="thumb_34 ms-1 mt-0"><img
                                                                    class="img-fluid radius_50"
                                                                    src="img/customers/1.png" alt></div>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <button class="badge_btn_7 border-0 w-100"> Add Task </button>
                                    </div>
                                </div>
                            </div>

                            <div class="single_board">
                                <div class="main_board_card">
                                    <div class="white_card_header ps-0 pe-0 pt-0">
                                        <div class="box_header m-0">
                                            <div class="main-title">
                                                <h3 class="m-0">Finished</h3>
                                            </div>
                                            <div class="header_more_tool">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle" id="dropdownMenuButton"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ti-more-alt"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuButton"
                                                        x-placement="bottom-end"
                                                        style="position: absolute; transform: translate3d(-148px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                        <a class="dropdown-item" href="#"> <i
                                                                class="ti-eye"></i> Action</a>
                                                        <a class="dropdown-item" href="#"> <i
                                                                class="ti-trash"></i> Delete</a>
                                                        <a class="dropdown-item" href="#"> <i
                                                                class="fas fa-edit"></i> Edit</a>
                                                        <a class="dropdown-item" href="#"> <i
                                                                class="ti-printer"></i> Print</a>
                                                        <a class="dropdown-item" href="#"> <i
                                                                class="fa fa-download"></i> Download</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="board_card_list">
                                        <div class="card border-0">
                                            <div class="card-body">
                                                <div
                                                    class="card_head d-flex justify-content-between align-items-center ">
                                                    <i class="far fa-circle f_s_14 text_color_4"></i>
                                                    <div class="header_more_tool">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle"
                                                                id="dropdownMenuButton"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ti-more-alt"></i>
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                                aria-labelledby="dropdownMenuButton"
                                                                x-placement="bottom-end"
                                                                style="position: absolute; transform: translate3d(-148px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-eye"></i> Action</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-trash"></i> Delete</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="fas fa-edit"></i> Edit</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-printer"></i> Print</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="fa fa-download"></i> Download</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="f_s_16 f_w_500 mb-0">Mobile Account Setting</h5>
                                                <p class="text-muted mb-2">Mobile App</p>
                                                <div class="row justify-content-center align-items-center">
                                                    <div class="col-6 align-self-center">
                                                        <ul class="list-inline mb-0 d-flex align-items-center">
                                                            <li class="list-item d-inline-block me-2">
                                                                <a class="d-flex align-items-center" href="#">
                                                                    <i
                                                                        class="ti-menu-alt text-muted ms-1 me-1"></i>
                                                                    <span class="text-muted fw-bold">0/5</span>
                                                                </a>
                                                            </li>
                                                            <li
                                                                class="list-item d-inline-block d-flex align-items-center">
                                                                <a class="d-flex align-items-center" href="#">
                                                                    <i
                                                                        class="ti-comment text-muted ms-1 me-1"></i>
                                                                    <span class="text-muted fw-bold">3</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-6 align-self-center">
                                                        <a class="float-end" href="#">
                                                            <div class="thumb_34 ms-1 mt-0"><img
                                                                    class="img-fluid radius_50"
                                                                    src="img/customers/1.png" alt></div>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-0">
                                            <div class="card-body">
                                                <div
                                                    class="card_head d-flex justify-content-between align-items-center ">
                                                    <i class="far fa-circle f_s_14 text_color_4"></i>
                                                    <div class="header_more_tool">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle"
                                                                id="dropdownMenuButton"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ti-more-alt"></i>
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                                aria-labelledby="dropdownMenuButton"
                                                                x-placement="bottom-end"
                                                                style="position: absolute; transform: translate3d(-148px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-eye"></i> Action</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-trash"></i> Delete</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="fas fa-edit"></i> Edit</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-printer"></i> Print</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="fa fa-download"></i> Download</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="f_s_16 f_w_500 mb-0">Mobile Account Setting</h5>
                                                <p class="text-muted mb-2">Mobile App</p>
                                                <div class="row justify-content-center align-items-center">
                                                    <div class="col-6 align-self-center">
                                                        <ul class="list-inline mb-0 d-flex align-items-center">
                                                            <li class="list-item d-inline-block me-2">
                                                                <a class="d-flex align-items-center" href="#">
                                                                    <i
                                                                        class="ti-menu-alt text-muted ms-1 me-1"></i>
                                                                    <span class="text-muted fw-bold">0/5</span>
                                                                </a>
                                                            </li>
                                                            <li
                                                                class="list-item d-inline-block d-flex align-items-center">
                                                                <a class="d-flex align-items-center" href="#">
                                                                    <i
                                                                        class="ti-comment text-muted ms-1 me-1"></i>
                                                                    <span class="text-muted fw-bold">3</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-6 align-self-center">
                                                        <a class="float-end" href="#">
                                                            <div class="thumb_34 ms-1 mt-0"><img
                                                                    class="img-fluid radius_50"
                                                                    src="img/customers/1.png" alt></div>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-0">
                                            <div class="card-body">
                                                <div
                                                    class="card_head d-flex justify-content-between align-items-center ">
                                                    <i class="far fa-circle f_s_14 text_color_4"></i>
                                                    <div class="header_more_tool">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle"
                                                                id="dropdownMenuButton"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ti-more-alt"></i>
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                                aria-labelledby="dropdownMenuButton"
                                                                x-placement="bottom-end"
                                                                style="position: absolute; transform: translate3d(-148px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-eye"></i> Action</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-trash"></i> Delete</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="fas fa-edit"></i> Edit</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-printer"></i> Print</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="fa fa-download"></i> Download</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="f_s_16 f_w_500 mb-0">Mobile Account Setting</h5>
                                                <p class="text-muted mb-2">Mobile App</p>
                                                <div class="row justify-content-center align-items-center">
                                                    <div class="col-6 align-self-center">
                                                        <ul class="list-inline mb-0 d-flex align-items-center">
                                                            <li class="list-item d-inline-block me-2">
                                                                <a class="d-flex align-items-center" href="#">
                                                                    <i
                                                                        class="ti-menu-alt text-muted ms-1 me-1"></i>
                                                                    <span class="text-muted fw-bold">0/5</span>
                                                                </a>
                                                            </li>
                                                            <li
                                                                class="list-item d-inline-block d-flex align-items-center">
                                                                <a class="d-flex align-items-center" href="#">
                                                                    <i
                                                                        class="ti-comment text-muted ms-1 me-1"></i>
                                                                    <span class="text-muted fw-bold">3</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-6 align-self-center">
                                                        <a class="float-end" href="#">
                                                            <div class="thumb_34 ms-1 mt-0"><img
                                                                    class="img-fluid radius_50"
                                                                    src="img/customers/1.png" alt></div>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <button class="badge_btn_7 border-0 w-100"> Add Task </button>
                                    </div>
                                </div>
                            </div>

                            <div class="single_board">
                                <div class="main_board_card">
                                    <div class="white_card_header ps-0 pe-0 pt-0">
                                        <div class="box_header m-0">
                                            <div class="main-title">
                                                <h3 class="m-0">Archieved</h3>
                                            </div>
                                            <div class="header_more_tool">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle" id="dropdownMenuButton"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ti-more-alt"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuButton"
                                                        x-placement="bottom-end"
                                                        style="position: absolute; transform: translate3d(-148px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                        <a class="dropdown-item" href="#"> <i
                                                                class="ti-eye"></i> Action</a>
                                                        <a class="dropdown-item" href="#"> <i
                                                                class="ti-trash"></i> Delete</a>
                                                        <a class="dropdown-item" href="#"> <i
                                                                class="fas fa-edit"></i> Edit</a>
                                                        <a class="dropdown-item" href="#"> <i
                                                                class="ti-printer"></i> Print</a>
                                                        <a class="dropdown-item" href="#"> <i
                                                                class="fa fa-download"></i> Download</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="board_card_list">
                                        <div class="card border-0">
                                            <div class="card-body">
                                                <div
                                                    class="card_head d-flex justify-content-between align-items-center ">
                                                    <i class="far fa-circle f_s_14 text_color_4"></i>
                                                    <div class="header_more_tool">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle"
                                                                id="dropdownMenuButton"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ti-more-alt"></i>
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                                aria-labelledby="dropdownMenuButton"
                                                                x-placement="bottom-end"
                                                                style="position: absolute; transform: translate3d(-148px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-eye"></i> Action</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-trash"></i> Delete</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="fas fa-edit"></i> Edit</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-printer"></i> Print</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="fa fa-download"></i> Download</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="f_s_16 f_w_500 mb-0">Mobile Account Setting</h5>
                                                <p class="text-muted mb-2">Mobile App</p>
                                                <div class="row justify-content-center align-items-center">
                                                    <div class="col-6 align-self-center">
                                                        <ul class="list-inline mb-0 d-flex align-items-center">
                                                            <li class="list-item d-inline-block me-2">
                                                                <a class="d-flex align-items-center" href="#">
                                                                    <i
                                                                        class="ti-menu-alt text-muted ms-1 me-1"></i>
                                                                    <span class="text-muted fw-bold">0/5</span>
                                                                </a>
                                                            </li>
                                                            <li
                                                                class="list-item d-inline-block d-flex align-items-center">
                                                                <a class="d-flex align-items-center" href="#">
                                                                    <i
                                                                        class="ti-comment text-muted ms-1 me-1"></i>
                                                                    <span class="text-muted fw-bold">3</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-6 align-self-center">
                                                        <a class="float-end" href="#">
                                                            <div class="thumb_34 ms-1 mt-0"><img
                                                                    class="img-fluid radius_50"
                                                                    src="img/customers/1.png" alt></div>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-0">
                                            <div class="card-body">
                                                <div
                                                    class="card_head d-flex justify-content-between align-items-center ">
                                                    <i class="far fa-circle f_s_14 text_color_4"></i>
                                                    <div class="header_more_tool">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle"
                                                                id="dropdownMenuButton"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ti-more-alt"></i>
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                                aria-labelledby="dropdownMenuButton"
                                                                x-placement="bottom-end"
                                                                style="position: absolute; transform: translate3d(-148px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-eye"></i> Action</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-trash"></i> Delete</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="fas fa-edit"></i> Edit</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-printer"></i> Print</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="fa fa-download"></i> Download</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="f_s_16 f_w_500 mb-0">Mobile Account Setting</h5>
                                                <p class="text-muted mb-2">Mobile App</p>
                                                <div class="row justify-content-center align-items-center">
                                                    <div class="col-6 align-self-center">
                                                        <ul class="list-inline mb-0 d-flex align-items-center">
                                                            <li class="list-item d-inline-block me-2">
                                                                <a class="d-flex align-items-center" href="#">
                                                                    <i
                                                                        class="ti-menu-alt text-muted ms-1 me-1"></i>
                                                                    <span class="text-muted fw-bold">0/5</span>
                                                                </a>
                                                            </li>
                                                            <li
                                                                class="list-item d-inline-block d-flex align-items-center">
                                                                <a class="d-flex align-items-center" href="#">
                                                                    <i
                                                                        class="ti-comment text-muted ms-1 me-1"></i>
                                                                    <span class="text-muted fw-bold">3</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-6 align-self-center">
                                                        <a class="float-end" href="#">
                                                            <div class="thumb_34 ms-1 mt-0"><img
                                                                    class="img-fluid radius_50"
                                                                    src="img/customers/1.png" alt></div>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-0">
                                            <div class="card-body">
                                                <div
                                                    class="card_head d-flex justify-content-between align-items-center ">
                                                    <i class="far fa-circle f_s_14 text_color_4"></i>
                                                    <div class="header_more_tool">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle"
                                                                id="dropdownMenuButton"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ti-more-alt"></i>
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                                aria-labelledby="dropdownMenuButton"
                                                                x-placement="bottom-end"
                                                                style="position: absolute; transform: translate3d(-148px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-eye"></i> Action</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-trash"></i> Delete</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="fas fa-edit"></i> Edit</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="ti-printer"></i> Print</a>
                                                                <a class="dropdown-item" href="#"> <i
                                                                        class="fa fa-download"></i> Download</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="f_s_16 f_w_500 mb-0">Mobile Account Setting</h5>
                                                <p class="text-muted mb-2">Mobile App</p>
                                                <div class="row justify-content-center align-items-center">
                                                    <div class="col-6 align-self-center">
                                                        <ul class="list-inline mb-0 d-flex align-items-center">
                                                            <li class="list-item d-inline-block me-2">
                                                                <a class="d-flex align-items-center" href="#">
                                                                    <i
                                                                        class="ti-menu-alt text-muted ms-1 me-1"></i>
                                                                    <span class="text-muted fw-bold">0/5</span>
                                                                </a>
                                                            </li>
                                                            <li
                                                                class="list-item d-inline-block d-flex align-items-center">
                                                                <a class="d-flex align-items-center" href="#">
                                                                    <i
                                                                        class="ti-comment text-muted ms-1 me-1"></i>
                                                                    <span class="text-muted fw-bold">3</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-6 align-self-center">
                                                        <a class="float-end" href="#">
                                                            <div class="thumb_34 ms-1 mt-0"><img
                                                                    class="img-fluid radius_50"
                                                                    src="img/customers/1.png" alt></div>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <button class="badge_btn_7 border-0 w-100"> Add Task </button>
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
@endsection