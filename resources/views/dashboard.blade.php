<x-app-layout>

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ผู้ใช้งาน') }}
            จำนวนทั้งหมด {{ count($users) }} คน
        </h2>
    </x-slot>

    <div class="column is-offset-one-fifth">
        <div class="box">
            <table class="table table is-fullwidth">
                <thead>
                    <tr>
                        <th>ลำดับ</th>
                        <th>ชื่อ</th>
                        <th>อีเมล์</th>
                        {{-- <th>ประเภท</th> --}}
                        <th>เริ่มสมัคร</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i = 1)
                    @foreach ($users as $row)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->email }}</td>
                            {{-- <td>{{ $row->social_type }}</td> --}}
                            <td>{{ $row->created_at->diffForHumans() }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


</x-app-layout>
