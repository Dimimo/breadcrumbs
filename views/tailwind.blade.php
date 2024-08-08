@if (count($breadcrumbs))

    <ul class="flex items-center justify-center font-[sans-serif] space-x-4 mt-4">
        @foreach ($breadcrumbs as $breadcrumb)
            @if ($breadcrumb->url && !$loop->last)

                <li class="text-gray-500 text-base cursor-pointer">
                    Home
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-400 w-3.5 -rotate-90" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                              d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                              clip-rule="evenodd" data-original="#000000"></path>
                    </svg>
                </li>
            @else

                <li class="text-gray-500 text-base cursor-pointer">
                    Profile
                </li>
            @endif
        @endforeach

    </ul>

@endif