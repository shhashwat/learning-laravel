@props(['name'])

@error($name)
    <p class="mt-2 mb-2 text-red-500 italic text-sm font-semibold">
    {{ $message }}
    </p>
@enderror