@extends('categories.layout')
@section('content')


 <div class="container">
    <div class="row p-5 justify-content-center">
<div class="card">
<div class="card-heder">Category Page</div>

<div class="card-body text-center">
    <h5 class="card-title"> Category Name: {{ $category->category_name }}</h5><br/>


    
   
</div>
<div class="p-2"><a  href="{{ route('categories.index') }}" title="Add New"Style=" float:right;"><button class="btn btn-info btn-sm" "><span><i class="fa-solid fa-book-user"></i></span>Back</button></a></div>

</div>
</div>
</div>






    @endsection