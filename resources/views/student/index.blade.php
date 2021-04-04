@extends('layout/main')
@section('title', 'Mahasiswa')
@section('container')
<div class="container">
	<div class="row">
		<div class="col-10">
			<h1 class="mt-10">List Mahasiswa</h1>
            @if (session('status'))
                <div class="aler alert-success alert-dismissible">
                    {{session('status')}}
                </div>
            @endif

            <ul class="list-group">
            @foreach($students as $std)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $std->nama }}
                    <a class="badge badge-success" href="/students/{{$std->id}}">Detail</a>
                </li>
            @endforeach              
            </ul>

		</div>
	</div>
</div>
@endsection