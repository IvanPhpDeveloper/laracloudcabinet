<?php

namespace App\Http\Controllers\admin_faq;

use App\Http\Controllers\Controller;
use App\Models\Model\admin_faq\Category_faq;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_faqs=Category_faq::all();
        return view('admin.admin-faq.category-faq.show',compact('category_faqs'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin-faq.category-faq.category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',

        ]);
        $category_faq=new Category_faq();
        $category_faq->name=$request->name;
        $category_faq->save();

        return redirect(route('category_faq.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.admin-faq.category-faq.category');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category_faq=Category_faq::where('id',$id)->first();
        return  view('admin.admin-faq.category-faq.edit',compact('category_faq'));
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
        $this->validate($request,[
            'name'=>'required',

        ]);
        $category_faq=Category_faq::find($id);
        $category_faq->name=$request->name;


        $category_faq->save();

        return redirect(route('category_faq.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category_faq::where('id',$id)->delete();
        return redirect()->back();
    }
}
