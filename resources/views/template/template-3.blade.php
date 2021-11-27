@extends('master-page')

@section('content')
    @if (session('success'))
        <label style="color:red" for="">{{ session('success') }}</label>
    @endif
    @if ($test->id)
        <form action="{{ route('home.update', $test->id) }}" method="post">
            @csrf
            @method('PUT')
            <label for="">Name: </label>
            <input type="text" name="name" value="{{ $test->name ?? '' }}" />
            @error('name')
                <div class="alert alert-danger" style="color:red">{{ $message }}</div>
            @enderror
            <input type="submit" value="submit">
        </form>
    @else
        <form action="{{ route('home.store') }}" method="post">
            @csrf
            <label for="">Name: </label>
            <input type="text" name="name" />
            <input type="submit" value="submit">
        </form>
    @endif
@endsection
