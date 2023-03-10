<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\SaveProjectRequest;
use App\Models\Category;

class ProjectController extends Controller
{

    public function __construct ()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.index', [
            'projects' => Project::with('category')->latest()->paginate()
        ]);
    }

    public function show(Project $project)
    {
        return view ('projects.show', [
            'project' => $project
        ]);
    }

    public function create()
    {

        $this->authorize('create', $project = new Project); //autoriza a crear proyectos en el auth service provider


        return view ('projects.create', [
            'project' => $project,
            'categories' => Category::pluck('name', 'id')
        ]);

    }

    public function store(SaveProjectRequest $request)
    {

        $project = new Project( $request ->validated() );

        $this->authorize('create', $project); //autoriza a crear proyectos en el auth service provider

        if ($request->hasFile('image')) {
            $project->image = $request->file('image')->store('images', 'public');
        }

        $project->save();

        return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con exito');
    }

    public function edit(Project $project)
    {
        $this->authorize('update', $project); //autoriza a crear proyectos en el auth service provider
        return view ('projects.edit', [
            'project' => $project,
            'categories' => Category::pluck('name', 'id')
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request )
    {

        $this->authorize('update', $project = new Project); //autoriza a crear proyectos en el auth service provider

        if ($request->hasFile('image')) {

            Storage::delete($project->image);

            $project = $project->fill( $request->validated() );

            $project->image = $request->file('image')->store('images', 'public');


        } else {
            $project->update( array_filter($request->validated()) );
        }

        return redirect()->route('projects.show', $project)->with('status', 'El proyecto fue actualizado con exito');
    }

    public function destroy(Project $project)
    {
        $this->authorize('delete', $project); //autoriza a crear proyectos en el auth service provider
        Storage::delete($project->image);
        $project->delete();

        return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado con exito');
    }



}
