<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <title>iCLOP</title>
</head>


<body>
   <!-- NAVBAR -->
   <nav class="navbar navbar-expand-lg" style="background-color: #fff; ">
    <div class="container-fluid">
      <!-- <a class="navbar-brand" href="#">Navbar</a> -->
      <img src="./images/logo.png" alt="logo" width="104" height="65">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
        <button class="btn btn-primary custom-button-sign-up" onclick="window.location.href='register.html'">Sign Up</button>
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

  <!-- CONTENT -->
  <div class="container" style="margin-top: 50px;">
    <div class="row">
      <!-- TEXT -->
      <div class="col-lg-6 content-left">
        <p class="welcome-to-iclop">Welcome To iCLOP</p>
        <p class="where-education" style="line-height:60px ;">Where Your <span class="education">Education</span> Has No
          Limit</p>
        <p class="subtext">iCLOP (intelligent computer assisted programming learning platform)</p>
        <p class="subtext">With our easy-to-follow tutorials and examples, you can learn to code in no time. Learn to
          code by reading tutorials, trying out examples, and writing applications.</p>
      </div>
      <!-- IMAGE -->
      <div class="col-lg-6 content-right">
        <img src="./images/Edeucation.png" alt="Illustration" style="width: 500px; height: auto;">
      </div>
    </div>
  </div>

  <div class="container" style="margin-top: 10px">
    <div class="row">
      <!-- IMAGE -->
      <div class="col-lg-6 content-left">
        <img src="./images/online_virtual_machine.png" alt="Illustration" style="width: 500px; height: auto;">
      </div>
      <!-- TEXT -->
      <div class="col-lg-6 content-right">
        <p class="where-education" style="font-size: 40px;">Online Virtual Machine</p>
        <p style="font-size: 20px; margin-top: 35px;">Make learning an easy process with support for an online virtual
          machine which will relieve you from the hustle of finding the right computer for your learning needs.</p>
      </div>
    </div>

    <div class="container"
      style="background-color: #FAFAFA; height: 750px; margin-top: 50px; display: flex; flex-direction: column; align-items: center;">
      <p class="where-education" style="font-size: 35px; text-align: center; margin-top: 50px;">Choose What You Want To
        Study</p>
      <p class="popular-languages" style="font-size: 20px; text-align: center;">Begin By Studying Some of The Most
        Popular Programming Languages</p>
      <div class="row" style="margin-top: 50px;">

        <div class="card p-0" style="width: 305px; height: 375px; margin-left: 25px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
          <img src="./images/cards/Android.png" class="card-img-top" style="width: auto; height: 200px;">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Android programming 
              with Java and Kotlin</h5>
            <div class="row align-items-start">
              <div class="col-1">
                <img src="./images/book.png" style="width: 13px; height: 16px;">
              </div>
              <div class="col">
                <p>18 learning topics</p>
              </div>
            </div>
            <div style="margin-top: auto;">
              <a href="#" class="btn btn-primary">Start Learning</a>
            </div>
          </div>
        </div>

        <div class="card p-0" style="width: 305px; height: 375px; margin-left: 25px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
          <img src="./images/cards/Flutter.png" class="card-img-top" style="width: auto; height: 200px;">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Mobile programming with Flutter</h5>
            <div class="row align-items-start">
              <div class="col-1">
                <img src="./images/book.png" style="width: 13px; height: 16px;">
              </div>
              <div class="col">
                <p>18 learning topics</p>
              </div>
            </div>
            <div style="margin-top: auto;">
              <a href="#" class="btn btn-primary">Start Learning</a>
            </div>
          </div>
        </div>

        <div class="card p-0" style="width: 305px; height: 375px; margin-left: 25px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
          <img src="./images/cards/Node.js.png" class="card-img-top" style="width: auto; height: 200px;">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Web application with Node.JS</h5>
            <div class="row align-items-start">
              <div class="col-1">
                <img src="./images/book.png" style="width: 13px; height: 16px;">
              </div>
              <div class="col">
                <p>18 learning topics</p>
              </div>
            </div>
            <div style="margin-top: auto;">
              <a href="#" class="btn btn-primary">Start Learning</a>
            </div>
          </div>
        </div>

        <!-- CARD -->

        <!-- <div class="card" style="width: 325px; height: 385px; margin-right: 20px;">
          <img src="./images/cards/javascript.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div> -->

        <!-- <div class="card" style="width: 18rem; margin-right: 20px;">
          <img src="./images/cards/python.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div> -->

      </div>
      <button class="btn btn-primary custom-button-sign-up" style="width: 252px; height: 42px; margin-top: 60px;">Load
        More</button>
    </div>

    <p class="where-education" style="font-size: 40px; text-align: center; margin-top: 50px;">Our Services</p>
    <p style="font-size: 25px; text-align: center; margin-top: 25px; color: #636363;">Make Your Learning
      Experience<br>Extraordinary With The Services We Provide</p>

      <!-- CARD 1 -->
    <div class="container text-center" style="margin-top: 100px;">
      <div class="row">
        <div class="col" style="width: 430px; height: 440px; margin-left: 25px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
          <div class="container">
            <img src="./images/cards/computer.png" alt="computer" style="height: 102px; margin-left: 30px; margin-top: 20px;">
            <p style="font-size: 22px; font-weight: 600; color: #34364A; margin-top: 24px;">Fully Computer-Assisted<br>Learning Platform</p>
            <p style="font-size: 18px;">Digital educational platform that utilizes artificial intelligence and machine learning to provide a comprehensive and interactive learning experience entirely driven by computer technology.<br>
          </div>
        </div>

        <div class="col" style="width: 430px; height: 440px; margin-left: 25px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
          <div class="container">
            <img src="./images/cards/eos-icons_machine-learning.png" alt="eos-icons_machine-learning" style="height: 102px; margin-top: 25px;">
            <p style="font-size: 22px; font-weight: 600; color: #34364A; margin-top: 24px;">Intelligence<br>Guidance</p>
            <p style="font-size: 18px;">System or technology that provides automated support and guidance to learners,<br>assisting them in their learning journey through intelligent algorithms and machine learning.</p>
          </div>
        </div>

        <div class="col" style="width: 430px; height: 440px;  margin-left: 25px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
          <div class="container">
            <img src="./images/cards/Grading.png" alt="Grading" style="height: 102px; margin-top: 10px;">
            <p style="font-size: 22px; font-weight: 600; color: #34364A; margin-top: 24px;">Auto<br>Grading</p>
            <p style="font-size: 18px;">Technology that automatically evaluates and scores assignments, exams, or assessments,eliminating<br> the need for manual grading by instructors and providing efficient and consistent feedback to students. </p>
          </div>
        </div>

        <!-- CARD 2 -->
        <div class="container text-center" style="margin-top: 35px;">
        <div class="row">
        <div class="col" style="width: 430px; height: 440px; margin-left: 25px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
          <div class="container">
            <img src="./images/cards/Intelligence.png" alt="rocket" style="height: 102px; margin-top: 20px;">
            <p style="font-size: 22px; font-weight: 600; color: #34364A; margin-top: 24px;">Intelligence Learning <br>Guidance
            </p>
            <p style="font-size: 18px;">Intelligence Learning Guidance utilizes AI and smart algorithms to provide personalized support, adapting to learners' needs and optimizing their educational outcomes.<br>
          </div>
        </div>

        <div class="col" style="width: 430px; height: 440px; margin-left: 25px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
          <div class="container">
            <img src="./images/cards/coding.png" alt="rocket" style="height: 102px; margin-top: 20px;">
            <p style="font-size: 22px; font-weight: 600; color: #34364A; margin-top: 24px;">Practical Coding <br>Approach
            </p>
            <p style="font-size: 18px;">Focuses on teaching coding skills through real-world examples, projects, and problem-solving scenarios, enabling learners to develop practical coding proficiency and problem-solving abilities.<br>
          </div>
        </div>

        <div class="col" style="width: 430px; height: 440px; margin-left: 25px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
          <div class="container">
            <img src="./images/cards/Machine.png" alt="rocket" style="height: 102px; margin-top: 20px;">
            <p style="font-size: 22px; font-weight: 600; color: #34364A; margin-top: 24px;">Online<br>Virtual Machine
            </p>
            <p style="font-size: 18px;">Virtual computing environment accessible over the internet, enabling users to run applications, perform tasks, and store data without requiring physical hardware.<br>
          </div>
        </div>

      </div>
    </div>


      </div>
    </div>
  </div>


