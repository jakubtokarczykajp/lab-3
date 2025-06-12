@extends('layouts.app')

@section('content')
    <h1>Kontakt</h1>
    <form method="POST" action="{{ route('contact') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Imię i nazwisko</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Wiadomość</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Wyślij</button>
    </form>
@endsection


