<!-- resources/views/jobs/edit.blade.php -->

@extends('layouts.app') <!-- Falls du ein Standard-Layout verwendest -->

@section('content')
    <h1>Stellenanzeige bearbeiten</h1>

    <form action="{{ route('jobs.update', $job->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Titel:</label>
        <input type="text" name="title" id="title" value="{{ $job->title }}" required><br>

        <!-- Weitere Formularelemente für die anderen Attribute -->

        <button type="submit">Aktualisieren</button>
    </form>
@endsection