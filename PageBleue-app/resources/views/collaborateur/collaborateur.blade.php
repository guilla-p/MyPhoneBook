@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-around ">{{ __('Collaborateur') }}

                <form class="ml-auto" action="{{url('/collaborateur/id')}}" method="post"><br>
                        {{csrf_field()}}
                        <input type="text" name="search" class=text-md-center placeholder="Nom, Prénom, Entreprise">
                        <input type="submit" value="Search">
                    </form>

                <a class="ml-auto" href={{ '/collaborateur/create' }}>AJOUT</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="container">
                    
                    
                            <br>
                            
                            

                    <br>
                      <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Numéro Téléphone</th>
                                    <th>Email</th>
                                    <th>Entreprise</th>
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
                                    <td>
                                        <a href={{"delete/".$data['id'] }}>DELETE</a>
                                        <br>
                                        <a href={{"update/".$data['id'] }}>UPDATE</a>
                                    </td>
                                    
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