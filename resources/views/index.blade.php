

@extends('layout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
@include('partials.search')
  <table class="table table-striped">

    <thead>
        <tr>
          <td>ID</td>
          <td>Nom</td>
          <td>Prenom</td>
          <td >Montrer</td>
          <td>Modifier</td>
          <td>Supprimer</td>
        </tr>
    </thead>

    <tbody>
        @foreach($entretiens as $entretien)
        <tr>
             <td>{{ $entretien->id }}</td>
      <td>{{ $entretien->nom}}</td>
      <td>{{ $entretien->prenom}}</td>

            <td><a href="{{ route('entretiens.show', $entretien->id)}}" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a></td>

             <td><a href="{{ route('entretiens.edit', $entretien->id)}}" class="btn btn-primary" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>

            <td>
                <form action="{{ route('entretiens.destroy', $entretien->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button  class="btn btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
