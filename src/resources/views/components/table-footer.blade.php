@props([
'theme' => null,
'data' => null,
'actions' => null,
'checkbox' => null,
'primaryKey' => null,
'columns' => null,
'currentTable' => null,
'withPaginatedData' => null,
])
<tr class="{{ $theme->table->trBodyClass }} bg-secondary" style="{{ $theme->table->trBodyStyle }} font-weight: bold">
    @if($checkbox)
        <td></td>
    @endif
    @foreach ($columns as $column)
        @php
            if (filled($column->dataField) && str_contains($column->dataField, '.')) {
                $field = $column->field;
            } else
            if (filled($column->dataField) && !str_contains($column->dataField, '.')) {
                $field = $column->dataField;
            } else {
                $field = $column->field;
            }
        @endphp
        <td class="{{ $theme->table->tdBodyClassTotalColumns . ' '.$column->bodyClass ?? '' }}"
            style="{{ $column->hidden === true ? 'display:none': '' }}; {{ $theme->table->tdBodyStyleTotalColumns .' '.$column->bodyStyle ?? ''  }}">
            @if ($column->count['footer'])
                <span style="color: #fff;">{{ $column->count['label'] }}{{ $withPaginatedData->collect()->reject(function($data) use($field) { return empty($data->{$field} ?? $data[$field]); })->count($field) }}</span>
                <br>
            @endif
            @if ($column->sum['footer'] && is_numeric($withPaginatedData[0][$field]))
                <span style="color: #fff;">{{ $column->sum['label'] }}{{ round($withPaginatedData->collect()->sum($field), $column->sum['rounded']) }}</span>
                <br>
            @endif
            @if ($column->avg['footer'] && is_numeric($withPaginatedData[0][$field]))
                <span style="color: #fff;">{{ $column->avg['label'] }}{{ round($withPaginatedData->collect()->avg($field), $column->avg['rounded']) }}</span>
                <br>
            @endif
            @if ($column->min['footer'] && is_numeric($withPaginatedData[0][$field]))
                <span style="color: #fff;">{{ $column->min['label'] }}{{ round($withPaginatedData->collect()->min($field), $column->min['rounded']) }}</span>
                <br>
            @endif
            @if ($column->max['footer'] && is_numeric($withPaginatedData[0][$field]))
                <span style="color: #fff;">{{ $column->max['label'] }}{{ round($withPaginatedData->collect()->max($field), $column->max['rounded']) }}</span>
                <br>
            @endif
            @if ($column->text['footer'])
                <span style="color: #fff;">{{ $column->text['label'] }}</span>
                <br>
            @endif
        </td>

    @endforeach
    @if(isset($actions) && count($actions))
        <th class="{{ $theme->table->thClass .' '. $column->headerClass }}" scope="col"
            style="{{ $theme->table->thStyle }}" colspan="{{count($actions)}}">
        </th>
    @endif
</tr>
