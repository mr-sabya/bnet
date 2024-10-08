<?php

namespace App\Livewire\Backend\Homepage;

use App\Models\HomePage;
use App\Models\Image;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class BannerSection extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $page = "Banner Section", $homepage;
    public $banner_heading, $banner_text, $banner_image, $banner_package_price, $selectId;
    /**
     * reset image upload and preview
     * @return void
     */
    public function resetImage()
    {

        if ($this->homepage->banner_image != null) {
            $this->banner_image = '';
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
        $this->banner_image = $image->image;
    }


    public function mount()
    {
        $homepage = HomePage::where('id', 1)->first();
        $this->homepage = $homepage;
        $this->banner_heading = $homepage->banner_heading;
        $this->banner_text = $homepage->banner_text;
        $this->banner_package_price = $homepage->banner_package_price;

    }

    public function save()
    {
        $homepage = HomePage::where('id', 1)->first();

        if ($this->banner_image) {
            $image_name = $this->banner_image;
        } else {
            $image_name = $homepage->banner_image;
        }

        $homepage->update([
            'banner_heading' => $this->banner_heading,
            'banner_text' => $this->banner_text,
            'banner_image' => $image_name,
            'banner_package_price' => $this->banner_package_price,
        ]);

        $this->dispatch('alert', ['type' => 'success',  'message' => $this->page.' has been updated successfully!']);
    }

    public function render()
    {
        return view('livewire.backend.homepage.banner-section', [
            'images' => Image::orderBy('id', 'DESC')->paginate(12),
        ]);
    }
}
