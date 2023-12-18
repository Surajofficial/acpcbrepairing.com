<nav class="navbar navbar-expand-lg d-none d-md-block navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" style="color:#fff;" type="button" onclick="openNav()" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    </button>
    <li class="nav-item enquiry d-block d-lg-none" style="float:right;">
      <a class="nav-link " href="<?= URL; ?>contact.php"><i class="fas fa-envelope"></i> ENQUIRY</a>
    </li>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= URL; ?>"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= URL; ?>about.php">ABOUT US</a>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            COURSES
          </a>
          <ul class="dropdown-menu vicky-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?= URL; ?>acpcb-repairing-course.php">AC PCB Repairing Course</a></li>
            <li><a class="dropdown-item" href="<?= URL; ?>ac-mechanical-course.php">Ac Mechanical Repairing Course</a></li>
            <li><a class="dropdown-item" href="<?= URL; ?>vrv-ac-repairing-course.php">VRV AC Repairing Course</a></li>
            <li><a class="dropdown-item" href="<?= URL; ?>e-rickshaw-repairing-course.php">Electric Rickshaw Repairing Course</a></li>
            <li><a class="dropdown-item" href="<?= URL; ?>e-bike-repairing-course.php">Electric Bike Repairing Course</a></li>
            <li><a class="dropdown-item" href="<?= URL; ?>inverter-repairing-course.php">Inverter Repairing Course</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="<?= URL; ?>online-laptop-repairing-course.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ONLINE COURSES
          </a>
          <ul class="dropdown-menu vicky-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?= URL; ?>online-acpcb-repairing-course.php">Online AC PCB Repairing Course</a></li>
            <li><a class="dropdown-item" href="<?= URL; ?>online-ac-mechnical-course.php">Online Ac Mechnical Repairing Course</a></li>
            <li><a class="dropdown-item" href="<?= URL; ?>online-electric-vehicle-repairing-course.php">Online Electric Vehicle Repairing Course</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= URL; ?>blog/">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= URL; ?>gallery.php">Gallery</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="<?= URL; ?>contact.php">Contact Us</a>
        </li>
        <li class="nav-item enquiry" style="float:right;">
          <a class="nav-link " href="<?= URL; ?>contact.php"><i class="fas fa-phone-volume" aria-hidden="true"></i> ENQUIRY </a>
        </li>
      </ul>

    </div>
  </div>
</nav>
<style>
  .fa-phone-volume {
    transform: rotate(20deg);
    font-size: 1rem;
  }

  .navbar-nav {
    width: 100%;
    margin: 0px;
    padding: 0px;
  }

  .enquiry {
    background: rgb(180, 16, 16);
    background: linear-gradient(0deg, rgba(180, 16, 16, 1) 0%, rgb(255 1 1) 100%);
    text-align: center;
    min-width: 120px;
    font-weight: 600;
    position: relative;
    right: 0;
  }

  @media only screen and (min-width:992px) {
    .navbar-nav {
      width: 100%;
      margin: 0px;
      padding: 0px;
      position: relative;
    }

    .enquiry {
      background: rgb(180, 16, 16);
      background: linear-gradient(0deg, rgba(180, 16, 16, 1) 0%, rgb(255 1 1) 100%);
      text-align: center;
      min-width: 120px;
      font-weight: 600;
      position: absolute;
      right: 0;
    }
  }

  @media only screen and (max-width:1026px) and (min-width:992px) {
    .enquiry {
      min-width: 110px;
      right: -13px;
    }
  }
</style>