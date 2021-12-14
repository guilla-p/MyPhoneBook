@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="font-size:20px" class="card-header">{{ __('Création entreprise') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row justify-content-center">
                    <form action="/entreprise/create" method="POST">
                        @csrf
                        
                        <center><legend style="font-size:20px"><b>Informations générales</b></legend><center><br>
                        <div class="form-group row">
                            <label for="nom_ent" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>
                        <div class="col-md-6">
                        <input type="text" name="nom_ent" placeholder="Entrer un nom"> <br> <br>
                        @error('nom_ent')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="rue_ent" class="col-md-4 col-form-label text-md-right">{{ __('Rue') }}</label>
                        <div class="col-md-6">
                        <input type="text" name="rue_ent" placeholder="Entrer une rue"> <br> <br>
                        @error('rue_ent')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="code_postal_ent" class="col-md-4 col-form-label text-md-right">{{ __('Code postal') }}</label>
                        <div class="col-md-6">
                        <input type="text" name="code_postal_ent" placeholder="Entrer un code postal"> <br> <br>
                        @error('code_postal_ent')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="ville_ent" class="col-md-4 col-form-label text-md-right">{{ __('Ville') }}</label>
                        <div class="col-md-6">
                        <input type="text" name="ville_ent" placeholder="Entrer une ville"> <br> <br>
                        @error('ville_ent')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="numero_telephone_ent" class="col-md-4 col-form-label text-md-right">{{ __('Téléphone') }}</label>
                        <div class="col-md-6">
                        <input type="text" name="numero_telephone_ent" placeholder="Entrer un numéro de telephone"> <br> <br>
                        @error('numero_telephone_ent')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="email_ent" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                        <div class="col-md-6">
                        <input type="text" name="email_ent" placeholder="Entrer un email"> <br> <br>
                        @error('email_ent')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <button type="submit">Ajouter</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection