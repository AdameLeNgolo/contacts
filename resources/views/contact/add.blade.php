@extends('app')

@section('content')
<a href="/">Home</a>

<div>
    <a href="{{ route('contact.create') }}">Add new contact</a>
</div>

<form action="{{ route('contact.store') }}" class="col-3 mx-auto" method="POST">
    @csrf
    <input type="text" class="form-control" placeholder="Votre prenom ici" name="prenom">
    <input type="text" class="form-control" placeholder="Votre nom ici" name="nom">
    <input type="email" class="form-control" placeholder="Votre email ici" name="email">
    <input type="phone" class="form-control" placeholder="Votre numero de telephone ici" name="telephone">
    <input type="text" class="form-control" placeholder="Votre adresse ici" name="adresse">

    <input type="submit" value="Enregister" class="btn btn-primary">
</form>
@endsection