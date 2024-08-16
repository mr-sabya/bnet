<?php

namespace App\Livewire\Backend\Service;

use App\Models\Image;
use App\Models\Service;
use Illuminate\Support\Str;
use Livewire\Component;

class Edit extends Component
{
    public $page = "Service", $service, $selectId;
    public $name, $slug, $icon, $text, $details, $image;

    /**
     * reset image upload and preview
     * @return void
     */
    public function resetImage()
    {
        $this->selectId = '';
        if ($this->service->image == null) {
            $this->image = '';
        } else {
            $this->image = $this->service->image;
        }
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

    public function mount($id)
    {
        $service = Service::find($id);
        $this->service = $service;
        $this->name = $service->name;
        $this->slug = $service->slug;
        $this->icon = $service->icon;
        $this->text = $service->text;
        $this->details = $service->details;
        $this->image = $service->image;
    }

    public function update($id)
    {
        $service = Service::find($id);
        
        $this->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:services,slug,' . $id,
            'icon' => 'required|string|max:255',
            'text' => 'required|string|max:255',
            'image' => 'required',
            'details' => 'required',
        ]);

        $service->update([
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
        return view('livewire.backend.service.edit', [
            'images' => Image::orderBy('id', 'DESC')->paginate(12),
        ]);
    }
}
