<?php

namespace App\Http\Controllers\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bookupload;
use DB;

class BookuploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

$bookuploads = Bookupload:: all();
return view('bookupload/index', ['bookuploads'=>$bookuploads]);

        // $bookuploads = DB::table('bookuploads')->get();

        // return view('bookupload/index', compact('bookuploads'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('bookupload.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
//         $bookupload = new Bookupload;

//         $bookupload->book_name   =  $request->book_name;
//         $bookupload->author_name =  $request->author_name;
//         $bookupload->category_Id =  $request->category_Id;
//         $bookupload->qty         =  $request->qty;

//  if($request->hasfile('cover')){

//     $file = $request->file('cover');
//     $extention =$file->getClientOriginalExtension();
//     $filename = time().'.'.extention;
//     $file->move('uploads/bookuploads', $filename);
//     $bookupload->cover=$filename;

//  }


//         $bookupload->publish_year =  $request->publish_year;
//         $bookupload->storage_date =  $request->storage_date;

//         $bookupload->save();
//         return redirect->back()->with('status','Book added successfully.');


return "Hello from the controller";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bookuploads= Bookupload::find($id);
        return view("bookupload.show")->with("bookupload" , $bookuploads);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bookuploads= Bookupload::find($id);
        return view("bookupload.edit")->with('Bookupload',$bookuploads);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bookupload =  Bookupload::find($id);
        $input =$request->all();
        $bookupload->update($input);
        return redirect('bookupload')->with('flash_massage', 'Book updated successfully');

    }









    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        Bookupload::destroy($id);
        return redirect('bookupload')->with('flash_massage', 'Book Deleted successfully');
    }
}
