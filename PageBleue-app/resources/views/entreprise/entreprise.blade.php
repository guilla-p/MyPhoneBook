
<head>
    <title>Entreprise</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
@extends('layouts.user')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-around ">{{ __('Entreprise') }}

                <form class="ml-auto" action="{{url('/entreprise/id')}}" method="post"> <br>
                        {{csrf_field()}}
                        <input type="text" name="search" class=text-md-center placeholder="Nom, Ville, Email">
                        <input type="submit" value="Search">

                    </form>

                    <a class="ml-auto" href={{ '/entreprise/create' }}>AJOUT</a>

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Numéro Téléphone</th>
                                <th>Code Postal</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach($x as $data)
                            <tr>
                                <td>{{ $data->nom_ent }}</td>
                                <td>{{ $data->email_ent }}</td>
                                <td>{{ $data->numero_telephone_ent }}</td>
                                <td>{{ $data->code_postal_ent}}</td>
                                <td>
                                <a href={{"delete/".$data['id'] }}>DELETE</a>
                                        <br>
                                <a href={{"update/".$data['id'] }}>UPDATE</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $x->links('pagination::bootstrap-4') }}

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection