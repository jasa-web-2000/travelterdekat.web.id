<div>
    <label for="origin_province">Provinsi asal
    </label>
    <select title="Provinsi asal" id="origin_province" name="origin_province" class="py-2" required autocomplete="off">
        <option value="">Pilih provinsi</option>
        @foreach ($data->sortBy('name') as $item)
            <option value="{{ $item->id }}">{{ Str::title($item->name) }}</option>
        @endforeach
    </select>
</div>
