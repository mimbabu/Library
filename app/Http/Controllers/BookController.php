<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::latest()->paginate(5);

        return view('books.index',compact('books'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }



public function bookshow()
{

        $lbooks = Book::orderBy('id', 'desc')->take(2)->get();
        $pbooks = Book::where("category_id", 2)->get();
        $fbooks = Book::where("category_id", 19)->get();

       // print_r($books);
       return view('welcome',compact('lbooks',"pbooks",'fbooks'));
}



public function bookdetails(Book $book){

    return view('details',compact('book'));




}


public function recentBooks()
    {
        $lbooks = Book::orderBy('id', 'desc')->take(6)->get();
        $pbooks = Book::where("category_id", 2)->get();

       // print_r($books);
       return view('welcome',compact('lbooks',"pbooks"));
    }





    public function create()
    {
        return view('books.create',[
            'categories' => Category::all()
        ]);
    }


       /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function store(Request $request)
    {
        $request->validate([
            'book_name' => 'required',
            'author_name' => 'required',
            'category_id' => 'required',
            'qty' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'publish_year' => 'required',
            'storage_date' => 'required',

        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Book::create($input);

        return redirect()->route('books.index')
        ->with('success','Book added successfully.');
    }



     /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */



    public function show(Book $book)
    {
        return view('books.show',[
            'books' => $book
        ]);
    }

    public function edit(Book $book)
    {
         $categories = Category::all();

        return view('books.edit',compact('book','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */



    public function update(Request $request, Book $book)
    {


        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        $book->update($input);

        return redirect()->route('books.index')
                        ->with('success','Book updated successfully');
    }


 /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book $book
     * @return \Illuminate\Http\Response
     */


    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')
                        ->with('success','Book deleted successfully');
    }






}