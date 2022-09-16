@extends('bookuploads.layout')
@section('content')


@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif 


<div class="row">
      



      <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Book Name</th>
                <th>Author</th>
                <th>Category</th>
                <th>Qty</th>
                <th>Cover</th>
                <th>Publish Year</th>
                <th>Strorage Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            @foreach ($bookuploads as $book)


                <td>{{ $loop->iteration }}</td>
                <td>{{ $book->book_name }}</td>
                <td>{{ $book->author_name	 }}</td>
                <td>{{ $book->category_Id }}</td>
                <td>{{ $book->qty }}</td>
                <td> <img src="{{('/uploads/bookuploads/'.$book->cover ) }}" width="80px", height="70px" class="img-responsive" alt="image"</td>
                <td>{{ $book->storage_date	 }}</td>
                <td>{{ $book->publish_year }}</td>
                <td>
                    <form action="/delete-book" method="post">
                 
                    <a  class="btn btn-success" href="{{ url('/add-book') }}" >Add</a>
                    <a  class="btn btn-info" href="{{ url('/show-book/{id}') }}" >View</a>
                    <a  class="btn btn-primary" href="{{url('/edit-book/{id}' .$book->id)}}">Edit</a>

                    
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                    <!-- <a  class="btn btn-danger" href="{{url('/delete-book/{id}')}}">Delete</a> -->
                    </form>
<!-- 
                    <form method="POST" action="{{ url( '/delete-book/{id}' . '/'. $book->id) }}"  accept-charset="UTF-8" Style="display: inline ;" >
            
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
         <button class="btn btn-danger btn-sm" type="submit" title="Delete Book" onClick="return Confirm("Confirm Delete") "><i class="fa-solid fa-book-user"></i>Delete</button>
     </form> -->
                  
                </td>
            </tr>
           
        </tbody>
        @endforeach
       
    </table>
   
         
</div>


@stop
 






