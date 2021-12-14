@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update entreprise') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="/entreprise/update" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$data['id']}}">
                        <input type="text" name="nom_ent" value="{{$data['nom_ent']}}"> <br> <br>
                        <input type="text" name="rue_ent" value="{{$data['rue_ent']}}"> <br> <br>
                        <input type="text" name="code_postal_ent" value="{{$data['code_postal_ent']}}"> <br> <br>
                        <input type="text" name="ville_ent" value="{{$data['ville_ent']}}"> <br> <br>
                        <input type="text" name="numero_telephone_ent" value="{{$data['numero_telephone_ent']}}"> <br> <br>
                        <input type="text" name="email_ent" value="{{$data['email_ent']}}"> <br> <br>
                        <button type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection