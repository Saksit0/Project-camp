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
                <i class="menu menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics" class="menu">Project List</div>
              </a>
            </div>
          </li>
          <li class="menu-item ">
            <a href="<?php echo base_url() . "/Home/v_Add_Project" ?>" class="menu-link">
              <i class="menu menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics" class="menu">Add project</div>
            </a>
          </li>

        </ul>

      </aside>
      <!-- / Menu -->
      
      <div class="container g-5 ">
        <div class="container-add  card mb-4 m-5">

          <form style="margin: 40px;" action="">
            <div>
              <h1 class="colorheard" style="text-align: center;">Add Project</h1>
            </div>
            <hr>
            <section>
              <h3>1.Project Owner </h3>
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="firstName" class="form-label">Company :</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="lastName" class="form-label">Department :</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="email" class="form-label">Segment :</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="organization" class="form-label">Project Owner :</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>

                <hr>
                <h3>2.Project </h3>
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
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>

                </div>


                <hr>
                <h3>3.Project Details </h3>
                <div class="mb-3 col-md-6">
                  <label for="zipCode" class="form-label">Details :</label>
                  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>

                </div>

                <div class="mb-3 col-md-6">
                  <label for="language" class="form-label">Request Type :</label>

                  <br>

                  <div class="row">
                    <div class="mb-3 col-md-6">
                      <label>
                        <input class="form-check-input me-1" type="checkbox" value="">
                        Soufflé pastry pie ice
                      </label>
                    </div>
                    <div class="mb-3 col-md-6">
                      <label>
                        <input class="form-check-input me-1" type="checkbox" value="">

                        Bear claw cake biscuit
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="mb-3 col-md-6">
                      <label>
                        <input class="form-check-input me-1" type="checkbox" value="">
                        Tart tiramisu cake
                      </label>
                    </div>
                    <div class="mb-3 col-md-6">
                      <label>
                        <input class="form-check-input me-1" type="checkbox" value="">
                        Bonbon toffee muffin
                      </label>
                    </div>
                    <div class="mb-3 col-md-6">
                      <label>
                        <input class="form-check-input me-1" type="checkbox" value="">
                        Dragée tootsie roll
                      </label>
                    </div>
                  </div>

                </div>
                <div class="mb-12 col-md-6">
                Add Attachments :
               
                <i class="bi bi-plus-square coloricon " id="icon" type="button" style='font-size:30px' ></i>
                <p></p>
                </div>
                <div class="mb-12 col-md-6">
                  <br>
                  <br>
                  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<button class="btn btn-primary save" type="submit">Save</button>
                  &nbsp;<input class="btn btn-primary reset" type="reset" value="Reset">
                </div>
       
              
  </div>
  <script>
        let i = 0;
        $(document).ready(function() {
            $("#icon").click(() => {
                i = i + 1;
                $('p').append( i + "<input type='text'>" +" <input class='form-control' type='file' id='formFile'>"+"<br>");

            });

        });
    </script>














          </form>

        </div>
      </div>
    </div>
  </div>