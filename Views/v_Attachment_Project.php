<style>
    .bg-blue {
        background-color: rgba(48, 156, 255, 0.7) !important;
    }

    .font-black {
        color: black;
    }

    .row-center {
        padding: 10px;
    }

    .bg-yellow {
        background-color: rgba(255, 214, 0, 0.8) !important;
    }

    .bg-green {
        background-color: rgba(84, 239, 29, 0.6) !important;
    }

    .bg-orange {
        background-color: rgba(255, 133, 21, 0.9) !important;
    }

    .bg-red-card {
        background-color: rgba(255, 55, 55, 0.8) !important;
    }

    .search-bar {
        padding: 16px;
        text-align: center;
        max-width: 1350px;
        height: 100px;
        margin-bottom: 10px;
        margin-right: 150px;
        margin-left: 40px;
        border: 5px;
    }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<body>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" data-bg-class="bg-menu-theme">

                <!-- LOGO ของเว็บไซต์ -->
                <div class="app-brand demo ">
                    <div>
                        <img src="https://cdn.logo.com/hotlink-ok/logo-social.png">
                    </div>
                </div>
                <!-- LOGO ของเว็บไซต์ -->

                <div class=" menu menu-inner-shadow"></div>

                <ul class="menu menu-inner py-1 overflow-auto">

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Pages</span>
                    </li>
                    <!-- Dashboard -->


                    <!-- Layouts -->
                    <li class="menu-item ">
                        <div>
                            <a href="<?php echo base_url() . " /Home/v_Project_List" ?>" class="bg-red menu-link ">
                                <i class='bx bx-list-ul' style='font-size:25px'></i> &emsp;
                                <div data-i18n="Analytics" class="menu">Project List</div>
                            </a>
                        </div>
                    </li>
                    <li class="menu-item ">
                        <a href="<?php echo base_url() . " /Home/v_Add_Project" ?>" class="menu-link">
                            <i class='bx bx-list-plus' style='font-size:25px'></i> &emsp;
                            <div data-i18n="Analytics" class="menu">Add project</div>
                        </a>
                    </li>

                </ul>

            </aside>
            <!-- / Menu -->



            <!-- Layout container -->
            <div class="layout-page">
                <!-- Search Bar -->
                <div class=" container bg-transparent rounded search-bar">
                    <nav class="layout-navbar navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                        id="layout-navbar">

                        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
                            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                                <i class="bx bx-menu bx-sm"></i>
                            </a>
                        </div>

                        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                            <!-- Search -->
                            <div class="navbar-nav align-items-center">
                                <div class="nav-item d-flex align-items-center">
                                    <i class="bx bx-search fs-4 lh-0"></i>
                                    <input type="text" id="myInput" class="form-control border-0 shadow-none"
                                        placeholder="Search..." aria-label="Search...">
                                </div>
                            </div>
                            <!-- /Search -->


                            <ul class="navbar-nav flex-row align-items-center ms-auto">



                                <!-- Place this tag where you want the button to render. -->
                                <li class="nav-item lh-1 me-3">
                                    <span></span>
                                </li>

                            </ul>
                        </div>



                    </nav>
                </div>
                <!-- Search Bar -->
                <div class="centerdiv container bg-white div-search rounded" id="layout-page">
                    <div class="container">
                        <div class="row" style="text-align: center;">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <nobr style="font-size: 22;" margin-right: 20px;"> Year</nobr>

                                        </select>
                                    </div>
                                    <div class="col">

                                        <select id="demoShort" multiple="" size="3" style="display: inline-block;">
                                            <option value="Abarth">Abarth</option>
                                            <option value="Alfa Romeo">Alfa Romeo</option>
                                            <option value="Alpine" data-test="example">Alpine</option>
                                            <option value="Aston Martin">Aston Martin</option>
                                            <option value="Audi">Audi</option>
                                            <option value="Bentley">Bentley</option>
                                            <option value="BMW">BMW</option>
                                            <option value="Cadillac">Cadillac</option>
                                            <option value="Chevrolet">Chevrolet</option>
                                            <option value="Citroën">Citroën</option>
                                            <option value="Cupra">Cupra</option>
                                            <option value="DACIA">DACIA</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <nobr style="font-size: 22;" margin-right: 20px;"> Year</nobr>

                                        </select>
                                    </div>
                                    <div class="col">

                                        <select id="demoShort2" multiple="" size="3" style="display: inline-block;">
                                            <option value="Abarth">Abarth</option>
                                            <option value="Alfa Romeo">Alfa Romeo</option>
                                            <option value="Alpine" data-test="example">Alpine</option>
                                            <option value="Aston Martin">Aston Martin</option>
                                            <option value="Audi">Audi</option>
                                            <option value="Bentley">Bentley</option>
                                            <option value="BMW">BMW</option>
                                            <option value="Cadillac">Cadillac</option>
                                            <option value="Chevrolet">Chevrolet</option>
                                            <option value="Citroën">Citroën</option>
                                            <option value="Cupra">Cupra</option>
                                            <option value="DACIA">DACIA</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <nobr style="font-size: 22;" margin-right: 20px;"> Year</nobr>

                                        </select>
                                    </div>
                                    <div class="col">

                                        <select id="demoShort3" multiple="" size="3" style="display: inline-block;">
                                            <option value="Abarth">Abarth</option>
                                            <option value="Alfa Romeo">Alfa Romeo</option>
                                            <option value="Alpine" data-test="example">Alpine</option>
                                            <option value="Aston Martin">Aston Martin</option>
                                            <option value="Audi">Audi</option>
                                            <option value="Bentley">Bentley</option>
                                            <option value="BMW">BMW</option>
                                            <option value="Cadillac">Cadillac</option>
                                            <option value="Chevrolet">Chevrolet</option>
                                            <option value="Citroën">Citroën</option>
                                            <option value="Cupra">Cupra</option>
                                            <option value="DACIA">DACIA</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <nobr style="font-size: 22;" margin-right: 20px;"> Year</nobr>

                                        </select>
                                    </div>
                                    <div class="col">

                                        <select id="demoShort4" multiple="" size="3" style="display: inline-block;">
                                            <option value="Abarth">Abarth</option>
                                            <option value="Alfa Romeo">Alfa Romeo</option>
                                            <option value="Alpine" data-test="example">Alpine</option>
                                            <option value="Aston Martin">Aston Martin</option>
                                            <option value="Audi">Audi</option>
                                            <option value="Bentley">Bentley</option>
                                            <option value="BMW">BMW</option>
                                            <option value="Cadillac">Cadillac</option>
                                            <option value="Chevrolet">Chevrolet</option>
                                            <option value="Citroën">Citroën</option>
                                            <option value="Cupra">Cupra</option>
                                            <option value="DACIA">DACIA</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="col-1">
                                <nobr style="font-size: 22;" margin-right: 20px;"> ค้นหา</nobr>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navbar -->
                <div class="container bg-white div-static rounded" id="layout-page">

                    <div class="row-center row">
                        <div class="static-margin col-md-4">
                            <div class="bg-blue card">
                                <div class=" card-body">

                                    <span class="font-black fw-semibold d-block mb-1">All project</span>
                                    <h3 class="font-black card-title mb-2">4</h3>
                                    <!-- <small class="font-black fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> -->

                                </div>
                            </div>
                        </div>
                        <div class="static-margin mb-3 col-md-2">
                            <div class="bg-yellow card">
                                <div class=" card-body">

                                    <span class="font-black fw-semibold d-block mb-1">Starting</span>
                                    <h3 class="font-black card-title mb-2">1</h3>
                                    <!-- <small class="font-black fw-semibold"></i> 72.80%</small> -->
                                </div>
                            </div>
                        </div>
                        <div class="static-margin mb-3 col-md-2">
                            <div class="bg-green card">
                                <div class=" card-body">

                                    <span class="font-black fw-semibold d-block mb-1">In Progress</span>
                                    <h3 class="font-black card-title mb-2">2</h3>
                                    <!-- <small class="font-black fw-semibold"></i> 72.80%</small> -->
                                </div>
                            </div>
                        </div>
                        <div class="static-margin mb-3 col-md-2">
                            <div class="bg-orange card">
                                <div class=" card-body">

                                    <span class="font-black fw-semibold d-block mb-1">Finished</span>
                                    <h3 class="font-black card-title mb-2">1</h3>
                                    <!-- <small class="font-black fw-semibold"></i> 72.80%</small> -->
                                </div>
                            </div>
                        </div>
                        <div class="static-margin mb-3 col-md-2">
                            <div class=".bg-red-card card">
                                <div class=" card-body">

                                    <span class="font-black fw-semibold d-block mb-1">Cancel</span>
                                    <h3 class="font-black card-title mb-2">0</h3>
                                    <!-- <small class="font-black fw-semibold"></i> 72.80%</small> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="row" style="margin: 40px;">
                        <div class="col-4 border border-primary" style="height: 30px;">

                        </div>
                        <div class="col-2 border border-primary">

                        </div>
                        <div class="col-2 border border-primary">

                        </div>
                        <div class="col-2 border border-primary">

                        </div>
                        <div class="col-2 border border-primary">

                        </div>
                    </div> -->
                </div>


                <div class="container bg-white div-content rounded" id="layout-page">
                    <div class="container pt-5">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Project name</th>
                                        <th>Status</th>
                                        <th>Users</th>
                                        <th>Status</th>
                                        <th>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#modalCenter">
                                                Launch modal
                                            </button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    <tr class="table-default">
                                        <td>1</td>
                                        <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>Sketch
                                                Project</strong></td>
                                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                                        <td><a link=""></a>Ronnie Shane</td>
                                        <td>
                                            <ul
                                                class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Lilian Fuller">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Sophia Wilkerson">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Christina Parker">

                                                </li>
                                            </ul>
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-edit-alt me-1"></i>Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-trash me-1"></i>Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-default">
                                        <td>2</td>
                                        <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>IoT Data
                                                Software</strong></td>
                                        <td><a>นายชัยยุทธ์ สีครามสดใส</td>
                                        <td>
                                            <ul
                                                class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Lilian Fuller">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Sophia Wilkerson">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Christina Parker">

                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-warning me-1">Starting</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-edit-alt me-1"></i>Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-trash me-1"></i>Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-default">
                                        <td>3</td>
                                        <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>Sketch
                                                Project</strong></td>
                                        <td><a>Ronnie Shane</td>
                                        <td>
                                            <ul
                                                class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Lilian Fuller">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Sophia Wilkerson">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Christina Parker">

                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-danger me-1">Cancel</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-edit-alt me-1"></i>Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-trash me-1"></i>Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-default">
                                        <td>4</td>
                                        <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>Sketch
                                                Project</strong></td>
                                        <td><a>Ronnie Shane</td>
                                        <td>
                                            <ul
                                                class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Lilian Fuller">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Sophia Wilkerson">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Christina Parker">

                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-warning me-1">Starting</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-edit-alt me-1"></i>Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-trash me-1"></i>Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-default">
                                        <td>5</td>
                                        <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>Sketch
                                                Project</strong></td>
                                        <td><a>Ronnie Shane</td>
                                        <td>
                                            <ul
                                                class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Lilian Fuller">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Sophia Wilkerson">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Christina Parker">

                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-edit-alt me-1"></i>Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-trash me-1"></i>Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-default">
                                        <td>6</td>
                                        <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>Sketch
                                                Project</strong></td>
                                        <td><a>Ronnie Shane</td>
                                        <td>
                                            <ul
                                                class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Lilian Fuller">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Sophia Wilkerson">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Christina Parker">

                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-edit-alt me-1"></i>Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-trash me-1"></i>Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-default">
                                        <td>7</td>
                                        <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>Sketch
                                                Project</strong></td>
                                        <td><a>Ronnie Shane</td>
                                        <td>
                                            <ul
                                                class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Lilian Fuller">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Sophia Wilkerson">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Christina Parker">

                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-edit-alt me-1"></i>Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-trash me-1"></i>Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-default">
                                        <td>8</td>
                                        <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>Sketch
                                                Project</strong></td>
                                        <td><a>Ronnie Shane</td>
                                        <td>
                                            <ul
                                                class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Lilian Fuller">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Sophia Wilkerson">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Christina Parker">

                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-edit-alt me-1"></i>Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-trash me-1"></i>Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-default">
                                        <td>9</td>
                                        <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>Sketch
                                                Project</strong></td>
                                        <td><a>Ronnie Shane</td>
                                        <td>
                                            <ul
                                                class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Lilian Fuller">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Sophia Wilkerson">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Christina Parker">

                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-edit-alt me-1"></i>Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-trash me-1"></i>Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- / Navbar -->


            <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
    </div>



    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>


    <div id="extwaiokist" style="display:none" v="kdknj" q="583c7e36" c="292.8" i="302" u="1.331" s="03222217" d="1"
        w="false" e="" m="BMe=" vn="6volk">
        <div id="extwaigglbit" style="display:none" v="kdknj" q="583c7e36" c="292.8" i="302" u="1.331" s="03222217"
            d="1" w="false" e="" m="BMe="></div>
    </div>
    </div>

    <!-- / Layout wrapper -->
