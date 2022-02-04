<x-app-layout>
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('เพิ่มอุปกรณ์') }}
        </h2>
    </x-slot>

    <div class="column is-offset-one-fifth">
        <div class="box">
            <div class="modal-body">
                <form action="{{ route('addItems') }}" method="POST">
                    @csrf
                    <div class="field">
                        <label class="label">ชื่อ : </label>
                        <div class="control">
                            <input class="input" type="text" name="name">
                        </div>
                    </div>
                    @error('name')
                        <span class="is-red">{{ $massage }}</span>
                    @enderror
                    <div class="field">
                        <label class="label">ประเภท : </label>
                        <div class="control">
                            <input class="input" type="number" name="item_type_id">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">จำนวน : </label>
                        <div class="control">
                            <input class="input" type="number" name="quantity">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">คำอธิบาย : </label>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <textarea class="textarea" type="text" name="description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field is-horizontal">
                        <label class="label">สถานะเปิดจอง &nbsp; </label>
                        <div class="field-body">
                            <div class="field ">
                                <div class="control">
                                    <label class="radio">
                                        <input type="radio" name="is_active" value="1">
                                        เปิด
                                    </label>
                                    <label class="radio"></label>
                                    <input type="radio" name="is_active" value="0">
                                    ปิด
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="button is-success"
                        onclick="return confirm('ยืนยันที่จะเพิ่ม?')">เพิ่ม</button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
