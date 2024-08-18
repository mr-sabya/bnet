<?php

namespace App\Livewire\Backend\Homepage;

use App\Models\HomePage;
use App\Models\Image;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class TopPackageSection extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $page = "Top Package Section", $homepage;
    public $top_section_heading, $top_section_text, $top_section_subtext, $top_section_image, $selectId;
    /**
     * reset image upload and preview
     * @return void
     */
    public function resetImage()
    {

        if ($this->homepage->top_section_image != null) {
            $this->top_section_image = '';
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
        $this->top_section_image = $image->image;
    }


    public function mount()
    {
        $homepage = HomePage::where('id', 1)->first();
        $this->homepage = $homepage;
        $this->top_section_heading = $homepage->top_section_heading;
        $this->top_section_text = $homepage->top_section_text;
        $this->top_section_subtext = $homepage->top_section_subtext;

    }

    public function save()
    {
        $homepage = HomePage::where('id', 1)->first();

        if ($this->top_section_image) {
            $image_name = $this->top_section_image;
        } else {
            $image_name = $homepage->top_section_image;
        }

        $homepage->update([
            'top_section_heading' => $this->top_section_heading,
            'top_section_text' => $this->top_section_text,
            'top_section_subtext' => $this->top_section_subtext,
            'top_section_image' => $image_name,
        ]);

        $this->dispatch('alert', ['type' => 'success',  'message' => $this->page.' has been updated successfully!']);
    }

    public function render()
    {
        return view('livewire.backend.homepage.top-package-section', [
            'images' => Image::orderBy('id', 'DESC')->paginate(12),
        ]);
    }

}
