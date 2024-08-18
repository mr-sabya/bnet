<?php

namespace App\Livewire\Backend\Homepage;

use App\Models\HomePage;
use App\Models\Image;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class OfferSection extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $page = "Offer Section", $homepage;
    public $offer_section_heading, $offer_section_text, $offer_section_image, $selectId;
    /**
     * reset image upload and preview
     * @return void
     */
    public function resetImage()
    {

        if ($this->homepage->offer_section_image != null) {
            $this->offer_section_image = '';
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
        $this->offer_section_image = $image->image;
    }


    public function mount()
    {
        $homepage = HomePage::where('id', 1)->first();
        $this->homepage = $homepage;
        $this->offer_section_heading = $homepage->offer_section_heading;
        $this->offer_section_text = $homepage->offer_section_text;

    }

    public function save()
    {
        $homepage = HomePage::where('id', 1)->first();

        if ($this->offer_section_image) {
            $image_name = $this->offer_section_image;
        } else {
            $image_name = $homepage->offer_section_image;
        }

        $homepage->update([
            'offer_section_heading' => $this->offer_section_heading,
            'offer_section_text' => $this->offer_section_text,
            'offer_section_image' => $image_name,
        ]);

        $this->dispatch('alert', ['type' => 'success',  'message' => $this->page.' has been updated successfully!']);
    }

    public function render()
    {
        return view('livewire.backend.homepage.offer-section', [
            'images' => Image::orderBy('id', 'DESC')->paginate(12),
        ]);
    }
}
