<style>
td {
    color: black;
}
.center {
    float: left;
  margin: left;
  width: 300px;
  border: 0px;
  padding: 10px;
}
.grid-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 0px;
}
.menu-vertical .menu-inner>.menu-item .menu-link {
        margin: 0rem 0rem !important;
    }
</style>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" data-bg-class="bg-menu-theme">

                <!-- LOGO ของเว็บไซต์ -->
                <div class="app-brand no-margin " style="background-color: #DC0032; height:75px">

                    <img class="card-img-top " src="<?= base_url(); ?>/assets/img/logo.png">

                </div>
                <!-- LOGO ของเว็บไซต์ -->

                <div class=" menu menu-inner-shadow"></div>

                <ul class="menu menu-inner py-1 overflow-auto">


                    <!-- Layouts -->
                    <li class="menu-item ">
                        <div>
                            <a href="<?php echo base_url() . "/Home/v_Project_List" ?>" class="menu-link ">
                                <i class='bx bx-list-ul' style='font-size:25px'></i> &emsp;
                                <div data-i18n="Analytics" class="menu">Project List</div>
                            </a>
                        </div>
                    </li>
                    <li class="menu-item ">
                        <a href="<?php echo base_url() . "/Home/v_Add_Project" ?>" class="menu-link">
                            <i class='bx bx-list-plus' style='font-size:25px'></i> &emsp;
                            <div data-i18n="Analytics" class="menu">Add project</div>
                        </a>
                    </li>

                </ul>

            </aside>
            <!-- / Menu -->



            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <h1 class="div-info"> Project Information </h1>
                <div class="centerdiv container bg-white div-info rounded" id="layout-page" style="font-size: 27px;">

                    <div class="container div-container-info">
                        <div class="div-info">

                        <!-- <div class="grid-container">
                            <div style="background-color: #7BD0FF;" class="center">Project name : </div> <div style="background-color: #7BD0FF;" class="center">Project name : </div>
                        </div> -->


                            <table class="table table-bordered" style="background-color: #7BD0FF; border: black; ">
                                <tbody>
                                    <tr>
                                        <td scope="row">Project name : </td>
                                        <td colspan="3" style="background-color: #AEE2FF; font-size: 22px;">IoT Data
                                            Software</td>
                                    </tr>
                                    <!-- <tr>
                                        <td scope="row" colspan="5" style="font-size: 25px;">Project owner</td>
                                    </tr> -->
                                    <tr>
                                        <td scope="row">Company :</td>
                                        <td colspan="3" style="background-color: #AEE2FF; font-size: 22px;">Siam DENSO
                                            Manufacturing Co.,Ltd.</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Department :</td>
                                        <td colspan="3" style="background-color: #AEE2FF; font-size: 22px;">Maintenance
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Section :</td>
                                        <td colspan="3" style="background-color: #AEE2FF; font-size: 22px;">Repair</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Owner :</td>
                                        <td colspan="3" style="background-color: #AEE2FF; font-size: 22px;">นายชัยยุทธ์
                                            สีครามสดใส</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Starting date :</td>
                                        <td colspan="3" style="background-color: #AEE2FF; font-size: 22px;">09/03/2022
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Status :</td>
                                        <td colspan="3" style="background-color: #AEE2FF; font-size: 22px;">Starting
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row" style="vertical-align: baseline;">Details :</td>
                                        <td colspan="3" style="font-size: 20px; background-color: #AEE2FF;">
                                            เป็นโครงการที่เริ่มต้นเพื่อพัฒนาใช้สำหรับอุปกรณ์ขนาดเล็ก ให้ง่ายต่อการ
                                            Implement</td>
                                    </tr>
                                    <tr>
                                        <td scope="row" style="vertical-align: baseline;">Type of Request :</td>
                                        <td colspan="3" style="font-size: 22px; background-color: #AEE2FF;">
                                            &bull; IT Equipent <br>
                                            &bull; Project Consultant <br>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary"
                            style="background-color: #094781; border-color:#094781;">View Attachments</button>
                        <button type="button" class="btn btn-secondary"
                            style="background-color: #138EFF; border-color:#138EFF;">Back</button>
                    </div>
                </div>

                <!-- Navbar -->


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