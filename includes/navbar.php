<style>

.fixed-top-2 {
    margin-top: 56px;
}
.navbar-first{
  background-color: rgba(81, 217, 241, 0.931);
  color: white;
}
.navbar-second{
  background-color: white;
  font-weight: 600;
}
</style>

      <nav class="navbar navbar-first navbar-expand-md fixed-top">
  <!-- <a class="navbar-brand" href="#">Navbar w/ text</a> -->
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->
  <div class="container">
            <div class="col-sm-6 col-md-6">
              <p class="font-weight-bold text-left">Monday - Saturday, 8am to 10pm </p>
            </div>
            <div class="col-sm-6 col-md-6 ml-auto">
              <p class="bold text-right">Call us now +91 9904381156</p>
            </div>
        </div>
      
</nav>


<nav class="navbar navbar-expand-md fixed-top fixed-top-2 navbar-second">
  
  <button type="button" class="navbar-toggler bg-dark" data-toggle="collapse" data-target=".MyMenu">
             <span class="navbar-toggler-icon text-center">
             <div style="border: 1px solid white" class="m-1"></div>
             <div style="border: 1px solid white" class="m-1"></div>
             <div style="border: 1px solid white" class="m-1"></div>
             </span>
         </button>

  <div class="collapse navbar-collapse MyMenu" id="navbarNavDropdown">
    <ul class="navbar-nav mx-auto">
    <li class="nav-item active">
        <a class="nav-link" href="#intro">Home</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="#bmi">BMI</a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="#service">Service</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="blogs.php">Blogs</a>  
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#doctor">Doctors</a>  
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#pricing">Pricing</a>  
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="registration.php">Registration</a>
      </li>
      
      
      
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Extra
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="includes/search_doctor.php">Appoinment</a>
          <a class="dropdown-item" href="includes/videos.php">Videos</a>
          <a class="dropdown-item" href="admin" target="_blank">Admin</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

