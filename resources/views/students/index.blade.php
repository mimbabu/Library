

@extends('students.layout')
@section('content')
<div class="container">
    <div class="row p-5" style ="margin:20px;">
    <div class="col-12">
    <div class="card">
        <div class="card-header text-center">
            <h2>Book Operation Here</h2>
        </div>
        <div class="card-body">
            <a href="{{url('/student/create')}}" class="btn btn-info btn-sm" title="Add New">Add</a>
            <br/>
            <br/>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                <tr>
                     <th>Id</th>
                    <th>Book Name </th>
                    <th>Author</th>
                    <th>Qty</th>
                    <th>Cover</th>
                    <th>Action</th>
                    
              </tr>
                </thead>

                <tbody>
                    @foreach($students as $item)
                    <tr>
                    
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->book_name}}</td>
                    <td>{{$item->author_name}}</td>
                    <td>{{$item->qty}}</td>
                    <td>{{$item->file_path}}</td>


        <td> 
              
            <a href="{{url('/student/create')}}"  title="Add New"><button class="btn btn-info btn-sm"><span><i class="fa-solid fa-book-user"></i></span>Add</button></a>
            <a href="{{ url('/student/' .$item->id . '/edit')}}"  title="Add New"><button class="btn btn-success btn-sm"><i class="fa-solid fa-book-user"></i>Edit</button></a>
            <a href="{{ url('/student/' .$item->id)}}"  title="Add New"><button class="btn btn-success btn-sm">
          <i class="fa-solid fa-calendar-xmark"></i>View</button></a>

            <form method="POST" action="{{ url( 'student' . '/'. $item->id) }}"  accept-charset="UTF-8" Style="display: inline ;" >
            
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
         <button class="btn btn-danger btn-sm" type="submit" title="Delete Book" onClick="return Confirm("Confirm Delete") "><i class="fa-solid fa-book-user"></i>Delete</button>
     </form>
    </td>
    
       
    
                
         
             
            </tr>
            @endforeach
                </tbody>
                </table>
            </div>


        </div>
    </div>
    </div>
</div>

@endsection