<div class="dt--top-section">
    <div class="row">

        <style>
            .col-12 {
                flex: 0 1 auto;
            }
        </style>

        <div class="col-12 col-sm-8 d-flex justify-content-sm-start justify-content-start">

            @include(powerGridThemeRoot().'.export')

            @includeIf(powerGridThemeRoot().'.toggle-columns')

            @include(powerGridThemeRoot().'.filter')

            @include(powerGridThemeRoot().'.loading')

        </div>
    </div>
</div>

@include(powerGridThemeRoot().'.batch-exporting')

@include(powerGridThemeRoot().'.enabled-filters')




