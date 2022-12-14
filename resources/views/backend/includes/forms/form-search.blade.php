<div class="card">

    <div class="card px-2 pt-2 mb-0">
        <div class="card-header bg-blue-grey py-1">
            <h4 class="card-title text-white">
                <i class="fa fa-search fa-sm"></i><span class="mx-1">{{ $title }}</span>
            </h4>
        </div>

        <div class="card-body pb-0">
                <form action="{{ routeHelper(getModel().".index") }}" method="get" id="search-form">
                    <input type="hidden" name="search" value="1">
                {{-- END FORM INPUTS --}}
                @include('backend.' . getModel() . '.search')
                {{-- END FORM INPUTS --}}

                {{-- END FORM BUTTONS --}}
                @include('backend.includes.buttons.form-buttons')
                {{-- END FORM BUTTONS --}}
            </form>
        </div>
    </div>
    <hr>

</div>
