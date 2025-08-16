<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(12);
        return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        $relatedProjects = Project::where('category', $project->category)
            ->where('id', '!=', $project->id)
            ->limit(3)
            ->get();

        return view('projects.show', compact('project', 'relatedProjects'));
    }
}
