@extends('bookuploads.layout')
@section('content')

<div class="container">
    <div class="row p-5 justify-content-center">
<div class="card">
<div class="card-heder">Bookupload Page</div>

<div class="card-body text-center">
    <h5 class="card-title"> Book Name: {{ $bookupload->book_name }}</h5><br/>
    <p class="card-text">Author Name:{{ $bookupload->author_name }}</p><br/>

    <p class="card-text">Category ID {{ $bookupload->category_Id }}</p><br/>
    <p class="card-text">Qty:{{ $bookuploads->qty }}</p><br/>

    <p class="card-text">Cover<br/><img src="{{uploads/bookuploads/ ($bookupload->cover) }}" width="250" height="280" class="img-responsive"/></p>

    <p class="card-text">Publish year:{{ $bookupload->publish_year }}</p><br>
    <p class="card-text">Storage Date:{{ $bookupload->storage_date }}</p>
   
</div>
<div class="p-2"><a href="{{url('/bookupload')}}"  title="Add New"Style=" float:right;"><button class="btn btn-info btn-sm" "><span><i class="fa-solid fa-book-user"></i></span>Back</button></a></div>

</div>
</div>
</div>