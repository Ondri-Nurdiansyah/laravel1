@extends('layout/main')
@section('title', 'Mahasiswa')
@section('container')
<div class="container">
	<div class="row">
		<div class="col-6">
			<h1 class="mt-10">Detail Mahasiswa</h1>
        
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $student->nama }}</h5>
                    <p class="card-text">{{ $student->nim  }}</p>

                    <a href="{{$student->id}}/edit" class="btn btn-info">Edit</a>
                    
                    <form action="{{$student->id}}" method="POST" class="d-inline">

                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>

                    </form>

                    <br>
                    <button href="/students" class="btn btn-primary">Kembali</button>
                </div>
            </div>

		</div>
	</div>
</div>
@endsection