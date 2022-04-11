<body>
  <style>
    .colorheard {

      color: #ABA7A5;

      background-color: #F8F6F5;
    }
    .coloricon{
     width: 1000;
      
      color:#40E10D
    }
    .save{
      background-color:#02C35B ;
      border-color:#02C35B ;
      
    }
    .reset{
      border-color:#FF5353;
      background-color:#FF5353;
    }
    .head1{
       color:0000;
    }
    .grid{
border: 0000;
    };
  </style>
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
              <a href="<?php echo base_url() . "/Home/v_Project_List" ?>" class="bg-red menu-link ">
              <i class='bx bx-list-ul'style='font-size:25px'></i> &emsp;
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
      

      
      <div class="container  g-5">
           <h1 class="div-info head1"style='font-size:30px'><i class='bx bx-edit ' style='font-size:50px'></i> Edit Project </h1> 
            
        <div class="container-add  card div-info mb-3 mt-3 m-5">

          <form style="margin: 40px;" action="">
            <section>
              <h3 class="colorheard" >1. Project Owner </h3>
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="firstName" class="form-label">Company :</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="lastName" class="form-label">Department :</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="email" class="form-label">Segment :</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="organization" class="form-label">Project Owner :</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>

                <hr class="grid">
                <h3 class="colorheard">2. Project </h3>
                <div class="mb-3 col-md-6">
                  <label class="form-label" for="phoneNumber">Project name :</label>
                  <div class="input-group input-group-merge">

                    <input class="form-control" type="text" value="" id="html5-text-input">
                  </div>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="address" class="form-label">Starting date :</label>
                  <br>
                  <form action="/action_page.php">

                    <input class="form-control" type="date" value="2021-06-18" id="html5-date-input">

                  </form>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="state" class="form-label">Status :</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>

                </div>


                <hr>
                <h3 class="colorheard" >3. Project Details </h3>
                <div class="mb-3 col-md-6">
                  <label for="zipCode" class="form-label">Details :</label>
                  <textarea class="form-control" placeholder="Leave a Details here" id="floatingTextarea2" style="height: 100px"></textarea>

                </div>

                <div class="mb-3 col-md-6">
                  <label for="language" class="form-label">Request Type :</label>

                  <br>

                  <div class="row">
                    <div class="mb-3 col-md-6">
                      <label>
                        <input class="form-check-input me-1" type="checkbox" value="">
                        Project Consultant
                      </label>
                    </div>
                    <div class="mb-3 col-md-6">
                      <label>
                        <input class="form-check-input me-1" type="checkbox" value="">
                        Co-adviser
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="mb-3 col-md-6">
                      <label>
                        <input class="form-check-input me-1" type="checkbox" value="">
                        IT Equipment
                      </label>
                    </div>
                    <div class="mb-3 col-md-6">
                      <label>
                        <input class="form-check-input me-1" type="checkbox" value="">
                        Server
                      </label>
                    </div>
                    <div class="mb-3 col-md-6">
                      <label>
                        <input class="form-check-input me-1" type="checkbox" value="">
                        Other
                      </label>
                    </div>
                  </div>

                </div>
                
                <p></p>
                </div>
                <div class="mb-12 col-md-6\ text-end">
                <!-- <div class="col-4 col-sm-5 text-end"> -->

                  <br>
                  <br>

                  <button class="btn btn-primary save" type="submit">Save</button>
                  &emsp;<button type="button" class="btn btn-danger">Cancel</button>
                </div>
       
              
  </div>
 














          </form>

        </div>
      </div>
    </div>
  </div>