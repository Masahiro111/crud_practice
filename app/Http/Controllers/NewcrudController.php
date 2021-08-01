<?php

namespace App\Http\Controllers;

use App\Models\Newcrud;
use Illuminate\Http\Request;

class NewcrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newcruds = Newcrud::all();

        return view('newcrud.index', compact('newcruds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newcrud.create');
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

        Newcrud::create([
            'title' => $request->post('title'),
            'content' => $request->post('content'),
        ]);

        return redirect('/newcrud');
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
        $newcrud = Newcrud::find($id);

        return view('newcrud.edit', compact('newcrud'));
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
            'content' => 'requried',
        ]);

        Newcrud::find($id)->update([
            'title' => $request->post('title'),
            'content' => $request->post('content'),
        ]);

        return redirect('/newcrud');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Newcrud::find($id)->delete();

        return redirect('/newcrud');
    }
}
