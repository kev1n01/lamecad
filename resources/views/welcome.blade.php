@extends('layouts.admin.app')
@section('title', 'Welcome')
@section('content')

    {{-- formulario --}}
    {{-- <x-form method="submit" class="mb-4">
        <x-input.input-group class="mb-3 mt-3 row">
            <x-input.input-tooltip-error class="col-6" name="descripcion" label="Descripción" type="text" :error="$errors->has('descripcion')"
                :required=true />
            <x-input.input-tooltip-error class="col-6" name="titulo" label="Título" type="text" :error="$errors->has('titulo')"
                :required=true />
        </x-input.input-group>

        <div class="d-flex">
            <x-input.input-group>
                <x-input.input-tooltip-error class="col-6 mb-3" name="telefono" label="Teléfono" type="text"
                    :error="$errors->has('telefono')" :required=true />
            </x-input.input-group>

            <x-input.input-group>
                <x-input.input-label class="col-6 mb-3" name="edad" label="Edad" type="number" :error="$errors->has('edad')" />
            </x-input.input-group>
        </div>
        <x-input.input-group>
            <x-input.input-float-label class="col-6 mb-3 " name="direccion" label="Dirección" type="text"
                :error="$errors->has('direccion')" :required=true />
        </x-input.input-group>

        <button class="btn btn-primary" type="submit">Submit form</button>

    </x-form> --}}
    {{-- formulario --}}

    {{-- table component --}}

    {{-- table component --}}

@endsection
