<?php

namespace App\Livewire\Backend\Homepage;

use App\Models\HomePage;
use App\Models\Image;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class CtaSection extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $page = "CTA Section", $homepage;
    public $cta_section_heading, $cta_section_image,  $selectId;

    /**
     * reset image upload and preview
     * @return void
     */
    public function resetImage()
    {

        if ($this->homepage->cta_section_image != null) {
            $this->cta_section_image = '';
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
        $this->cta_section_image = $image->image;
    }

    public function mount()
    {
        $homepage = HomePage::where('id', 1)->first();
        $this->homepage = $homepage;
        $this->cta_section_heading = $homepage->cta_section_heading;
    }

    public function save()
    {
        $homepage = HomePage::where('id', 1)->first();

        if ($this->cta_section_image) {
            $image_name = $this->cta_section_image;
        } else {
            $image_name = $homepage->cta_section_image;
        }

        $homepage->update([
            'cta_section_heading' => $this->cta_section_heading,
            'cta_section_image' => $image_name,
        ]);

        $this->dispatch('alert', ['type' => 'success',  'message' => $this->page . ' has been updated successfully!']);
    }

    public function render()
    {
        return view('livewire.backend.homepage.cta-section', [
            'images' => Image::orderBy('id', 'DESC')->paginate(12),
        ]);
    }
}
