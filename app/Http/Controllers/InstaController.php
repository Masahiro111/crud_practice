<?php

namespace App\Http\Controllers;

use App\Models\Insta;
use Illuminate\Http\Request;

class InstaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instas = Insta::all();
        return view('insta.index', compact('instas'));
    }

    public function search(Request $request)
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('insta.create');
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
            'title' => 'required|min:5',
            'content' => 'required|min:5',
        ]);

        Insta::create([
            'title' => $request->post('title'),
            'content' => $request->post('content'),
        ]);

        return redirect('/insta')
            ->with('message', '登録が完了しました');
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
        $insta = Insta::find($id);

        return view('insta.edit', compact('insta'));
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
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Insta::find($id)->update([
            'title' => $request->post('title'),
            'content' => $request->post('content'),
        ]);

        return redirect('/insta')
            ->with('message', '更新が完了いたしました。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Insta::find($id)->delete();

        return redirect('/insta')
            ->with('message', '削除が完了いたしました。');
    }
}
