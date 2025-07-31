<?php
    include('include/header.php');
?>  
  
  
  
  <style>
    
      body {
        margin: 0;
        font-family: 'Segoe UI', sans-serif;
        background: linear-gradient(to bottom, #e6e6e6 0%, #fde7a4 100%);
        color: #333;
        line-height: 1.6;
    };
    

    .form-section {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(243, 20, 20, 0.1);
    }

    .step-progress {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .step-progress span {
      text-align: center;
      font-weight: bold;
    }

    .step-progress .active {
      color: rgb(89, 167, 171);
    }

    .form-title {
      font-size: 2.5rem;
      font-weight: bold;
    }

    .form-title span {
      color: rgb(89, 167, 171);
      font-family: 'Cursive';
    }

    .form-label {
      font-weight: bold;
    }

    .container12 {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      padding: 60px 10%;
    }

    .font-family-rabic {
      font-family: cursive;
    }

    .font-weight-do {
      font-size: x-large;
    }
    </style>
    <body>
   <div style="position: relative; overflow: hidden; text-align: center; color: white; padding: 100px 20px;">
 
    <!-- Blurred background image -->
    <div
      style=" position: absolute;  top: 0;  left: 0; width: 100%;  height: 100%; background-image: url('assets/img/volunteerpage.jpg'); background-size: cover;background-position: center;filter: blur(1px); z-index: 0">
    </div>

    <div
      style="  position: absolute;   top: 0;  left: 0;  width: 100%;  height: 100%; background-color: rgba(0, 0, 0, 0.4);  z-index: 1;">
    </div>

    <!-- Foreground content -->
    <div style="position: relative; z-index: 2;">
      <h1 style="font-size: 50px; font-weight: bolder;font-family: 'Courier New', Courier, monospace;">
        <span style="color:rgb(240, 241, 240)"> Volunteer Application Registration </span>
      </h1>
      <p style="font-size: 18px; margin: 20px 0;font-family: inherit;">
        "Your greatest wealth is the impact you create.
        <br> Become a volunteer — because every act of kindness shapes a better world."
      </p>
      <br>
      <a href="#registration"
        style="background-color: #fbfbfa; color: rgb(11, 0, 0); padding: 12px 25px; text-decoration: none; border-radius: 5px; margin-right: 10px;">
        Registration Form
      </a>
      <a href="#"
        style="background-color: #fbf9f9; color: #333; padding: 12px 25px; text-decoration: none; border-radius: 5px;">
        Categories
      </a>
    </div>
  </div>
  <br>
  <br>

  <h4
    style="font-size: 50px;text-align: center; font-weight: bolder;font-family: 'Courier New', Courier, monospace;margin: top 100px;;">
    <span style="color:rgb(9, 9, 9);"> Volunteering Categories</span>
  </h4>

  <body class="bg-light">

    <div class="container py-5 card shadow-sm mt-5 mb-5 w-100% bg-search">
      <div class="row justify-content-center g-4">


        <div class="col-md-3">
          <div class="card text-center shadow-sm h-70 ">
            <div class="card-body">
              <div class="mb-3">
                <br>
                <h2 class="fw-bold font-family-rabic font-weight-do">Food Distribution</h2>

              </div>

            </div>
          </div>
        </div>


        <div class="col-md-3">
          <div class="card text-center shadow-sm h-70">
            <div class="card-body">
              <div class="mb-3">
                <br>
                <h2 class="fw-bold font-family-rabic font-weight-do">Disaster Relief</h2>
              </div>

            </div>
          </div>
        </div>


        <div class="col-md-3">
          <div class="card text-center shadow-sm h-70">
            <div class="card-body">
              <div class="mb-3">
                <br>
                <h2 class="fw-bold font-family-rabic font-weight-do">Education</h2>
              </div>

            </div>
          </div>
        </div>


        <div class="col-md-3">
          <div class="card text-center shadow-sm h-70">
            <div class="card-body">
              <div class="mb-3 hover">
                <br>
                <h2 class="fw-bold font-family-rabic font-weight-do">Health Care</h2>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
    </div>
    <br>
    <br>


    <div class="container " id="registration">
      <div class="row">
        <!-- Form Title -->
        <div class="col-12 text-center mb-2">
          <h2 class="form-title"><span>Fill The</span> Volunteering Form</h2>
        </div>

        <!-- Form -->
        <div class="col-lg-8 offset-lg-2 form-section">
          <!-- Progress bar -->
          <div class="step-progress mb-4 text-align:center">
            <span class="active">Personal Details</span>

          </div>

          <form>
            <!-- Full Name -->
            <div class="mb-3">
              <label for="fullName" class="form-label">Full Name *</label>
              <input type="text" class="form-control initial-scale" id="fullName" placeholder="Enter Name" required>

            </div>
            <!-- Email and Phone -->
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="email" class="form-label">Email Address *</label>
                <input type="email" class="form-control initial-scale" id="email" placeholder="" required>

              </div>
              <div class="col-md-6 mb-3">
                <label for="phone" class="form-label">Phone *</label>
                <input type="tel" class="form-control initial-scale" id="phone" placeholder="91+" required>

              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="dob" class="form-label">D.O.B *</label>
                <input type="date" class="form-control initial-scale" id="dob" required>

              </div>
              <div class="col-md-6 mb-3">
                <label for="gender" class="form-label">Gender *</label>
                <select class="form-control initial-scale" id="gender" required>
                  <option value="">Select</option>
                  <option>Male</option>
                  <option>Female</option>

                </select>

              </div>
            </div>

            <!-- Father's Name and Mother's Name -->
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="fatherName" class="form-label">Father's Name *</label>
                <input type="text" class="form-control initial-scale" id="fatherName" placeholder="Enter father's Name"
                  required>

              </div>
              <div class="col-md-6 mb-3">
                <label for="phone" class="form-label">Father's Contact No. *</label>
                <input type="tel" class="form-control initial-scale" id="phone" placeholder="91+" required>

              </div>
            </div>





            <!-- Submit -->
            <button type="submit" class="btn btn-primary mt-3">Next</button>
          </form>
        </div>
      </div>
    </div>
  </body>
  <div footer
    style="background-color: #333; color: #fff; padding: 20px; text-align: center; margin-left: -5px;margin-top: 35px;">
    <p>&copy; 2025 Navkar Donations All rights reserved.</p>

    <p>Follow us on:
      <a href="#" style="color: #fff; text-decoration: none;" class="fa ms-1 fa-facebook"> Facebook</a>
      <a href="#" style="color: #fff; text-decoration: none;" class="fa ms-1 fa-twitter"> Twitter</a>
      <a href="#" style="color: #fff; text-decoration: none;" class="fa ms-1 fa-instagram"> Instagram</a>
    </p>
  </div>

</html>