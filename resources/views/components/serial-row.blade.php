@props([
    'theme' => null,
    'serial' => null,
    'value'=> null,
])
@if($serial)
    <td class="{{ $theme->table->thClass }}" style="{{ $theme->table->thStyle }}">
        <div class="{{ $theme->cols->divClass }}">
            <span style="font-weight: bold;">{{ $value }}</span>
        </div>
    </td>
@endif
