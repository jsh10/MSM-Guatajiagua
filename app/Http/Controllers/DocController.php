<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doc;

class DocController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-doc|crear-doc|editar-doc|borrar-doc')->only('index');
        $this->middleware('permission:crear-doc', ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-doc', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-doc', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docs = Doc::paginate(5);
        return view('docs.index', compact('docs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docs.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'titulo' => 'required',
            'doc_path' => 'required'
        ]);
        Doc::create($request->all());
        return redirect()->route('doc.index');
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
    public function edit(Doc $doc)
    {
        return view('docs.editar', compact('doc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doc $doc)
    {
        request()->validate([
            'titulo' => 'required',
            'doc_path' => 'required'
        ]);

        $doc->update($request->all());
        return redirect()->route('doc.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doc $doc)
    {
        $doc->delete();
        return redirect()->route('doc.index');
    }
}
