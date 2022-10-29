@props(['error', 'name' => '', 'label' => '', 'type' => '', 'required' => false])
<div {{ $attributes->merge(['class' => 'from-group']) }}>
    <label class="form-label" for="{{ $name }}">{{ $label }}
        <span class="text-danger">{{ $required ? '*' : '' }}</span>
    </label>
    <input type="{{ $type }}" class="form-control {{ $error ? 'is-invalid' : !$error && $name ?? 'is-valid' }}"
        id="{{ $name }}" placeholder="{{ $label }}" wire:model="{{ $name }}">
    @if ($error)
        <div class="invalid-feedback">
            {{ $errors->first($name) }}
        </div>
    @endif
</div>
