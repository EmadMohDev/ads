<div class="form-group mb-5">
    <label class="required">@lang('inputs.external-link')</label>
    <input type="url" class="form-control" name="{{ $column_name ?? 'data' }}" placeholder="www.google.com">
    @include('layouts.includes.backend.validation_error', ['input' => $column_name ?? 'value'])
</div>
