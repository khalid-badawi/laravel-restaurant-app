<?php

namespace App\Livewire;

use App\Models\MenuItem;
use Livewire\Component;

class MenuFilter extends Component
{
    public $category='all';

    public function filterCategory($category){
        $this->category=$category;
    }
    public function render()
    {
        return view('livewire.menu-filter',['menuItems'=>$this->getFilteredMenuItems()]);
    }

    public function getFilteredMenuItems(){
        if($this->category==='all'){
            return MenuItem::all();
        }
        else{
            return MenuItem::where('category',$this->category)->get();
        }
    }
}
