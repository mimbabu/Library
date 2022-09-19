@extends('categories.layout')
@section('content')





<div class="row">

   <div class="card" style="margin:20px;">


     <div class="card-header text-center"><h2>Add Category</h2></div>

        <div class="pull-right p-3">
             <a class="btn btn-success" href="{{ route('categories.create') }}"> Add book</a>
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
                <th>Category Name</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($categories as $category)


                <td> {{  $category->id }} </td>
                <td>{{ $category->category_name }}</td>



            <td>
                <form action="{{ route('categories.destroy',$category->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('categories.show',$category->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('categories.edit',$categories->id) }}">Edit</a>

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




@endsection

