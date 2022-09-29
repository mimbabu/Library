@extends('books.layout')
@section('content')





<div class="row">

   <div class="card" style="margin:20px;">


     <div class="card-header text-center"><h2>Add New Books</h2></div>

        <div class="pull-right p-3">
             <a class="btn btn-success" href="{{ route('books.create') }}"> Add book</a>
         </div>


         @if ($message = Session::get('success'))
            <div class="alert alert-success">
            <p>{{ $message }}</p>
             </div>
             @endif





    <table id="example" class="table table-striped" style="width:100%">

        <thead>
            <tr>
                <th>Id</th>
                <th>Book Name</th>
                <th>Author</th>
                <th>Category ID</th>
                <th>Qty</th>
                <th>Cover</th>
                <th>Publish Year</th>
                <th>Storage Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($books as $book)


                <td>{{ ++$i }}</td>
                <td>{{ $book->book_name }}</td>
                <td>{{ $book->author_name	 }}</td>
                <td>{{ $book->category->category_name??'---' }}</td>
                <td>{{ $book->qty }}</td>
                <td> <img src="/image/{{ $book->image }}" width="80px", height="70px" class="img-responsive" alt="image"</td>
                <td>{{ $book->publish_year }}</td>
                <td>{{ $book->storage_date	 }}</td>

            <td>
                <form action="{{ route('books.destroy',$book->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('books.show',$book->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('books.edit',$book->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
               </form>
             </td>
         </tr>
         @endforeach
     </tbody>


    </table>

    </div>

    </div>

    <div class="row">{!! $books->links() !!} </div>


@endsection

