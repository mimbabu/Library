@extends('students.layout')
@section('content')

<div class="container">
    <div class="row p-5 justify-content-center">
<div class="card">
<div class="card-heder">Book Page</div>

<div class="card-body text-center">
    <h5 class="card-title"> Book Name: {{ $students->book_name }}</h5><br/>
    <p class="card-text">Author Name:{{ $students->author_name }}</p><br/>
    <p class="card-text">Cover<br/><img src="{{($students->file_path)}}" width="150" height="180" class="img-responsive"/></p>
    <p class="card-text">Qty:{{ $students->qty }}</p>
</div>
<div class="p-2"><a href="{{url('/student')}}"  title="Add New"Style=" float:right;"><button class="btn btn-info btn-sm" "><span><i class="fa-solid fa-book-user"></i></span>Back</button></a></div>

</div>
</div>
</div>