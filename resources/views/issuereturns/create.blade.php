@extends('issuereturns.layout')
@section('content')



<div class="row">
   <div class="card" style="margin:20px;">
     <div class="card-header text-center"><h2>Issue Books</h2></div>


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

        <form action="{{ route('issuereturns.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group col-md-12 mb-3">
            <label>Enter user</label><br>
            <select name="user_id" class="form-select">
            <option value="">Select user</option>
            @foreach($users as $key => $user)
                <option value="{{$user->name}}">{{$user->name}}</option>
            @endforeach
            </select>





            <div class="form-group col-md-12 mb-3">
                <label>Select Book</label><br>
                <select name="book_name" class="form-select">
                <option value="">Select book name</option>
                @foreach($books as $key => $book)
                    <option value="{{$book->book_name}}">{{$book->book_name}}</option>
                @endforeach
                </select><br/>



            <label>Enter Issue date</label><br>
            <input type="date" name="issue_date" class="form-control"><br>



            <label>Enter Return date</label><br>
            <input type="date" name="return_date" class="form-control" > <br/>


            <label>Status</label><br>
             <select name="status" class="form-select">
            <option> Issued</option>
            <option>Returned</option>
            <option> Not returned</option>
             </select>
             <br/> <br/>


            <input type="submit" class="btn btn-info" title="Add New"Style=" float:left;">

            <a class="btn btn-primary"  href="{{ route('issuereturns.index')  }}" Style=" float:right;"> Back</a>
       </form>

     </div>

     @endsection
   </div>

</div>
