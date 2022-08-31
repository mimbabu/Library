@extends('students.layout')
@section('content')

<div class="container">
    <div class="row m-5 p-5">

<div class="card ">
<div class="card-heder p-2 text-center"><h2>Edit Book Info</h2></div>

<div class="card-body">
  
<form action="{{ url( 'student/' .$students->id) }}" method="POST" >
{!! csrf_field() !!}
    @method("PATCH")

<input type="hidden" name="id" id="id" value="{{$students->id}}" class="form-control"/>

<label>Book Name</label><br/>
<input type="text" name="book_name" id="book_name" value="{{$students->book_name}}" class="form-control"/><br/>


<label>Author Name</label><br/>
<input type="text" name="author_name" id="author_name" value="{{$students->author_name}}" class="form-control"/><br/>


<label>Qty</label><br/>
<input type="text" name="qty" id="qty" value="{{$students->qty}}" class="form-control"/><br/>

<label>Cover</label><br/>
<input type="text" name="file_path" id="file_path" value="{{$students->file_path}}" class="form-control"/><br/>

<input type="submit"  value="Update"class="btn btn-info"/> <br/>


</form>
</div>
</div>
</div>
</div>
@stop