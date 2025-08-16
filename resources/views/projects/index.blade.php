<x-app-layout title="Our Projects">

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12">
                <h1>Our Projects</h1>
                <p class="lead">Discover our innovative solutions and successful implementations across various
                    sectors.
                </p>
            </div>
        </div>

        <div class="row mt-5 g-4">
            @foreach ($projects as $project)
                <div class="col-md-6 col-lg-4">
                    <div class="project-card">
                        <div class="project-image">
                            @if ($project->image)
                                <img src="{{ asset($project->image) }}" alt="{{ $project->title }}" class="img-fluid">
                            @endif
                        </div>
                        <div class="project-content">
                            <h3>{{ $project->title }}</h3>
                            <p class="project-category">{{ $project->category }}</p>
                            <p>{{ Str::limit($project->description, 150) }}</p>
                            <a href="{{ route('projects.show', $project->slug) }}" class="btn btn-primary">View
                                Project</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
