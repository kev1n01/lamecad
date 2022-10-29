<div>
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-xl-12">
                            <x-alert type="success" :dismissible=true />
                            <x-alert type="error" :dismissible=true />
                        </div>
                        <div class="col-xl-9">
                            <div
                                class="row gy-2 gx-2 align-items-center justify-content-xl-start justify-content-between">
                                <div class="col-2">
                                    <div class="d-flex align-items-start me-1">
                                        <select class="form-select select2" id="perPage" wire:model="perPage">
                                            <option value="2">2</option>
                                            <option value="5">5</option>
                                            <option value="20">20</option>
                                            <option value="50">50</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <input type="search" class="form-control" wire:model="search"
                                        placeholder="Buscar...">
                                </div>

                                <div class="col-3">
                                    <a wire:click="showFilter"
                                        class="action-icon">{{ $showFilters ? 'Ocultar filtros..' : 'Mostrar filtros..' }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="text-xl-end mt-xl-0 mt-2">
                                <button type="button" class="btn btn-dark mb-2 me-2"><i
                                        class="mdi mdi-basket me-1"></i>
                                    Nuevo</button>
                                <button type="button" class="btn btn-light mb-2">Export</button>
                            </div>
                        </div>
                        @if ($showFilters)
                            <div class="col-xl-12" wire:target="showFilter">

                            </div>
                        @endif
                    </div>

                    <div class="table-responsive">
                        <x-table>
                            <x-slot name="head">

                                <x-table.heading style="width: 20px;">
                                    <x-input.check-input name="import" />
                                </x-table.heading>

                                <x-table.heading sortable wire:click="sortBy('id')" :direction="$sortField == 'id' ? $sortDirection : null">#
                                </x-table.heading>

                                <x-table.heading sortable wire:click="sortBy('name')" :direction="$sortField == 'name' ? $sortDirection : null">NOMBRE
                                </x-table.heading>

                                <x-table.heading sortable wire:click="sortBy('created_at')" :direction="$sortField == 'created_at' ? $sortDirection : null">FECHA
                                    CREACIÓN</x-table.heading>

                                <x-table.heading sortable wire:click="sortBy('updated_at')" :direction="$sortField == 'updated_at' ? $sortDirection : null">FECHA
                                    ACTUALIZACIÓN</x-table.heading>

                                <x-table.heading>ACCIÓN</x-table.heading>

                            </x-slot>


                            <x-slot name="body">
                                @forelse ($categories as $category)
                                    <x-table.row wire:loading.class="bg-light" wire:target="search">

                                        <x-table.cell>
                                            <x-input.check-input name="import" />
                                        </x-table.cell>

                                        <x-table.cell>{{ $category->id }}</x-table.cell>

                                        <x-table.cell>{{ $category->name }}</x-table.cell>

                                        <x-table.cell>{{ $category->created_at }}</x-table.cell>

                                        <x-table.cell>{{ $category->updated_at }}</x-table.cell>

                                        <x-table.cell>

                                            <a class="action-icon" wire:click="edit({{ $category->id }})"
                                                data-bs-toggle="modal" data-bs-target="#{{ $idModal }}">
                                                <i class="mdi mdi-square-edit-outline"></i> </a>
                                            <a class="action-icon" wire:click="delete('{{ $category->id }}')"><i
                                                    class="mdi mdi-delete"></i></a>
                                        </x-table.cell>

                                    </x-table.row>

                                @empty

                                    @if ($search)
                                        <x-table.row>
                                            <x-table.cell class="text-center" colspan="5">
                                                No se encontró la categoría
                                            </x-table.cell>
                                        </x-table.row>
                                    @else
                                        <x-table.row>
                                            <x-table.cell class="text-center" colspan="5">
                                                No hay categorias registradas
                                            </x-table.cell>
                                        </x-table.row>
                                    @endif
                                @endforelse

                            </x-slot>

                        </x-table>

                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-form method="{{ $method }}">
        <x-modal-dialog :id="$idModal" title="Edición de categoría">
            <x-slot name="body">

                <x-input.input-group>

                    <x-input.input-group>
                        <x-input.input-tooltip-error class="col-12" name="editing.name" label="Nombre de categoría"
                            type="text" :error="$errors->first('editing.name')" :required=true />
                    </x-input.input-group>
                </x-input.input-group>

            </x-slot>

            <x-slot name="footer">
                <button type="button" class="btn btn-secondary" wire:click="closeModal">Cerrar</button>

                <button type="submit" class="btn btn-primary">
                    <span wire:loading.delay wire:target="save" class="spinner-border spinner-border-sm"></span>
                    Guardar
                </button>
            </x-slot>
        </x-modal-dialog>
    </x-form>
</div>
