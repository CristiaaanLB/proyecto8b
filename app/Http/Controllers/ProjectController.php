<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $portfolio=[
        //     ['title'=>'Proyecto #1'],
        //     ['title'=>'Proyecto #2'],
        //     ['title'=>'Proyecto #3'],
        //     ['title'=>'Proyecto #4']
        // ];

        // $portfolio = DB::table('projects')->get();

        // $projects = Project::latest()->cursorPaginate(4);

        // return view('portfolio', compact('projects'));

        return view('projects/index', ['projects' => Project::latest()->cursorPaginate(2)]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Project::create([
        //     'title' => request('title'),
        //     'description' => request('description')
        // ]);

        //Project::create(request()->all());

        $fields = request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Project::create($fields);

        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //findOrFail evita la excepcion de enviar objetos null por url
        return view('projects.show', ['project' => Project::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function create(){
        return view('projects.create');
    }
}
