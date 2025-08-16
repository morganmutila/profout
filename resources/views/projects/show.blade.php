@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="project-details">
                    @if ($project->image)
                        <img src="{{ asset($project->image) }}" alt="{{ $project->title }}" class="img-fluid mb-4">
                    @endif

                    <h1>{{ $project->title }}</h1>
                    <p class="project-category text-primary">{{ $project->category }}</p>

                    <div class="project-info mt-4">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Client</h5>
                                <p>{{ $project->client }}</p>
                            </div>
                            <div class="col-md-6">
                                <h5>Completion Date</h5>
                                <p>{{ $project->completion_date?->format('F Y') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="project-description mt-4">
                        <h3>Project Description</h3>
                        {!! $project->description !!}
                    </div>

                    @if ($project->challenges)
                        <div class="project-challenges mt-4">
                            <h3>Challenges</h3>
                            {!! $project->challenges !!}
                        </div>
                    @endif

                    @if ($project->solutions)
                        <div class="project-solutions mt-4">
                            <h3>Our Solution</h3>
                            {!! $project->solutions !!}
                        </div>
                    @endif

                    @if ($project->results)
                        <div class="project-results mt-4">
                            <h3>Results</h3>
                            {!! $project->results !!}
                        </div>
                    @endif
                </div>
            </div>

            <div class="col-lg-4">
                <div class="project-sidebar">
                    <div class="card">
                        <div class="card-body">
                            <h4>Project Details</h4>
                            <ul class="list-unstyled">
                                @if ($project->location)
                                    <li>
                                        <strong>Location:</strong>
                                        <span>{{ $project->location }}</span>
                                    </li>
                                @endif
                                @if ($project->duration)
                                    <li>
                                        <strong>Duration:</strong>
                                        <span>{{ $project->duration }}</span>
                                    </li>
                                @endif
                                @if ($project->technologies)
                                    <li>
                                        <strong>Technologies:</strong>
                                        <span>{{ $project->technologies }}</span>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>

                    @if (count($relatedProjects) > 0)
                        <div class="card mt-4">
                            <div class="card-body">
                                <h4>Related Projects</h4>
                                <ul class="list-unstyled">
                                    @foreach ($relatedProjects as $related)
                                        <li>
                                            <a
                                                href="{{ route('projects.show', $related->slug) }}">{{ $related->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
