
<?php
session_start();

// print_r($_SESSION['old']);
// print_r($_SESSION['from_errors']);
?>







<html>
    <head>
        <!-- css link -->
        <link rel="stylesheet" href="./css/about.css">

        <!--Bootstrap link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>


    <body>
    <!-- nav bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <!-- nav bar end -->

    <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration p-3 mb-2 bg-secondary text-white" style="border-radius: 50px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form action="../class 7/about/about.php" method="POST" >

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input name="Fast_name"
                    value="<?=isset($_SESSION['old']['Fast_name']) ? $_SESSION['old']['Fast_name'] : '' ?>"
                    type="text" id="firstName" placeholder="Enter Your Fast Name" class="form-control form-control-lg" />
                    <?php 
                      if(isset($_SESSION['from_errors'] ['N_error'])){
                        ?>
                        <span class="text-danger">
                        <?php echo ($_SESSION['from_errors'] ['N_error']) ?>

                      </span>

                     <?php   
                      }

                    ?>
                
                    
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input name="Last_name" 
                    value="<?=isset($_SESSION['old']['Last_name']) ? $_SESSION['old']['Last_name'] : '' ?>"
                    
                    type="text" id="lastName" placeholder="Enter Your Last Name"  class="form-control form-control-lg" />
                    
                      <?php

                        
                        if(isset($_SESSION['from_errors']['L_error'])){
                        ?>      
                          <span class="text-danger">
                      <?php echo ($_SESSION['from_errors'] ['L_error']) ?>
                    </span>

                          <?php
                        }
                      ?>

                    
                   
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input name="Birthday"
                    value="<?=isset($_SESSION['old']['Birthday']) ? $_SESSION['old']['Birthday'] : '' ?>"
                    type="text" placeholder="Date Of Birth" class="form-control form-control-lg" id="birthdayDate" />

                    <?php

                        
                      if(isset($_SESSION['from_errors']['B_error'])){
                      ?>      
                        <span class="text-danger">
                      <?php echo ($_SESSION['from_errors'] ['B_error']) ?>
                      </span>

                        <?php
                      }
                      ?>

                  
                  </div>

                </div>
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input name="Experience"
                    value="<?=isset($_SESSION['old']['Experience']) ? $_SESSION['old']['Experience'] : '' ?>"
                    type="text" placeholder="Experience" class="form-control form-control-lg"/>
                    <span class="text-danger">

                    <?php

                                            
                    if(isset($_SESSION['from_errors']['E_error'])){
                    ?>      
                      <span class="text-danger">
                    <?php echo ($_SESSION['from_errors'] ['E_error']) ?>
                    </span>

                      <?php
                    }
                    ?>
                      
                   
                  </div>

                </div>

              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input name="Email" 
                    value="<?=isset($_SESSION['old']['Email']) ? $_SESSION['old']['Email'] : '' ?>"
                    type="text" placeholder="Email Address" class="form-control form-control-lg" />
                    <?php

                                            
                        if(isset($_SESSION['from_errors']['E_error'])){
                        ?>      
                          <span class="text-danger">
                        <?php echo ($_SESSION['from_errors'] ['E_error']) ?>
                        </span>

                          <?php
                        }
                        ?>
                    
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input name="Phone" 
                    value="<?=isset($_SESSION['old']['Phone']) ? $_SESSION['old']['Phone'] : '' ?>"
                    type="tel" placeholder="Mobile Number" id="phoneNumber" class="form-control form-control-lg" />

                    <?php

                                            
                      if(isset($_SESSION['from_errors']['P_error'])){
                      ?>      
                        <span class="text-danger">
                      <?php echo ($_SESSION['from_errors'] ['P_error']) ?>
                      </span>

                        <?php
                      }
                      ?>
                  
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input name="Password" 
                    value="<?=isset($_SESSION['old']['Password']) ? $_SESSION['old']['Password'] : '' ?>"
                    type="text" placeholder="Password" class="form-control form-control-lg" />
                    <?php

                                            
                    if(isset($_SESSION['from_errors']['Pass_error'])){
                    ?>      
                      <span class="text-danger">
                    <?php echo ($_SESSION['from_errors'] ['Pass_error']) ?>
                    </span>

                      <?php
                    }
                    ?>
                  
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input name="re_password"
                    value="<?=isset($_SESSION['old']['re_password']) ? $_SESSION['old']['re_password'] : '' ?>"
                    type="tel" placeholder="Re-Password" id="phoneNumber" class="form-control form-control-lg" />

                    <?php

                                            
                    if(isset($_SESSION['from_errors']['re_pass_error'])){
                    ?>      
                      <span class="text-danger">
                    <?php echo ($_SESSION['from_errors'] ['re_pass_error']) ?>
                    </span>

                      <?php
                    }
                    ?>

                  </div>
                </div>
              </div>
              <div class="mt-10 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    </body>
</html>


<?php

session_unset();
?>