</body>

<div class="modal fade" id="modalCenter" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="nameWithTitle" class="form-label">Name</label>
                        <input type="text" id="nameWithTitle" class="form-control" placeholder="Enter Name">
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-0">
                        <label for="emailWithTitle" class="form-label">Email</label>
                        <input type="text" id="emailWithTitle" class="form-control" placeholder="xxxx@xxx.xx">
                    </div>
                    <div class="col mb-0">
                        <label for="dobWithTitle" class="form-label">DOB</label>
                        <input type="text" id="dobWithTitle" class="form-control" placeholder="DD / MM / YY">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<script>
    selectBoxTest = new vanillaSelectBox("#demoShort", {
        "maxHeight": 330,
        "search": true,
        "translations": {
            "all": "All",
            "items": "unit",
            "selectAll": "Check All",
            "clearAll": "Clear All",
            "placeHolder": "Choose a brand..."
        }
    });

    selectBoxTest = new vanillaSelectBox("#demoShort2", {
        "maxHeight": 330,
        "search": true,
        "translations": {
            "all": "All",
            "items": "unit",
            "selectAll": "Check All",
            "clearAll": "Clear All",
            "placeHolder": "Choose a brand..."
        }
    });

    selectBoxTest = new vanillaSelectBox("#demoShort3", {
        "maxHeight": 330,
        "search": true,
        "translations": {
            "all": "All",
            "items": "unit",
            "selectAll": "Check All",
            "clearAll": "Clear All",
            "placeHolder": "Choose a brand..."
        }
    });
    selectBoxTest = new vanillaSelectBox("#demoShort4", {
        "maxHeight": 330,
        "search": true,
        "translations": {
            "all": "All",
            "items": "unit",
            "selectAll": "Check All",
            "clearAll": "Clear All",
            "placeHolder": "Choose a brand..."
        }
    });
</script>

<script>
    $(document).ready(function () {
        $("#myInput").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>