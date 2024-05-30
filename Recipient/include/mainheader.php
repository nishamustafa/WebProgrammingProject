<header class="header_section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="home.php">
                <img src="images/donate4all.png" height="70px"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
      
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <div class="d-flex flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav">
                      <li class="nav-item active">
                        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="about.php">About </a>
                      </li>
                      <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                          Donations
                        </a>
                        <ul class="dropdown-menu">
                          <li class="dropdown-item">
                            <a class="nav-link" href="requestdonation.php">
                              Request Donation</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="requesthistory.php">
                              Request History</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="d-flex flex-column flex-lg-row align-items-center ml-auto">
                    <ul class="navbar-nav">
                      <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                          <span class="bi bi-person-circle">
                            <?php echo $_SESSION['dlogin']?>
                          </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li class="dropdown-item">
                            <a class="nav-link" href="editprofile.php">
                              User Profile</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="change-password.php">
                              Change Password</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="logout.php">
                              <span class="bi bi-box-arrow-in-left"></span> Logout</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </header>