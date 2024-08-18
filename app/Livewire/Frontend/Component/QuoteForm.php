<?php

namespace App\Livewire\Frontend\Component;

use App\Models\Package;
use App\Models\Quote;
use Livewire\Component;

class QuoteForm extends Component
{
    public $name, $phone, $email, $package_id, $address;


    public function resetFields()
    {
        $this->name = '';
        $this->phone = '';
        $this->email = '';
        $this->package_id = '';
        $this->address = '';
    }

    public function mount($id = '')
    {
        if($id != ''){
            $this->package_id = $id;
        }
    }

    public function store()
    {
        // dd($this->email);
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required'],
            'email' => ['nullable', 'string', 'email', 'max:255'],
            'package_id' => ['required'],
            'address' => ['required', 'string', 'max:255'],
        ], [
            'package_id.required' => 'Please select a package',
        ]);

        try {


            Quote::create([
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
                'package_id' => $this->package_id,
                'address' => $this->address,
            ]);

            $this->resetFields();

            session()->flash('success', 'Thank you for your request. We will contact you soon!!');
        } catch (\Exception $ex) {
            session()->flash('error', 'Something went wrong!');
        }
    }
    public function render()
    {
        return view('livewire.frontend.component.quote-form', [
            'packages' => Package::orderBy('id', 'ASC')->get(),
        ]);
    }
}
