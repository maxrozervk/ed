<?php

namespace App\Http\Controllers\WebUser\Category;

use App\Model\WebUser\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function index()
    {
        //
        $data['category']=Category::get();
        // return view('WebUserView.test')->with('data',$data);
        return view('WebUserView.category.listCategory')->with('data',$data);
    }
    

    public function create()
    {
        //
        return view('WebUserView.category.createCategory');

    }

    

    public function store(Request $request)
    {
        //
        $category=category::create([
            'category_title'=>$request['categoryTitle'],
            'category_slug'=>$request->categorySlug,
        ]);

        return redirect('/category');
    }

    

    public function show($id)
    {
        $category=category::where('category_id',$id)->get();
        $data['category']=$category;
        return view('WebUserView.category.viewCategory')->with('data',$data);
        // return view('test')->with('data',$data);
    }

    

    public function edit($id)
    {
         $category=category::where('category_id',$id)->get();
        $data['category']=$category;
        return view('WebUserView.category.editCategory')->with('data',$data);
    }

    

    public function update(Request $request, $id)
    {
        //
       // return $id;

       $category= category::find($id);
       // return $category;
       $category->update($request->all());
        return redirect('/category');
    }

    
    public function destroy($id)
    {
        //
        category::find($id)->delete();
        return redirect('/category');

    }
    
}
