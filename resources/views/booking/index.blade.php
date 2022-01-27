<x-app-layout>

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('จองอุปกรณ์') }}
        </h2>
    </x-slot>

    <div class="column is-offset-one-fifth">
        <div class="box">
            <div class="column">
                <div class="modal-body">
                    <label class="label">อุปกรณ์ :</label>
                    <div class="select">
                        <select>
                            @foreach ($item->item as $data)
                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <br>
            <div class="column">
                <div class="columns">
                    <label class="label">เริ่ม :</label>
                    <input type="datetime-local" name="start_date">
                </div>
                <br>
                <div class="columns">
                    <label class="label">จบ :</label>
                    <input type="datetime-local" name="end_date">
                </div>
                <br>
                <br>
                <button type="submit" class="button is-success"
                    onclick="return confirm('ยืนยันที่จะเพิ่ม?')">เพิ่ม</button>
            </div>

        </div>
    </div>

</x-app-layout>
