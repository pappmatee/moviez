@extends('layout.base')

@section('header')
    <header class="py-10">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-white">Moviez</h1>
        </div>
    </header>
@endsection

@section('content')
    <div class="rounded-lg bg-white px-5 py-6 shadow sm:px-6 min-h-full">
        <div class="rounded-lg">
            <livewire:core-movie-movies-table/>
        </div>
    </div>
@endsection
