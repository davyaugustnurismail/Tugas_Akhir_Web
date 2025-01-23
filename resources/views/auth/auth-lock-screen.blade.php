@extends('layouts.loginapp')
@section('content') 
      <section class="login-content">
         <div class="container h-100">
            <div class="row justify-content-center align-items-center height-self-center">
               <div class="col-md-5 col-sm-12 col-12 align-self-center">
                  <div class="sign-user_card">
                     <div class="logo-detail">            
                           <div class="d-flex align-items-center"><img src="{{url('../assets/images/logo.png')}}" class="img-fluid rounded-normal light-logo logo" alt="logo"> <h4 class="logo-title ml-3">NotePlus</h4></div>
                     </div> 
                     <h3 class="mb-2">Hi ! Bud Wiser</h3>
                     <p>Enter your password to access the admin.</p>
                     <form>
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="floating-label form-group">
                                 <input class="floating-input form-control" type="password" placeholder=" ">
                                 <label>Password</label>
                              </div>
                           </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
@endsection