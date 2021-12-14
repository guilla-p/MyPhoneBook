@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update collaborateur') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="/collaborateur/update" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$data['id']}}">
                        <input type="text" name="nom_collab" value="{{$data['nom_collab']}}"> <br> <br>
                        <input type="text" name="prenom_collab" value="{{$data['prenom_collab']}}"> <br> <br>
                        <input type="text" name="numero_telephone_collab" value="{{$data['numero_telephone_collab']}}"> <br> <br>
                        <input type="text" name="email_collab" value="{{$data['email_collab']}}"> <br> <br>
                        <input type="text" name="entreprise_collab" value="{{$data['entreprise_collab']}}"> <br> <br>
                        <button type="submit">Update</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection