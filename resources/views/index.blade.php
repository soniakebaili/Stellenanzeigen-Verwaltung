<!-- resources/views/jobs/index.blade.php -->

@extends('layouts.app') <!-- Falls du ein Standard-Layout verwendest -->

@section('content')
    <h1>Alle Stellenanzeigen</h1>

    <ul>
        @foreach($jobs as $job)
            <li>
                <a href="{{ route('jobs.show', $job->id) }}">
                    {{ $job->title }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection