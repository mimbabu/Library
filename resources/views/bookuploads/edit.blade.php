@extends('bookuploads.layout')
@section('content')



<div class="container">
    <div class="row m-5 p-5">

<div class="card ">
<div class="card-heder p-2 text-center"><h2>Edit Book here</h2></div>

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


<form action="/edit-book/{id}" method="POST" enctype="multipart/form-data" >
@csrf
@foreach ($bookuploads as $bookupload)
    @method("PUT")
    @method("PATCH")






<label>Book Name</label><br/>
<input type="text" name="book_name" id="book_name" value="{{$bookupload->book_name}}" class="form-control"/><br/>


<label>Author Name</label><br/>
<input type="text" name="author_name" id="author_name" value="{{ $bookupload->author_name}}" class="form-control"/><br/>



<label>Category ID</label><br/>
<input type="text" name="category_Id" id="qty" value="{{$bookupload->category_Id}}" class="form-control"/><br/>


<label>Qty</label><br/>
<input type="text" name="qty" id="qty" value="{{ $bookupload->qty}}" class="form-control"/><br/>

<label>Cover</label><br/>
<input type="file" name="file_path" id="file_path"  src="{{ asset('storage/app/public/images .$bookupload->file_path') }}" class="form-control"/><br/>


<label>Publish year</label><br/>
<input type="text" name="qty" id="qty" value="{{$bookupload->publish_year}}" class="form-control"/><br/>



<label>Storage date</label><br/>
<input type="text" name="qty" id="qty" value="{{$bookupload->storage_date}}" class="form-control"/><br/>


<input type="submit"  value="Update"class="btn btn-info"/> <br/>

@endforeach

</form>

<a href="{{url('/edit-book/{id}')}}"  title="Add New"Style=" float:right;">
<button class="btn btn-info btn-sm" "><span><i class="fa-solid fa-book-user"></i></span>Back</button></a>
</div>

</div>
</div>
</div>

@stop







