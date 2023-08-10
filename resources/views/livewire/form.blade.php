<form id="{{ $id_form }}"
    class="form_add_somthing fixed top-10 hidden bg-white shadow-lg  left-1/2 p-10 transform -translate-x-1/2 border rounded gap-2 w-2/3"
    action="{{ $action }}" method="POST">
    <h3 class="text-center text-xl uppercase mb-4">{{ $title }}</h3>
    @csrf <!-- {{ csrf_field() }} -->
    @foreach ($inputs as $item)
        @if ($item['name'] !== 'content' && $item['name'] !== 'categories')
            <div class="flex justify-between p-2">
                <label class="w-1/4" for=""> {{ $item['label'] }}</label>
                <input class="border outline-none flex-1 rounded p-2" type="text" name="{{ $item['name'] }}"
                    id="">
            </div>
        @endif

        @if ($item['name'] == 'content')
            <div class="flex justify-between p-2">
                <label class="w-1/4" for=""> {{ $item['label'] }}</label>
                <textarea class="border outline-none flex-1 rounded p-2" name="{{ $item['name'] }}" id="" cols="30"
                    rows="5"></textarea>
            </div>
        @endif
        @if ($item['name'] == 'categories')
            <div class="flex justify-between p-2">
                <label class="w-1/4" for=""> {{ $item['label'] }}</label>
                <select name="{{ $item['name'] }}" id="">
                    @foreach ($item['option']['categories'] as $item)
                        <option value="{{ $item['description'] }}">{{ $item['description'] }}</option>
                    @endforeach
                </select>
            </div>
        @endif
    @endforeach
    <div class="flex justify-between">
        <button id="btn_cancel_{{ $id_form }}" class="px-4 py-1 rounded bg-red-600 text-white">Cancel</button>
        <button type="submit" id="btn_submit_{{ $id_form }}"
            class="px-4 py-1 rounded bg-green-600 text-white">Add</button>
    </div>
</form>
