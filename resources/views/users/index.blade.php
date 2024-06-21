@extends('layout.template')
@section('title', 'USER CRUD')
@section('content')
<Style>
    .actions-cell {
    display: grid;
    grid-auto-flow: column;
    gap: 10px; /* Memberikan jarak antar elemen */
}

.actions-cell a,
.actions-cell form {
    margin: 0;
}
</Style>
    <h2>User Page</h2>
    <table class="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>USER</th>
                <th>EMAIL</th>
                <th>PROSES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}} </td>
                    <td class="actions-cell">
                        <a href="{{route('users.edit',$data->id)}}" class="btn btn-info">UPDATE</a>

                        <form action="{{route('users.destroy',$data->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    <a href="{{ route('users.create')}}" class="btn btn-success">ADD</a>
@endsection
