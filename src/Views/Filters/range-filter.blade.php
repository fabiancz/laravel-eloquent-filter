<div class="form-group">
    @if(isset($label))
        <label class="label-control" for="{{ $name }}_from">{{ $label }}</label>
    @endif
    <input data-eloquent-filter type="text" name="{{ $name }}_from" id="{{ $name }}_from" value="{{ $valueFrom }}" placeholder="@lang('laravel_eloquent_filter::filter.from')" class="form-control"/>
</div>
<div class="form-group">
    <input data-eloquent-filter type="text" name="{{ $name }}_to" id="{{ $name }}_to" value="{{ $valueTo }}" placeholder="@lang('laravel_eloquent_filter::filter.to')" class="form-control"/>
</div>