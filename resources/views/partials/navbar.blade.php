<nav class="navbar navbar-expand-lg" style="background-color: #fff; ">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <img src="./images/logo.png" alt="logo" width="104" height="65">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="mx-auto">
        <ul class="navbar-nav mb-2 mb-lg-0 justify-content-center">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dashboardStudent.html">Dashboard Student</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Tutorials</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
          </li>
        </ul>
      </div>

      <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#loginModal" style="border-radius: 20px; margin-right: 10px; width: 100px; height: 35px;">Sign In</button>
      <button class="btn btn-primary custom-button-sign-up" onclick="window.location.href='{{ route('signup') }}'">Sign Up</button>
    </div>
  </div>
</nav>

<!-- MODAL -->
<div class="modal" id="loginModal">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header border-0">
        <button type="button" class="btn-close" aria-label="Close" data-dismiss="modal"></button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body" style="margin-bottom:100px;">
        <div class="row">
          <div class="col-lg-6 content-left">
            <img src="./images/sign-in.png" alt="Illustration" style="width: 450px; height: 450px; margin-right: 50px; margin-left: 50px;">
          </div>
          <!-- IMAGE -->
          <div class="col-lg-6 content-right" style="padding-right: 180px;">
            <!-- TITLE -->
            <p class="sign-in-modal">Sign In</p>
            <p class="welcome-modal">Welcome back! Please enter<br>your details.</p>

            <!-- FORM -->
            <div class="form-modal">
              <label for="name" class="form-label" style="text-align: left; font-weight: 500">Name</label>
              <input class="form-control" list="datalistOptions" id="name" placeholder="Name" style=" margin-bottom: 20px;">
            </div>

            <div class="form-modal">
              <label for="name" class="form-label" style="text-align: left; font-weight: 500">Password</label>
              <input type="password" class="form-control" list="datalistOptions" id="password" placeholder="Password" style=" margin-bottom: 20px;">
            </div>

            <!-- FORGOT PASSWORD -->
            <p class="forgot-password-modal">Forgot Password ?</p>

            <!-- BUTTON SIGN IN -->
            <button class="btn btn-primary custom-button-sign-in-modal" onclick="window.location.href='dashboardStudent.html'">Sign In</button>

            <p class="dont-have-account-modal">Don’t have an account? <span style="color: #1466C2;" onclick="window.location.href='register.html'">Sign Up</span></p>

          </div>
        </div>
      </div>

      <!-- Modal Footer -->
      <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div> -->

    </div>
  </div>
</div>