@extends('admin.layout')
@extends('navigation-menu')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Liste des utilisateurs</h2>
        </div>
        <div>
            <a class="btn btn-success" style="color:white; text-decoration:none; float: right;"
                href="{{ route('users.create') }}">Créer un nouvel utilisateur</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Admin</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->is_admin }}</td>
        <td>
            <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                <a class="btn btn-info" style="color:white; text-decoration:none;"
                    href="{{ route('users.show',$user->id) }}">Voir</a>
                <a class="btn btn-primary" style="color:white; text-decoration:none;"
                    href="{{ route('users.edit',$user->id) }}">Éditer</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>
{{ $users->links() }}


@endsection