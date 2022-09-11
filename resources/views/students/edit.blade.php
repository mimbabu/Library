@extends('students.layout')
@section('content')

<div class="container">
    <div class="row m-5 p-5">

<div class="card ">
<div class="card-heder p-2 text-center"><h2>Edit Book Info</h2></div>

<div class="card-body">
  
<form action="{{ url( 'student/' .$students->id) }}" method="POST" enctype="multipart/form-data" >
@csrf

    @method("PUT")

<input type="hidden" name="id" id="id" value="{{$students->id}}" class="form-control"/>

<label>Book Name</label><br/>
<input type="text" name="book_name" id="book_name" value="{{$students->book_name}}" class="form-control"/><br/>


<label>Author Name</label><br/>
<input type="text" name="author_name" id="author_name" value="{{$students->author_name}}" class="form-control"/><br/>


<label>Qty</label><br/>
<input type="text" name="qty" id="qty" value="{{$students->qty}}" class="form-control"/><br/>

<label>Cover</label><br/>
<input type="file" name="file_path" id="file_path"  src="{{ asset('storage/app/public/images .$students->file_path') }}" class="form-control"/><br/>

<input type="submit"  value="Update"class="btn btn-info"/> <br/>


</form>

<a href="{{url('/student')}}"  title="Add New"Style=" float:right;"><button class="btn btn-info btn-sm" "><span><i class="fa-solid fa-book-user"></i></span>Back</button></a>
</div>
</div>
</div>
</div>
@stop