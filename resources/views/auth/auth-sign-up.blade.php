@extends('notebook.layouts.loginapp')
@section('content') 

      <section class="login-content">
         <div class="container h-100">
            <div class="row justify-content-center align-items-center height-self-center">
               <div class="col-md-5 col-sm-12 col-12 align-self-center">
                  <div class="sign-user_card">
                     <div class="logo-detail">            
                           <div class="d-flex align-items-center"><img src="{{url('../assets/images/logo.png')}}" class="img-fluid rounded-normal light-logo logo" alt="logo"> <h4 class="logo-title ml-3">SmeaBook</h4></div>
                     </div>  
                     <h3 class="mb-2">Sign Up</h3>
                     <p>Buat Akun Anda</p>
                     <form id="registerForm">
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="floating-label form-group">
                                 <input class="floating-input form-control" type="text" name="name" placeholder=" ">
                                 <label>Name</label>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="floating-label form-group">
                                 <input class="floating-input form-control" type="email" name="email" placeholder=" ">
                                 <label>Email</label>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="floating-label form-group">
                                 <input class="floating-input form-control" type="password" name="password" placeholder=" ">
                                 <label>Password</label>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="floating-label form-group">
                                 <input class="floating-input form-control" type="password" name="password_confirmation" placeholder=" ">
                                 <label>Confirm Password</label>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="custom-control custom-checkbox mb-3 text-left">
                                 <input type="checkbox" class="custom-control-input" id="customCheck1">
                                 <label class="custom-control-label" for="customCheck1">I agree with the terms of use</label>
                              </div>
                           </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                        <p class="mt-3 mb-0">
                           Already have an Account <a href="{{ route('auth.sign-in') }}" class="text-primary"><b>Sign Up</b></a>
                        </p>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <script>
         document.getElementById("registerForm").addEventListener("submit", async function(event) {
            event.preventDefault(); // Mencegah form reload
      
            // Ambil data dari input
            let formData = {
               name: document.querySelector("input[name='name']").value,
               email: document.querySelector("input[name='email']").value,
               password: document.querySelector("input[name='password']").value,
               password_confirmation: document.querySelector("input[name='password_confirmation']").value,
            };
      
            try {
               let response = await fetch("http://127.0.0.1:8000/api/register", {
                  method: "POST",
                  headers: {
                     "Content-Type": "application/json",
                     "Accept": "application/json"
                  },
                  body: JSON.stringify(formData)
               });
      
               let result = await response.json();
               if (response.ok) {
                  alert("Registration successful! Please log in.");
                  window.location.href = "{{ route('auth.sign-in') }}"; // Arahkan ke login
               } else {
                  alert("Error: " + result.message);
               }
            } catch (error) {
               console.error("Error:", error);
               alert("Something went wrong.");
            }
         });
      </script>
      
@endsection