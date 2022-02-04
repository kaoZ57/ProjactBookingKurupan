<x-app-layout>

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('รายชื่ออุปกรณ์') }}
            จำนวนทั้งหมด {{ count($response->item) }} ชิ้น
        </h2>
    </x-slot>

    <div class="column is-offset-one-fifth">
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
                        <th>แก้ไข</th>
                        <th>ลบ</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i = 1)
                    @foreach ($response->item as $data)
                        <tr>
                            <td scope="row">{{ $i++ }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->item_type_id }}</td>
                            <td>{{ $data->quantity }}</td>
                            <td>{{ $data->description }}</td>
                            {{-- <td>{{ str::limit($data->description, 20) }}</td> --}}
                            @if ($data->is_active == 1)
                                <td>
                                    <span class="tag is-success">เปิด</span>
                                </td>
                            @else
                                <td>
                                    <span class="tag is-danger">ปิด</span>
                                </td>
                            @endif
                            <td><a class="button is-warning" href="{{ url('items/edit/' . $data->id) }}">แก้</a>
                            </td>
                            <td>
                                <a class="button is-danger" href="{{ url('items/deleteitems/' . $data->id) }}"
                                    onclick="return confirm('ยืนยันที่จะลบ?')">ลบ</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


</x-app-layout>
