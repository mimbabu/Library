@extends('categories.layout')
@section('content')



<div class="row">
   <div class="card" style="margin:20px;">
     <div class="card-header text-center"><h2>Add New Category</h2></div>


     <div class="card-body">

     
       @if ($errors->any())
        <div class="alert alert-danger">
         <strong>Whoops!</strong> There were some problems with your input.<br><br>
          <ul>
             @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
             @endforeach
         </ul>
       </div>
       @endif
     
        <form action="{{ route('categories.store') }}" method="POST">
        @csrf
    
    

         <label>Enter Category name</label><br>
            <input type="string" name="category_name" class="form-control"><br>


            <input type="submit" class="btn btn-info" title="Add New"Style=" float:left;">

            <a class="btn btn-primary"  href="{{ route('categories.index')  }}" Style=" float:right;"> Back</a>
       </form>

     </div>
     
     @endsection
   </div>
 
</div>
