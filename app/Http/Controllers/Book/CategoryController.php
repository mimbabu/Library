<?php

namespace App\Http\Controllers\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

$categories = Category:: all();
return view('categories/index', ['categories'=>$categories]);

        
    }

  
    public function create()
    {
      
        return view('categories.create');
    }

   
    public function store(Request $request)
    {
        //return $request->input();
        // print_r($_REQUEST);
        // die();


        $request->validate([
            'category_name' => 'required',
         
            ]);

        
            $input = $request->all();

       
            $table->string("category_name");

 }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $category= Category::find($category);
        return view('categories/show')->with("categories" , $category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $bookupload= Category::find($category);
        return view("categories.edit")->with('categories',$category);

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $bookupload)
    {


         


        $categories =  Category::find($categories);
        $input =$request->all();
        $categories->update($input);
        return redirect('categories')->with('flash_massage', 'Category updated successfully');

    }









    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('/category/{id}')->with('flash_massage', 'Book Deleted successfully');



       
    }
}
