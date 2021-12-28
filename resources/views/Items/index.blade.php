<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">item_type_id</th>
                    <th scope="col">description</th>
                    <th scope="col">is_active</th>
                    <th scope="col">ดู</th>
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
                        <td><a href="{{ url('items/' . $data->id) }}" class="btn btn-primary">ดู</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </x-jet-authentication-card>
</x-guest-layout>
