@extends('back.layout')
@section('main')

<h3>Importer</h3>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"
                style="color:white; text-decoration:none; float: right;">Retour</a>
        </div>
    </div>
</div>

<p>Sélectionnez un fichier CSV (.csv) pour importer les données dans la table "users".<br><strong>Les colonnes :
    </strong>firstname, name, email, password, company, phone </p>

<form method="POST" action="{{ route('excel.import') }}" enctype="multipart/form-data">

    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <input type="file" name="fichier">

    <button type="submit">Importer</button>

</form>

@endsection