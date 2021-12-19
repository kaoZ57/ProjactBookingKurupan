@extends('layouts.app')
@section('content') <h1>Items</h1>

    <script>
        console.log("respone:", $respone);
    </script>

    <p>{{ $respone }}</p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">bookingID</th>
                <th scope="col">fname</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($respone as $data)
                <tr>
                    <th scope="row">{{ $data['name'] }}</th>
                </tr>
            @endforeach --}}
        </tbody>

    </table>


@endsection
