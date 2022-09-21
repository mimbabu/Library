@extends('issuereturns.layout')
@section('content')





<div class="row">

   <div class="card" style="margin:20px;">


     <div class="card-header text-center"><h2>Issue Books</h2></div>

        <div class="pull-right p-3">
             <a class="btn btn-success" href="{{ route('issuereturns.create') }}"> Issue book</a>
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
                <th>User Name</th>
                <th>Book Name</th>
                <th>Issue Date</th>
                <th>Return Date</th>
                <th>Status</th>

                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($issuereturns as $issuereturn)


                <td>{{ $loop->iteration }}</td>
                <td>{{ $issuereturn->user_id }}</td>
                <td>{{ $issuereturn->book_name }}</td>
                <td>{{ $issuereturn->issue_date }}</td>
                <td>{{ $issuereturn->return_date }}</td>
                <td>{{ $issuereturn->status }}</td>


            <td>
                <form action="{{ route('issuereturns.destroy',$issuereturn->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('issuereturns.show',$issuereturn->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('issuereturns.edit',$issuereturn->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
               </form>
             </td>
         </tr>

     </tbody>
        @endforeach

    </table>

    </div>

    </div>

<div class="row">{!! $issuereturns->links() !!} </div>


@endsection

