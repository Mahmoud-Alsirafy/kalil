<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Smart Diagnosis</title>
    <link rel="icon" href="Group 10.png" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />
  </head>
  <body>
    <section class="register">
      <div
        class="d-flex justify-content-between align-items-center ms-5 mt-2 me-5"
      >
        <div>
          <img
            src="assets/images/Group 10.png"
            class="img-fluid w-50 logo"
            alt=""
          />
        </div>
        <div>
          <a href="login.php" class="login">Login</a>
        </div>
      </div>
      <div id="content" class="d-flex justify-content-between">
        <div>
          <img src="assets/images/image (5) 1.png" class="doctor" alt="" />
        </div>
        <div class="me-5">
          <div>
            <h6>Let's protect yourself and those around you by vaccinating</h6>
            <p>Iam Registering as</p>
          </div>
            <!-- form -->
            <form action="">
            <div class="d-flex gap-5 align-items-center check">
              <div class="align-items-center">
                <label for="doctor" class="">Doctor</label>
                <input type="radio" name="doctor" id="" />
              </div>
              <div class="align-items-center">
                <label for="patient" class="">Patient</label>
                <input type="radio" name="patient" id="" />
              </div>
            </div>
            
              <div class="d-flex flex-column">
                <label for="name">Full Name</label>
                <input type="text" name="name" placeholder="Full Name" />
              </div>
              <div class="d-flex flex-column">
                <label for="number">Mobile Number</label>
                <input type="number" name="number" placeholder="+201*********" />
              </div>
              <div class="d-flex flex-column">
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="Enter Email" />
              </div>
              <div class="d-flex flex-column">
                <label for="password">Password</label>
                <input type="text" name="password" placeholder="Enter Password" />
              </div>
              <div class="d-flex flex-column">
                <label for="confirm">Confirm Password</label>
                <input type="text" name="confirm" placeholder="Enter Confirm Password" />
              </div>
              <button type="submit" name="add" class="submit">submit</button>
            </form>
            <!-- end form -->
             
          
        </div>
      </div>
    </section>
  </body>
</html>