</body>
<script src="script.js"></script>
<footer>
   <!-- FOOTER -->
  <div class="container text-align"
   style="margin-top: 100px; background-color: #FAFAFA; padding-right: 50px; padding-left: 50px; height: 300px;">
    <div class="row">
      <div class="col">
        <div class="container" style="margin-top: 40px;">
          <img src="./images/logo.png" alt="rocket" style="height: 60px;">
          <p style="font-size: 16px;  color: #636363;">Intelligent Computer Assisted<br>Programming Learning Platform.
          </p>
        </div>
        <div class="container">
          <i class="fab fa-instagram fa-lg" style="padding-right: 2px; color: #636363;"></i>
          <i class="fab fa-github fa-lg" style="padding-right: 2px; color: #636363;"></i>
          <i class="fab fa-linkedin fa-lg" style="padding-right: 2px; color: #636363;"></i>
          <i class="fab fa-youtube fa-lg" style="padding-right: 2px; color: #636363;"></i>
        </div>
      </div>

      <div class="col">
        <div class="container">
          <p style="font-size: 22px; font-weight: 600; color: #34364A; margin-top: 40px; margin-left: 55px;">Company</p>
          <p style="font-size: 16px;  color: #636363; margin-left: 55px;">Privacy Policy</p>
        </div>
      </div>

      <div class="col">
        <div class="container">
          <p style="font-size: 22px; font-weight: 600; color: #34364A; margin-top: 40px;">Contact Info</p>
          <div class="row align-items-start">
            <div class="col-1">
              <i class="fas fa-map-marker-alt fa-lg" style="color: #636363; margin-top: 5px;"></i>
            </div>
            <div class="col">
              <p style="font-size: 16px;  color: #636363;">Jl. Candi Mendut, RT.02/RW.08, Mojolangu, Kec. Lowokwaru,
                Kota Malang, Jawa Timur 65142</p>
            </div>
          </div>

          <div class="row align-items-start">
            <div class="col-1">
              <i class="fas fa-envelope" style="color: #636363; margin-top: 5px;"></i>
            </div>
            <div class="col">
              <p style="font-size: 16px;  color: #636363;">qulis＠polinema.ac.id (Email)</p>
            </div>
          </div>

        </div>
      </div>

      <div class="divider"></div>
      <p style="font-size: 16px; color: #636363; text-align: center; margin-top: 16px; margin-bottom: 16px;">© 2023
        iCLOP. All rights reserved</p>
    </div>
  </div>
</footer>
</html>