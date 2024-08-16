<?php

namespace App\Livewire\Backend\Service;

use App\Models\Image;
use App\Models\Service;
use Illuminate\Support\Str;
use Livewire\Component;

class Create extends Component
{
    public $page = 'Service', $selectId;
    public $name, $slug, $icon, $text, $details, $image;

    /**
     * reset image upload and preview
     * @return void
     */
    public function resetImage()
    {
        $this->image = '';
    }

    public function openImageModal()
    {
        $this->dispatch('open-modal');
    }

    public function selectImage($id)
    {
        $image = Image::find($id);
        $this->selectId = $image->id;
        $this->image = $image->image;
    }


    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }


    public function store()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:services',
            'icon' => 'required|string|max:255',
            'text' => 'required|string|max:255',
            'image' => 'required',
            'details' => 'required',
        ]);

        Service::create([
            'name' => $this->name,
            'slug' => $this->slug,
            'icon' => $this->icon,
            'text' => $this->text,
            'image' => $this->image,
            'details' => $this->details,
        ]);

        session()->flash('success', $this->page . ' has been created successfully!');
        return $this->redirect(route('admin.service.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.backend.service.create', [
            'images' => Image::orderBy('id', 'DESC')->paginate(12),
        ]);
    }
}
