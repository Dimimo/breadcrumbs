@if (count($breadcrumbs))

    <ul class="flex items-center justify-center font-[sans-serif] my-2">
        @foreach ($breadcrumbs as $breadcrumb)
            @if ($breadcrumb->url && !$loop->last)

                <li class="text-gray-500 text-lg cursor-pointer">
                    <a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
                </li>
                <li>
                    <svg class="fill-gray-400 w-3 h-3 mx-3 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path fill-rule="evenodd" clip-rule="evenodd" data-original="#000000"
                            d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/>
                    </svg>
                </li>
            @else

                <li class="text-gray-500 text-lg font-bold">
                    {{ $breadcrumb->title }}
                </li>
            @endif
        @endforeach

    </ul>

@endif
