@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <a href="/projects/create">Create New project</a>
    </div>

    <div class="flex">
        @forelse($projects as $project)
        <div class="bg-white mr-4 rounded p-5 shadow w-1/3" style="height: 200px">
            <h3 class="font-normal text-xl py-4">{{ $project->title }}</h3>

            <div class="text-grey">{{ Illuminate\Support\Str::limit($project->description, 50) }}</div>
        </div>
        @empty
            <div>No projects yet</div>
        @endforelse
    </div>
@endsection
