
@extends('students.layout')
@section('content')


<div class="card" style="margin:20px;">
<div class="card-header">
    Add New Books</div>
    


    <div class="card-body">
    <form method="post" action="{{url('student')}}" enctype="multipart/form-data" >
        
@csrf
    <label>Name</label><br>
    <input type="text" class="form-control" name="book_name" placeholder="Enter your book Name"></br>

    <label>Author</label><br>
    <input type="text" class="form-control" name="author_name" placeholder="Enter author name"></br>

    
    <label>Qty</label></br>
    <input type="number" class="form-control" name="qty" placeholder="Enter qty "></br>
    <label>Cover</label></br>
    <input type="file" class="form-control" name="file_path"></br>

    <input type="submit" value="save" class="btn btn-success"></br>
</form>

<a href="{{url('/student')}}"  title="Add New"Style=" float:right;"><button class="btn btn-info btn-sm" "><span><i class="fa-solid fa-book-user"></i></span>Back</button></a>

    </div>
    </div>
</div>


@stop