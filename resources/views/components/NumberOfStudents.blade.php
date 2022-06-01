@props([
    'number' => false,

   ])


@if($number)

    <button {{ $attributes }} class="border bg-blue-600 py-2 px-4 text-white " > {{ $number }} </button>

@endif
