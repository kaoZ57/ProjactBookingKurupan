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
            <span class="tag is-info is-large">ชื่อผู้ใช้ปัจจุบัน {{ Auth::user()->name }} </span>

            <form action="{{ route('addBookingitems') }}" method="POST">
                <br>
                <input class="input" type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <div class="field">
                    <label class="label">อุปกรณ์ :</label>
                    <div class="select">
                        <select name="booking_item_id">
                            @foreach ($item->item as $data)
                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <div class="field">
                    <label class="label">เริ่ม :</label>
                    <input type="datetime-local" name="start_date">
                </div>
                <br>
                <div class="field">
                    <label class="label">จบ :</label>
                    <input type="datetime-local" name="end_date">
                </div>
                <br>
                <button type="submit" class="button is-success"
                    onclick="return confirm('ยืนยันที่จะจอง?')">เพิ่ม</button>
            </form>

        </div>
    </div>
</x-app-layout>
