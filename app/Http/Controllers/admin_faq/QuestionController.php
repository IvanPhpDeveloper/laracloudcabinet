<?php

namespace App\Http\Controllers\admin_faq;

use App\Http\Controllers\Controller;
use App\Models\Model\admin_faq\Category_faq;
use App\Models\Model\admin_faq\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions=Question::all();



        return view('admin.admin-faq.questions.show',compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $category_faqs=Category_faq::all();

        return view('admin.admin-faq.questions.question',compact('category_faqs'));
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
            'title'=>'required',
            'questions'=>'required',
            'answers'=>'required'
        ]);

        $question=new Question;
        $question->title=$request->title;
        $question->questions=$request->questions;
        $question->answers=$request->answers;
        $question->save();
        $question->category_faqs()->sync($request->category_faqs);

        return redirect(route('question.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view('admin.admin-faq.questions.question');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $question=Question::with('category_faqs')->where('id',$id)->first();
        $category_faqs=Category_faq::all();
        return  view('admin.admin-faq.questions.edit',compact('question','category_faqs'));
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
            'title'=>'required',
            'questions'=>'required',
            'answers'=>'required'
        ]);

        $question=Question::find($id);
        $question->title=$request->title;
        $question->questions=$request->questions;
        $question->answers=$request->answers;
        $question->category_faqs()->sync($request->category_faqs);
        $question->save();
        $questions=Question::where('id', $request->category_faqs)->get();
        return view('admin.admin-faq.questions.show',compact('questions'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Question::where('id',$id)->delete();
        return redirect()->back();
    }
}
