<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categoria;
// use Illuminate\Support\Facades\Storage; //para imagenes
// use Livewire\WithFileUploads; //para imagenes
use Livewire\WithPagination;

class Categorias extends Component
{
    // use WithFileUploads;
    use WithPagination;

    public $categoria, $search, $selected_id, $pageTitle, $componentName;
    private $pagination = 5;
    protected $listeners = ['deteleRow' => 'deteleRow'];

    public function mount(){
        $this->pageTitle = 'Listado';
        $this->componentName = 'Categorias';
    }

    public function render()
    {
        if(strlen($this->search) > 0){
            $data = Categoria::where('categoria', 'like', '%' . $this->search . '%')->paginate($this->pagination);
        }else{
            $data = Categoria::orderBy('id', 'desc')->paginate($this->pagination);
        }

        return view('livewire.categoria.categorias', [ 'data' => $data ])
            ->extends('layouts.theme.app')
            ->section('content');
    }

    public function paginationView(){
        return "vendor.livewire.bootstrap";
    }

    public function Edit($id){
        dd($id);
        $this->emit('showModal', 'show modal');
        // $record = Categoria::find($id);
        // $this->categoria = $record->categoria;
        // $this->selected_id = $record->id;   
    }

    public function prueba($id){
        dd($id);
    }

    public function deteleRow($id){
        dd("eliminando ");

    }



    
    
}
