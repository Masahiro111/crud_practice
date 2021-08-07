<?php

namespace App\Http\Controllers;

use App\Models\Firstcrud;
use Illuminate\Http\Request;

class FirstcrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!empty($request->input('keyword'))) {
            $keyword = $request->input('keyword');
            $message = "検索キーワード : " . $keyword;
            $firstcruds = Firstcrud::where('content', 'like', '%' . $keyword . '%')->get();
        } else {
            $message = "検索キーワードを入力してください。";
            $firstcruds = Firstcrud::all();
        }

        return view('firstcrud.index', compact('message', 'firstcruds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('firstcrud.craete');
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
            'title' => 'required',
            'content' => 'required',
        ]);

        Firstcrud::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect('/firstcrud');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
