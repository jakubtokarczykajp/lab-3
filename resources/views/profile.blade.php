@extends('layouts.app')

@section('content')
    <h1>Twój profil</h1>
    <form method="POST" action="{{ route('profile') }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Imię i nazwisko</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Zapisz zmiany</button>
    </form>
@endsection


