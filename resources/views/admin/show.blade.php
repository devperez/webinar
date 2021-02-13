@extends('admin.layout')
@extends('navigation-menu')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Voir l'utilisateur {{ $user->firstname }} {{ $user->name }}</h2>
        </div>
        <div>
            <a class="btn btn-primary" style="color:white; text-decoration: none; float: right;"
                href="{{ route('users.index') }}">Retour</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Prénom:</strong>
            {{ $user->firstname }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nom:</strong>
            {{ $user->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Société:</strong>
            {{ $user->company }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Rôle:</strong>
            @if ($user->is_admin == 0)
            Utilisateur
            @else
            Administrateur
            @endif
        </div>
    </div>
</div>




@endsection