@if (session('success'))
     <div class="alert alert-success">
         {{ session('success') }}
         <button type="button" class="close" data-dismiss="alert">
           <span>&times;</span>
         </button>
       </div>
@endif