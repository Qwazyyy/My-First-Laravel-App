@extends('layouts.app')

@section('content')
    <div style="display: flex; align-items: center;">
        <h1 style="margin-right: auto;">AppTDD</h1>
        <a href="/projects/create">Create New project</a>
    </div>
	<ul>
		@forelse($projects as $project)
			<li>
				<a href="{{ $project->path() }}"> {{ $project->title }} </a>
			</li>

		@empty
			<li>No projects yet.</li>
		@endforelse
	</ul>
@endsection
