<div>
    @if($exportActive)
        <div class="btn-group g-mr-10">
            <button class="btn btn-secondary btn-sm dropdown-toggle"
                    type="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <span>
                        <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg"
                             fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </span>
            </button>
            <ul class="dropdown-menu">
                @if(in_array('excel',$exportType))
                    <a class="text-black-50 d-100" wire:click="exportToXLS({{ $checkbox ? true : '' }})" href="#">
                        <li class="d-flex">
                            <div class="dropdown-item">
                                Excel @lang('livewire-powergrid::datatable.labels.all')
                                @if($checkbox)
                                    / @lang('livewire-powergrid::datatable.labels.selected')
                                @endif
                            </div>
                        </li>
                    </a>
                @endif
                @if(in_array('csv',$exportType))
                    <a class="text-black-50 d-100" wire:click="exportToCsv({{ $checkbox ? true : '' }})" href="#">
                        <li class="d-flex">
                            <div class="dropdown-item">
                                Csv @lang('livewire-powergrid::datatable.labels.all')
                                @if($checkbox)
                                    / @lang('livewire-powergrid::datatable.labels.selected')
                                @endif
                            </div>
                        </li>
                    </a>
                @endif
            </ul>
        </div>
    @endif
</div>
