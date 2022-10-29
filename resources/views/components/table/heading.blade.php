@props(['sortable' => '', 'direction' => ''])

<th {{ $attributes->merge(['class' => ''])->only('class') }} scope="col">
    @unless($sortable)
        {{ $slot }}
    @else
        <span>
            {{ $slot }}
        </span>
        <a href="javascript:void(0);" class="action-icon"{{ $attributes->except('class') }}>
            @if ($direction === 'asc')
                <span class="mdi mdi-sort-ascending"></span>
            @elseif ($direction === 'desc')
                <span class="mdi mdi-sort-descending"></span>
            @else
                <span class="mdi mdi-sort"></span>
            @endif
        </a>

        @endif

    </th>
