@extends('theme.base')

@section('content')
    <div class="container text-center" py-5>
      <h1>Hola mundo</h1>
      <a href="{{ route('client.index') }}" class="btn btn-primary">Clientes</a>
    </div>
    
@endsection