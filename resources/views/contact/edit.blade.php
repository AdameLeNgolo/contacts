@extends('app')

@section('content')
    <form action="{{ route('contact.update',$contact->id) }}" method="POST">
        @csrf
        {{-- {{ method_field('PUT') }} --}}
        @method('PUT')
        
        <input type="text" class="form-control" placeholder="Votre prenom ici" name="prenom" value="{{ $contact->prenom }}">
        <input type="text" class="form-control" placeholder="Votre nom ici" name="nom" value="{{ $contact->nom }}">
        <input type="email" class="form-control" placeholder="Votre email ici" name="email" value="{{ $contact->email }}">
        <input type="phone" class="form-control" placeholder="Votre numero de telephone ici" name="telephone" value="{{ $contact->telephone }}">
        <input type="text" class="form-control" placeholder="Votre adresse ici" name="adresse" value="{{ $contact->adresse }}">

        <input type="submit" value="Enregistrer" class="btn btn-primary">

    </form>    
@endsection