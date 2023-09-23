<!-- resources/views/jobs/show.blade.php -->

@extends('layouts.app') <!-- Falls du ein Standard-Layout verwendest -->

@section('content')
    <h1>{{ $job->title }}</h1>

    <p>Beschreibung: {{ $job->description }}</p>
    <p>Art der Anstellung: {{ $job->employment_type }}</p>
    <p>Standort: {{ $job->location }}</p>
    <p>Gehalt: {{ $job->salary }}</p>
    <p>Erstellungsdatum: {{ $job->creation_date }}</p>
    <p>Ablaufdatum: {{ $job->expiration_date }}</p>

    <p>Unternehmen: {{ $job->company->name }}</p>

    <p>Erstellt von: {{ $job->createdByUser->first_name }} {{ $job->createdByUser->last_name }}</p>
@endsection