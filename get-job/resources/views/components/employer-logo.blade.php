@props(['employer','width' => 90])

<img src="{{ $employer->logo ? asset('storage/' . $employer->logo) : asset('images/default-logo.png') }}"
     alt="employer logo"
     class="rounded-xl"
     width="{{ $width }}">
