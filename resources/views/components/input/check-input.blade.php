@props(['name' => '', 'checked' => null])

<div {{ $attributes->merge(['class' => 'form-check']) }}>
    <input type="checkbox" class="form-check-input" {{ $checked }} id="{{ $name }}"
        wire:model="{{ $name }}" />
    <label class="form-check-label" for="{{ $name }}">&nbsp;</label>
</div>
