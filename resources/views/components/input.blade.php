@props(['titulo', 'tipo', 'rex'])

<div class="my-4">
    <label for="">{{ $titulo }}</label>
    <input class="rounded-full px-2" name={{ $rex }} type={{ $tipo }} class="border rounded-x1 px-4 py-1-5">

    @error($rex)
        <p class="text-red-500">{{ $message }}</p>
    @enderror()
