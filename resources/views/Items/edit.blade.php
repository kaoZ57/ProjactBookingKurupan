<x-app-layout>

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('แก้ไข') }}
        </h2>
    </x-slot>
    {{ $response }}
    {{-- @foreach ($response->item as $data)
        <p class="">{{ $data }}</p>
    @endforeach --}}
    {{-- <div class="column is-offset-one-fifth">
        <div class="box">
            <div class="modal-body text-center">
                <form action="{{ route('editItems') }}" method="POST">
                    @csrf
                    <label for="name">ชื่อ: </label><br>
                    <input type="text" name="name" value="{{ $response->name }}"><br>
                    <label for="name">ประเภท: </label><br>
                    <input type="number" name="item_type_id"><br>
                    <label for="name">คำอธิบาย: </label><br>
                    <textarea class="form-control text-center" type="text" name="description"></textarea><br>
                    <label for="name">เปิดให้จอง</label><br>
                    <input type="number" name="is_active"><br>
                    <br>
                    <button type="submit" class="button is-success"
                        onclick="return confirm('ยืนยันที่จะเพิ่ม?')">เพิ่ม</button>
                </form>
            </div>
        </div>
    </div> --}}

</x-app-layout>
