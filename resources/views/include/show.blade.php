@extends('layout.dafault')
@section('content')

<h1>Showing {{ $mahasiswas->nama }}</h1>
<div class ="container">
    <div class="jumbotron text-center">
        <h2>{{ $mahasiswas->nama }}</h2>
        <p>
            <strong>Email:</strong> {{ $mahasiswas->email }}<br>
            <strong>Kelas:</strong> {{ $mahasiswas->kelas }}
        </p>
    </div>
	<a href="{{ route('home.index') }}" class="btn btn-warning">Back To Home</a> <br/><br/>
</div>

@endsection