@extends('master-page')

@section('content')
    @if (session('success'))
        <label style="color:red" for="">{{ session('success') }}</label>

    @endif
    <table border="1">
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>Delete</th>
        </tr>
        @foreach ($tests as $test)
            <tr>
                <td>{{ $test->id }}</td>
                <td>{{ $test->name }}</td>
                <td>
                    <form action="{{ route('home.delete', $test->id) }}" method="post">
                        @csrf
                        @method('DElETE')
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
