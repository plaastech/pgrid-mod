@props([
    'theme' => null,
    'serial' => null,
    'title' => null,
])
@if($serial)
    <th class="{{ $theme->table->thClass }}"
        wire:key="{{ md5('serial-col') }}"
        style="width: max-content; {{ $theme->table->thStyle }}">
        <div class="{{ $theme->cols->divClass }}">
            <span>
                {{ $title }}
            </span>
        </div>
    </th>
@endif
