@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="d-flex justify-content-center">
                        {{ __('You are logged in!') }}
                    </div>
                    
                    <div class="home-button d-flex justify-content-center p-2 pl-2">
                        
                        <br>
                        <form action="{{ route('entreprise') }}" method="get">
                            <button type="submit" class="btn btn-primary">Entreprise</button>
                        </form><br>
                        <form style="padding-left:10px" action="{{ route('collaborateur')}}" method="get">
                            <button type="submit" class="btn btn-primary">Collaborateur</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
