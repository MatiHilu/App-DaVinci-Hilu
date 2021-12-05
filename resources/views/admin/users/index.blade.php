@extends('admin.layouts.admin')

@section('main-content')
<div class="col-12">
<div class="row">
@if (session('succes'))
            <div class="alert alert-success" role="alert">
                {{ session('succes') }}
            </div>
        @elseif(session('danger'))
            <div class="alert alert-danger" role="alert">
                {{ session('danger') }}
            </div>
        @endif
    
        @foreach ($users as $user)
            <div class="card m-2" style="width: 18rem;">
                <div class="card-body">
                @if ($user->image)
                    <img class="card-img-top" src="{{ $user->get_image }}" alt="{{ $user->name }}">
                @else
                    <img class="card-img-top" src="https://www.pngall.com/wp-content/uploads/5/Profile-Avatar-PNG-Free-Download.png" alt="Card image cap">
                @endif
                <h5 class="card-title">{{ $user->name }}</h5>
                <h5 class="card-subtitle">{{ $user->uppercase }}</h5>
                <p class="card-text">{{ $user->title_job }}</p>
                <form action="{{ route('user.destroy', $user) }}" method="POST">
                    <a href="{{ route('user.edit', $user) }}" class="bg-warning p-2 rounded">Editar</a>
                    @csrf
                    @method('DELETE')
                    <input
                        type="submit"
                        value="Eliminar"
                        class="bg-danger p-2 rounded"
                        onclick="return confirm('¿Delea eliminar este usuario...?')"
                    />
                </form>
                </div>

            </div>

        @endforeach
    </div>
</div>
@endsection
