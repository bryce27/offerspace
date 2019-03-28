<?php

namespace App\Http\Controllers;
use App\Page;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();
        return view('pages', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newPage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:50|regex:/^[a-zA-Z0-9]+$/', // default title is "untitled" so we can allow null titles
            'content' => 'nullable|regex:/^[a-zA-Z0-9]+$/',
        ]);

        $title = $request->input('title');
        $content = $request->input('content');

        $page = Page::create(['title' => $title, 'content' => $content]);

        return redirect('/pages/'.$page->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page = Page::find($id);
        return view('page', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::find($id);
        return view('editPage', compact('page'));
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
        $validatedData = $request->validate([
            'title' => 'required|max:50|regex:/^[a-zA-Z0-9]+$/', // default title is "untitled" so we can allow null titles
            'content' => 'nullable|regex:/^[a-zA-Z0-9]+$/', // regex to sanitize (remove special chars)
        ]);
        //$id = $request->input('id');
        $title = $request->input('title');
        $content = $request->input('content');

        $page = Page::find($id)->update(['title' => $title, 'content' => $content]);

        return redirect('/pages/'.$id);
    }

    // removed destroy method for this project
}
