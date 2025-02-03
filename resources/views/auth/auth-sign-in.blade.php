@extends('notebook.layouts.loginapp')
@section('content') 

<section class="login-content">
   <div class="container h-100">
      <div class="row justify-content-center align-items-center height-self-center">
         <div class="col-md-5 col-sm-12 col-12 align-self-center">
            <div class="sign-user_card">
               <div class="logo-detail">
                  <div class="d-flex align-items-center"><img src="{{ url('images/logo.png') }}"
                        class="img-fluid rounded-normal light-logo logo" alt="logo">
                     <h4 class="logo-title ml-3">SmeaBook</h4>
                  </div>
               </div>
               <h3 class="mb-2">Sign In</h3>
               <p>Login to stay connected.</p>
               <form id="loginForm">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="floating-label form-group">
                           <input id="email" class="floating-input form-control" type="email" placeholder=" ">
                           <label>Email</label>
                        </div>
                     </div>
                     <div class="col-lg-12">
                        <div class="floating-label form-group">
                           <input id="password" class="floating-input form-control" type="password" placeholder=" ">
                           <label>Password</label>
                        </div>
                     </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Sign In</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>

<script>
   document.getElementById('loginForm').addEventListener('submit', async function (event) {
      event.preventDefault();

      let email = document.getElementById('email').value;
      let password = document.getElementById('password').value;

      let response = await fetch("http://127.0.0.1:8000/api/login", {
         method: "POST",
         headers: {
            "Content-Type": "application/json"
         },
         body: JSON.stringify({ email, password })
      });

      let result = await response.json();

      if (response.ok) {
         alert("Login successful! Token: " + result.token);
         localStorage.setItem("auth_token", result.token);
         window.location.href = "/"; // Redirect setelah login
      } else {
         alert("Login failed: " + result.message);
      }
   });
</script>

@endsection