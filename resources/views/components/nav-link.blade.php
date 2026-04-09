{{-- <a {{ $attributes }} aria-current="{{ request()->is('/') ? 'page' : false }}"
    class="{{ request()->is('/') ? 'bg-gray-900' : 'hover:bg-white/5' }} rounded-md px-3 py-2 text-sm font-medium text-white">{{ $slot }}</a> --}}

<a {{ $attributes }} aria-current="{{ $active ? 'page' : false }}"
    class="{{ $active ? 'bg-gray-900' : 'hover:bg-white/5' }} rounded-md px-3 py-2 text-sm font-medium text-white">{{ $slot }}</a>
