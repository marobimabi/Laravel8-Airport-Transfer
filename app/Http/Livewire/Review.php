<?php

namespace App\Http\Livewire;

use App\Models\Transfer;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Review extends Component
{

    public $record ,$subject,$review,$transfer_id,$rate,$comment;
    public function mount($id){
        $this->record=Transfer::findOrFail($id);
        $this->transfer_id=$this->record->id;
    }
    public function render()
    {
        return view('livewire.review');
    }
    private function resetInput(){
        $this->subject=null;
        $this->record=null;
        $this->transfer_id=null;
        $this->rate=null;
        $this->review=null;
        $this->comment=null;
    }
    public function store(){
        $this->validate([
            'subject'=>'required|min:4',

            'comment'=>'required|min:10',
            'rate'=>'required'
        ]);
        \App\Models\Review::create([
            'transfer_id'=>$this->transfer_id,
            'user_id'=>Auth::id(),
            'ip'=>$_SERVER['REMOTE_ADDR'],
            'rate'=>$this->rate,
            'subject'=>$this->subject,
            'review'=>$this->review,
            'comment'=>$this->comment
        ]);
        session()->flash('message','Review send successfully.Thanks!');
        $this->resetInput();
    }
}
