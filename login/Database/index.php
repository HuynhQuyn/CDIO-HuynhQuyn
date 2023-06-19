<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website with login and registre form </title>

    <!--- css link ---->
    <link rel="stylesheet" type=" text/css" href="index.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css">
        <!--- googe font ---->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?
        family=MuseoModerno:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <!---header degisn--->

    <header>
        <a href="#" class="logo"> HB Booking!</a>

        <ul class="navbar">
            <li> <a href="#">Home</a></li>
            <li> <a href="#">About</a></li>
            <li> <a href="#">Services</a></li>
            <li> <a href="#">Blog</a></li>
            <li> <a href="#">ContactUS</a></li>
            <button type="button" class="btnLogin-popup">Login</button>

        </ul>

    </header>

    <!---containner  --->
    <div class="container">
        <div class="main-box login">
          <h1>Login</h1>
          <form action="reg.php" method="post">
            <div class="input-box">
              <span class="icon"><i class='bx bxs-envelope'></i></span>
              <input type="email" required>
              <label>Email</label>
            </div>
            <div class="input-box">               
              <span class="icon"><i class='bx bxs-lock-alt'></i></span>
              <input type="password" required>
              <label>Password</label>
            </div>
            <div class="check">
                <label>
                    <input type="checkbox"> Remember me </label>
                    <a href="#">Forget Password</a>
            </div>
            <button type="sumbit" class="main-btn"> Login</button>

            <div class="register">
                <p> If you don't have an account? <a href="#" class="register-link">
                    Register Here!</a></p>     
            </div> 
          </form>
        </div>
        <div class="main-box register">
            <h1>Registration</h1>
            <form action="">
              <div class="input-box">
                <span class="icon"><i class='bx bx-user' ></i></span>
                <input type="Full name" required>
                <label>Full name:</label>
              </div>
              <div class="input-box">
                <span class="icon"><i class='bx bx-user' ></i></span>
                <input type="username" required>
                <label>Username:</label>
              </div>
              <div class="input-box">
                <span class="icon"><i class='bx bxs-envelope'></i></span>
                <input type="email" required>
                <label>Email:</label>
              </div>
              <div class="input-box">               
                <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                <input type="password" required>
                <label>Password:</label>
              </div>
              <div class="check">
                  <label>
                      <input type="checkbox"> I accept all terms & conditions</label>
                      <a href="#">Forget Password</a>
              </div>
              <button type="sumbit" class="main-btn"> Register Now</button>
  
              <div class="register">
                  <p> Already have an account? <a href="#" class="login-link">
                      Login!</a></p> 
              </div>
            </form>
          </div>

        <span class="close-icon">
            <div  class="bx bx-x"></div>
         </span>

      </div>
      
            <!---  custom js link ---->

    <script type="text/javascript" src="./script.js"> </script>
</body>
</html>