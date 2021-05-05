<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Exchange extends Component
{
    public $rate = 0;
    public $amount = 0;
    public $result;

    protected $rules = [
        'rate' => 'required|numeric',
        'amount' => 'required|numeric',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
        $this->result = $this->amount * $this->rate;
    }

    public function render()
    {
        $currencies = Http::get("https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5")->json();
        return view('livewire.exchange', compact('currencies'));
    }
}
