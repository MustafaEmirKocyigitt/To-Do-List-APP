@extends('layouts.App')

@section('title', 'TO-DO List App')


@section('content')

<nav class="mb-4">
    <a href="{{ route('tasks.create') }}" class="font-medium text-grey-700 underline decoration-pink-500">Create New Task</a>
</nav>
    {{-- @if (count($tasks)) --}}
    @forelse ($tasks as $item)
        <div>
            <a href="{{ route('tasks.show', ['task' => $item->id]) }}"
                @class(['line-through' => $item->completed])>{{ $item->title }}</a>
        </div>
    @empty
        <div>There are no tasks!</div>
    @endforelse
    @if ($tasks->count())
        <nav class="mt-4">
             {{ $tasks->links() }}
        </nav>
    @endif
@endsection
