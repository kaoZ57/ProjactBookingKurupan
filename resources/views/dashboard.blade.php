<x-app-layout>

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('หน้าหลัก') }}
            {{-- จำนวนทั้งหมด {{ count($users) }} คน --}}
        </h2>
    </x-slot>

    {{-- <div class="column is-offset-one-fifth">
        <div class="box">
            <table class="table table is-fullwidth">
                <thead>
                    <tr>
                        <th>ลำดับ</th>
                        <th>ชื่อ</th>
                        <th>อีเมล์</th>
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
                            <td>{{ $row->created_at->diffForHumans() }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> --}}

    <div class="column is-offset-1">
        <div class="box">
            <div class="columns">
                <div class="column">
                    <div class="box">
                        <div id='calendar'></div>
                    </div>
                </div>
                <div class="column">
                    <div class="box">
                        <table class="table is-fullwidth">
                            <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>ชื่อ</th>
                                    <th>ประเภท</th>
                                    <th>จำนวน</th>
                                    <th>คำอธิบาย</th>
                                    <th>สถานะ</th>
                                    <th>จอง</th>
                                    {{-- @if (Auth::user()->is_admin == 1 || Auth::user()->is_staff == 1)
                                        <th>แก้ไข</th>
                                        <th>ลบ</th>
                                    @else
                                    @endif --}}
                                </tr>
                            </thead>
                            <tbody>
                                @php($i = 1)
                                @foreach ($items->item as $data)
                                    <tr>
                                        <td scope="row">{{ $i++ }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->item_type_id }}</td>
                                        <td>{{ $data->quantity }}</td>
                                        <td>{{ $data->description }}</td>
                                        @if ($data->is_active == 1)
                                            <td>
                                                <span class="tag is-success">เปิด</span>
                                            </td>
                                            <td>
                                                <a class="button is-primary" href="{{ url('' . $data->id) }}">จอง</a>
                                            </td>
                                        @else
                                            <td>
                                                <span class="tag is-danger">ปิด</span>
                                            </td>
                                            <td>
                                                <a class="button is-static" title="Disabled button" disabled
                                                    href="{{ url('' . $data->id) }}">จอง</a>
                                            </td>
                                        @endif

                                        {{-- @if (Auth::user()->is_admin == 1 || Auth::user()->is_staff == 1)
                                            <td><a class="button is-warning"
                                                    href="{{ url('items/edit/' . $data->id) }}">แก้</a>
                                            </td>
                                            <td>
                                                <a class="button is-danger"
                                                    href="{{ url('items/deleteitems/' . $data->id) }}"
                                                    onclick="return confirm('ยืนยันที่จะลบ?')">ลบ</a>
                                            </td>
                                        @else
                                        @endif
                                    </tr> --}}
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
