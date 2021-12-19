@extends('layouts.app')
@section('content') <h1>Items</h1>

    <script>
        console.log("respone:", $respone);
    </script>

    {{-- <p>{{ $respone }}</p> --}}

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">item_type_id</th>
                <th scope="col">description</th>
                <th scope="col">is_active</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($respone->item as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->item_type_id }}</td>
                    <td>{{ $data->description }}</td>
                    <td>{{ $data->is_active }}</td>
                </tr>
            @endforeach
        </tbody>

    </table>


@endsection
