@extends('frontend.layout')
@section('content')


    <!-- Page Content -->
    <section class="py-5">
      <div class="container">
       <h1>Register New User</h1><br>
       @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
        @endif
       <form method="POST" action="{{route('user.register.post')}}">
        @csrf
        
         <div class="form-group row">
           <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
           <div class="col-sm-10">
             <input type="name" name="name" class="form-control" id="inputEmail3" placeholder="Name">
           </div>
         </div>
         <div class="form-group row">
           <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
           <div class="col-sm-10">
             <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
           </div>
         </div>
         <div class="form-group row">
           <label for="inputEmail3" class="col-sm-2 col-form-label">IC No</label>
           <div class="col-sm-10">
             <input type="ic" name="ic" class="form-control" id="inputEmail3" placeholder="IC No without dash (-)">
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
             <button type="submit" class="btn btn-primary">Register</button>
           </div>
         </div>
       </form>
      </div>
    </section>
@endsection
