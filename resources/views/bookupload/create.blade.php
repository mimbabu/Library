@extends('bookupload.layout')
@section('content')
<div class="row mt-5">
<div class="card" style="margin:20px;">
<div class="card-header text-center"><h2>Upload New Books</h2></div>

<div class="card-body">
<form action="{{('/add-book/')}}" method="post" enctype="multipart/form-data">
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
            <input type="file" name="cover" class="form-control" > <br>


            <label>Publish year</label><br>
            <input type="string" name="publish_year" class="form-control"><br>

            <label>Enter Storage date</label><br>
            <input type="date" name="storage_date" class="form-control" ><br>


</form>


<a href="{{url('/add-book/')}}" input type="submit" class="btn btn-info" title="Add New"Style=" float:left;">Submit
    
</a>

<button class="btn btn-success"Style=" float:right;"> Back</button>
</div>
</div>
</div>


@stop