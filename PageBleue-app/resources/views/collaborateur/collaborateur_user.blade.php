@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Collaborateur') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                      <div class="container">
                      <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Numéro Téléphone</th>
                                    <th>Email</th>
                                    <th>Entreprise</th>
                                    <th>Numéro Entreprise</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($y as $data)
                                <tr>
                                    <td>{{ $data->nom_collab }}</td>
                                    <td>{{ $data->prenom_collab }}</td>
                                    <td>{{ $data->numero_telephone_collab }}</td>
                                    <td>{{ $data->email_collab }}</td>
                                    <td>{{ $data->entreprise_collab }}</td>
                                    <td>{{ $data->numero_telephone_ent }}</td>>
                                    <td><button type="button"></button><a href={{"delete/".$data['id'] }}>DELETE</a></button>
                                    <br>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $y->links('pagination::bootstrap-4') }}
                      </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection