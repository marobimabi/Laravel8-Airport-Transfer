<?php

namespace App\Http\Livewire;

use App\Models\Transfer;
use Livewire\Component;

class Search extends Component
{
    public $search ='';
    public function render()
    {
        $dataList = Transfer::where('title', 'like', '%'.$this->search.'%')->get();
        return view('livewire.search',['dataList'=>$dataList, 'query'=>$this->search]);
    }
}
