@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between items-end w-full">
            <h2 class="text-grey text-sm font-normal">MyProject</h2>

            <a href="/projects/create" class="button py-2 px-5">Create New project</a>
        </div>
    </header>

    <main class="lg:flex lg:flex-wrap -mx-3">
        @forelse($projects as $project)
            <div class="lg:w-1/3 px-3 pb-6">
                <div class="bg-white rounded-l p-5 shadow" style="height: 200px">
                    <h3 class="font-normal text-xl py-4 -ml-5 mb-3 border-l-4 border-pink pl-4">
                        <a href="{{ $project->path() }}" class="text-black no-underline">{{ $project->title }}</a>
                    </h3>

                    <div class="text-grey">{{ Illuminate\Support\Str::limit($project->description, 50) }}</div>
                </div>
            </div>
        @empty
            <div>No projects yet</div>
        @endforelse
    </main>
@endsection
