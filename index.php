<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login and Registration Form in HTML | CodingNepal</title>
      <link rel="stylesheet" href="style2.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   
   <body>
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               SRMS Login
            </div>
            <div class="title signup">
               SRMS Signup
            </div>
         </div>
         
            <div class="form-inner">
               <form action="#" class="login">
                  <div class="field">
                     <input type="text" placeholder="Username" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" required>
                  </div>
                  <div class="pass-link">
                     <a href="forgotpassword.php">Forgot password?</a>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Login">
                  </div>
                  <div class="signup-link">
                     Don't have an Account?  <a href="signup.php">Signup now</a>
                  </div>
               </form>
              
            </div>
         </div>
      </div>
      <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
      </script>
   </body>
</html>

