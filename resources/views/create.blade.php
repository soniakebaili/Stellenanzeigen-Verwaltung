<!-- resources/views/jobs/create.blade.php -->

@extends('layouts.app') <!-- Falls du ein Standard-Layout verwendest -->

@section('content')
    <h1>Neue Stellenanzeige erstellen</h1>

    <form action="{{ route('jobs.store') }}" method="POST">
        @csrf

        <label for="title">Titel:</label>
        <input type="text" name="title" id="title" required><br>

        <label for="description">Beschreibung:</label><br>
        <textarea name="description" id="description" rows="4" cols="50" required></textarea><br>

        <label for="employment_type">Art der Anstellung:</label>
        <input type="text" name="employment_type" id="employment_type" required><br>

        <label for="location">Standort:</label>
        <input type="text" name="location" id="location" required><br>

        <label for="salary">Gehalt:</label>
        <input type="text" name="salary" id="salary"><br>

        <label for="creation_date">Erstellungsdatum:</label>
        <input type="date" name="creation_date" id="creation_date" required><br>

        <label for="expiration_date">Ablaufdatum:</label>
        <input type="date" name="expiration_date" id="expiration_date" required><br>

        <button type="submit">Speichern</button>