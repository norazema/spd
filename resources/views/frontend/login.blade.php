@extends('frontend.layout')
@section('content')


    <!-- Page Content -->
    <section class="py-5">
      <div class="container">
       <form>
        <h1>Sign In</h1><br>
         <div class="form-group row">
           <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
           <div class="col-sm-10">
             <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
           </div>
         </div>
         <div class="form-group row">
           <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
           <div class="col-sm-10">
             <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
           </div>
         </div>
         <div class="form-group row">
           <div class="col-sm-10">
             <button type="submit" class="btn btn-primary">Sign in</button>
           </div>
         </div>
       </form>
      </div>
    </section>
@endsection
