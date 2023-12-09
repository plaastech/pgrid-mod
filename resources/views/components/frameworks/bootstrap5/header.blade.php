<div class="dt--top-section">
    <div class="row">

        <style>
            .col-12 {
                flex: 0 1 auto;
            }

            .font-total-top {
                font-size: 14px !important;
            }

            @media screen and (max-width: 467px) {
                .font-total-top {
                    font-size: 10px !important;
                }
            }

        </style>

        <div class="col-{{ $recordCountOnTop ? 9 : 12 }} col-sm-8 d-flex justify-content-sm-start justify-content-start">

            @include(powerGridThemeRoot().'.export')

            @includeIf(powerGridThemeRoot().'.toggle-columns')

            @include(powerGridThemeRoot().'.actions-header')

            @include(powerGridThemeRoot().'.filter')

            @include(powerGridThemeRoot().'.loading')

        </div>

        @if($recordCountOnTop)
            <div class="col-3 col-sm-4 d-flex justify-content-sm-end justify-content-end align-items-center">
                <span class="badge bg-primary text-light font-total-top">
                    TOTAL: {{ $data->links()->paginator->total() ?? 0 }}
                </span>
            </div>
        @endif

    </div>
</div>

@include(powerGridThemeRoot().'.batch-exporting')

@include(powerGridThemeRoot().'.enabled-filters')
