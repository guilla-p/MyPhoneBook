@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div style="font-size:20px" class="card-header">{{ __('Création collaborateur') }}</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row justify-content-center">
                    <form action="/collaborateur/create" method="POST">
                        @csrf
                       <center><legend style="font-size:20px"><b>Informations personnelles</b></legend><center>
                        <div class="form-group row">
                            <label for="civilite" class="col-md-4 col-form-label text-md-right">{{ __('Civilite') }}</label>
                        <div class="col-md-6">
                        <input type="text" name="civilite" placeholder="Genre">
                                @error('civilite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nom_collab" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>
                        <div class="col-md-6">
                        <input type="text" name="nom_collab" placeholder="Nom">
                        @error('nom_collab')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prenom_collab" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>
                            <div class="col-md-6">
                                <input type="text" name="prenom_collab" placeholder="Prénom"> <br>
                                @error('prenom_collab')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <center><legend style="font-size:20px"><b>Coordonnées</b></legend><center>

                        <div class="form-group row">
                            <label for="rue_collab" class="col-md-4 col-form-label text-md-right">{{ __('Rue') }}</label>
                            <div class="col-md-6">
                                <input type="text" name="rue_collab" placeholder="Rue"> <br>
                                @error('rue_collab')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="code_postal_collab" class="col-md-4 col-form-label text-md-right">{{ __('Code postal') }}</label>
                            <div class="col-md-6">
                        <input type="text" name="code_postal_collab" placeholder="Code postal"> <br>
                                    @error('code_postal_collab')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ville_collab" class="col-md-4 col-form-label text-md-right">{{ __('Ville') }}</label>
                            <div class="col-md-6">
                        <input type="text" name="ville_collab" placeholder="Ville">
                        @error('ville_collab')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <center><legend style="font-size:20px"><b>Informations complémentaires</b></legend><center>

                        <div class="form-group row">
                            <label for="numero_telephone_collab" class="col-md-4 col-form-label text-md-right">{{ __('Téléphone') }}</label>
                            <div class="col-md-6">
                        <input type="phone" name="numero_telephone_collab" placeholder="Téléphone">
                        @error('numero_telephone_collab')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email_collab" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
                        <div class="col-md-6">
                            <input type="email" name="email_collab" placeholder="Email"> <br>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="entreprise_collab" class="col-md-4 col-form-label text-md-right">{{ __('Entreprise') }}</label>
                        <div class="col-md-6">
                        <input type="text" name="entreprise_collab" placeholder="Entreprise"> <br>
                        @error('entreprise_collab')
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