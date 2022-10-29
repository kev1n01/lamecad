<?php

namespace App\Http\Livewire\Category;

use App\Models\CategoryProduct;
use App\Traits\DataTable;
use Livewire\Component;

class CategoryTable extends Component
{
    use DataTable;

    public $showFilters = false;
    public $hideModal ;
    public $method = '';
    public $idModal = 'modalCategory';
    public CategoryProduct $editing;

    protected $queryString = ['search', 'sortField','sortDirection'];  

    protected $rules = [
        'editing.name' => 'required',
    ];

    public function mount(){ $this->sortField = 'id';}

    public function showFilter(){ $this->showFilters = $this->showFilters ? false : true; }

    public function render(){
        sleep(0.5); //se toma 2 seg para renderizar
        return view('livewire.category.category-table',[
            'categories' => CategoryProduct::search('name', $this->search)
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate($this->perPage),
            ])->extends('layouts.admin.app')->section('content');
    }
     
    public function closeModal(){
        
        
    }
    
    public function save(){
        $this->validate();

        $this->hideModal = $this->editing->save() ? true : false;
    }

    public function edit(CategoryProduct $categoryProduct){
        $this->resetErrorBag();
        $this->resetValidation();

        $this->editing = $categoryProduct;
        $this->method = 'save';
    }
    
    public function delete(CategoryProduct $categoryProduct){

        $categoryProduct->delete()
        ? session()->flash('success','Categoría '. $categoryProduct->name.' eliminado')
        : session()->flash('error','La categoría '. $categoryProduct->name.' no puede ser eliminado');
    }
}
