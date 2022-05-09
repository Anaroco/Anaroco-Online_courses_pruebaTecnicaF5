@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header">{{ __('👨‍🎓 Cursos Perseo 👩‍🎓') }}</div></center>

                <center><div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Estas registrado correctamente!') }}
                </div></center>
            </div>
        </div>
    </div>
</div>
@endsection
