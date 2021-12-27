
<header id="home">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light ">
        <!-- Change Logo Img Here -->
        <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <div class="interactive-menu-button">
            <a href="#">
              <span>Menu</span>
            </a>
          </div>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          <li class="nav-item">
              <!-- Nav Link -->
              <a class="nav-link" data-scroll href="index.php#home">Home.<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <!-- Nav Link -->
              <a class="nav-link" data-scroll href="index.php#about-us">About Me.</a>
            </li>
            <li class="nav-item">
              <!-- Nav Link -->
              <a class="nav-link" data-scroll href="index.php#portfolio">Portfolio.</a>
            </li>
            <li class="nav-item">
              <!-- Nav Link -->
              <a class="nav-link" data-scroll href="index.php#contact-us">Contact Me.</a>
            </li>
            <li class="nav-item">
                <!-- Nav Link -->
                <a class="nav-link" data-scroll href="Training.php">Training.</a>
            </li>
            <li class="nav-item ">
                <!-- Nav Link -->
                <a class="nav-link" data-scroll href="DofE.php">DofE.</a>
            </li>                
              <div class="nav-item">
                <?php 
                  if (!isset($_SESSION['id'])) {
                    echo '<a class="nav-link" data-scroll href="login.php">Login.</a>';
                      }

                  else if (isset($_SESSION['id'])) {
                    echo             '<li class="nav-item ">
                    <a class="nav-link" data-scroll href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
    
    
    
    <a class="nav-link" data-scroll href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
                </li>';
                  }
                ?>            
</div>
                </div>

          </ul>

        </div>
      </nav>
    </div>
    </div>



                </div>

          </ul>

        </div>
      </nav>
    </div>

    </div>