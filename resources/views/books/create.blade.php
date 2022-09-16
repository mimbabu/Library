@extends('books.layout')
@section('content')



<div class="row">
   <div class="card" style="margin:20px;">
     <div class="card-header text-center"><h2>Add New Books</h2></div>


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
     
        <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    
    

         <label>Enter Book name</label><br>
            <input type="string" name="book_name" class="form-control"><br>

            <label>Enter Author name</label><br>
            <input type="string" name="author_name"  class="form-control" ><br>

            <label>Enter Category ID </label><br>
            <input type="string" name="category_Id" class="form-control"><br>

            <label>Enter Book Qty</label><br>
            <input type="number" name="qty" class="form-control"><br>

          

            <label>Enter Book image</label><br>
            <input type="file" name="image" class="form-control" > <br>


            <label>Publish year</label><br>
            <input type="string" name="publish_year" class="form-control"><br>

            <label>Enter Storage date</label><br>
            <input type="date" name="storage_date" class="form-control" ><br>

            <input type="submit" class="btn btn-info" title="Add New"Style=" float:left;">

            <a class="btn btn-primary"  href="{{ route('books.index')  }}" Style=" float:right;"> Back</a>
       </form>

     </div>
     
     @endsection
   </div>
 
</div>
