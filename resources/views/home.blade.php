@extends('app')
@section('content')
<a href="/">Home</a> / 
<a href="#">List contact</a>

<div>
    <a href="{{ route('contact.create') }}">Add new contact</a>
</div>

<div class="border">
    @foreach ($contacts as $contact)
        {{ $contact->nom }} 
        {{ $contact->prenom }}<br>
        {{ $contact->telephone }}<br>
        {{ $contact->adresse }}<br>
        {{ $contact->email }}<br>

        <a href="{{ route('contact.edit',$contact->id) }}">Modifier</a>
        <hr>
    @endforeach
</div>
@endsection